<?php

namespace App\Http\Controllers;

use App\Models\CameraSpecModel;
use App\Models\FolderModel;
use App\Models\ImageModel;
use App\Models\ModelsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ImagesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = ModelsModel::all();
        return view('admin.forms.preImageForm',['models'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    $modelId = $request->input('model_id');
    $model = ModelsModel::find($modelId);
    $phoneModel = $model->name;
    $date = $model->date_of_delivery;

        $parentFolder = FolderModel::where('folder_name', $phoneModel)->first();


        if($parentFolder){
            $dateFolder = FolderModel::where('parent_folder_id', $parentFolder->id)->where('folder_name', $date)->first();
            if($dateFolder){
                return view('admin.forms.imageForm',['model'=>$model]);
            }
            else{
                mkdir(public_path('assets/images/'.$phoneModel.'/' . $date),0777,true);
                FolderModel::create([
                    'folder_name'=>$date,
                    'parent_folder_id'=>FolderModel::where('folder_name', $phoneModel)->value('id')
                ]);
                return $this->create($request);
            }
        }
        else{
            mkdir(public_path('assets/images/'.$phoneModel),0777,true);
            FolderModel::create([
                'folder_name'=>$phoneModel,
                'parent_folder_id'=>null
            ]);
            return $this->create($request);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model_id = $request->input('model_id');

        $model = ModelsModel::find($model_id);
        $parentFolder = $model->name;
        $folderName = $model->date_of_delivery;
        $parentFolderId = FolderModel::where('folder_name', $parentFolder)->value('id');
        $folderId = FolderModel::where('folder_name', $folderName)->where('parent_folder_id', $parentFolderId)->value('id');
        try {
            foreach ($request->file('images') as $key => $image) {

               $path = 'assets/images/'.$model->name.'/'.$model->date_of_delivery;

                $folderPath = public_path('assets/images/'.$model->name.'/'.$model->date_of_delivery);
                $fileName = $key+1 .'.jpg';

                if (!File::exists($folderPath . '/' . $fileName)) {
                    $image->move($folderPath, $fileName);
                }

                ImageModel::create([
                    'image_name'=>$key+1,
                    'model_id'=>$model_id,
                    'folder_id'=>$folderId

                ]);

            }

            return redirect()->route('showTable',['table'=>'images'])->with('success', 'Uspešno uneto!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('Error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $table = ImageModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'images'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }
    }
}

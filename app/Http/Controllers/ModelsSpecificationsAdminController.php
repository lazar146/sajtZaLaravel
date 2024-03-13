<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCheckRequest;
use App\Http\Requests\ProveraReg;
use App\Models\BrandModel;
use App\Models\CameraSpecModel;
use App\Models\MemorySpecModel;
use App\Models\ModelsModel;
use App\Models\ModelSpecificationModel;
use App\Models\RamSpecModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ModelsSpecificationsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models =ModelsModel::all();
        $camera =CameraSpecModel::all();
        $memory =MemorySpecModel::all();
        $ram = RamSpecModel::all();
        $isNew = true;
        return view('admin.forms.modelSpecificationsForm',['isNew'=>$isNew,'camera'=>$camera,'models'=>$models,'ram'=>$ram,'memory'=>$memory]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminCheckRequest $request)
    {

        try {

            $model_id = $request->input('model_id');
            $camera_id = $request->input('camera_id');
            $memory_id = $request->input('memory_id');
            $ram_id = $request->input('ram_id');

            ModelSpecificationModel::create([
                'model_id'=>$model_id,
                'camera_id'=>$camera_id,
                'memory_id'=>$memory_id,
                'ram_id'=>$ram_id,
            ]);

            return redirect()->route('showTable',['table'=>'model_specifications'])->with('success', 'Successful.');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
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
        $models =ModelsModel::all();
        $camera =CameraSpecModel::all();
        $memory =MemorySpecModel::all();
        $ram = RamSpecModel::all();
        $content = ModelSpecificationModel::find($id);
        $isNew = false;
        return view('admin.forms.modelSpecificationsForm',['content'=>$content,'isNew'=>$isNew,'camera'=>$camera,'models'=>$models,'ram'=>$ram,'memory'=>$memory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminCheckRequest $request, string $id)
    {

        try {


            $row = ModelSpecificationModel::find($id);
            $model_id = $request->input('model_id');
            $camera_id = $request->input('camera_id');
            $memory_id = $request->input('memory_id');
            $ram_id = $request->input('ram_id');





            $row->model_id=$model_id;
            $row->camera_id=$camera_id;
            $row->memory_id=$memory_id;
            $row->ram_id=$ram_id;
            $row->save();
            return redirect()->route('showTable',['table'=>'model_specifications'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $table = ModelSpecificationModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'model_specifications'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

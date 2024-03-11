<?php

namespace App\Http\Controllers;

use App\Models\ColorModel;
use App\Models\ModelSpecificationColorModel;
use App\Models\ModelSpecificationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ModelsSpecificationColorAdminController extends Controller
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
        $modelSpec = DB::table('models')
            ->join('model_specifications','models.id','=','model_specifications.model_id')
            ->select('models.name as modelName','model_specifications.id as ms_id')
            ->get();

        $colors = ColorModel::all();

        $isNew = true;
        return view('admin.forms.modelSpecificationColorForm',['isNew'=>$isNew,'modelSpec'=>$modelSpec,'colors'=>$colors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $ms_id = $request->input('ms_id');
            $color_id = $request->input('color_id');

            ModelSpecificationColorModel::create([
                'ms_id'=>$ms_id,
                'color_id'=>$color_id,

            ]);

            return redirect()->route('showTable',['table'=>'model_specification_color'])->with('success', 'Successful.');
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
        $modelSpec = DB::table('models')
            ->join('model_specifications','models.id','=','model_specifications.model_id')
            ->select('models.name as modelName','model_specifications.id as ms_id')
            ->get();

        $colors = ColorModel::all();
        $content = ModelSpecificationColorModel::find($id);
        $isNew = false;
        return view('admin.forms.modelSpecificationColorForm',['content'=>$content,'isNew'=>$isNew,'modelSpec'=>$modelSpec,'colors'=>$colors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
//            $validatedData = $request->validate([
//                'value'=>'required|int|max:255'
//            ]);

            $row = ModelSpecificationColorModel::find($id);
            $ms_id = $request->input('ms_id');
            $color_id = $request->input('color_id');





            $row->ms_id=$ms_id;
            $row->color_id=$color_id;

            $row->save();
            return redirect()->route('showTable',['table'=>'model_specification_color'])->with('success','Uspesno!');
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
            return redirect()->route('showTable',['table'=>'model_specification_color'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

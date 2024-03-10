<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveraReg;
use App\Models\BrandModel;
use App\Models\ModelsModel;
use App\Models\RoleModel;
use App\Models\UserDva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ModelsAdminController extends Controller
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
        $brands = BrandModel::all();
        $isNew = true;
        return view('admin.forms.modelsForm',['isNew'=>$isNew,'brands'=>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveraReg $request)
    {

        try {

            $name = $request->input('name');
            $date = $request->input('date');
            $brand = $request->input('brand');


            ModelsModel::create([
                'name'=>$name,
                'date_of_delivery'=>$date,
                'brand_id'=>$brand,

            ]);

            return redirect()->route('showTable',['table'=>'models'])->with('success', 'Successful.');
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
        $brands = BrandModel::all();
        $content = ModelsModel::find($id);
        $isNew = false;
        return view('admin.forms.modelsForm',['content'=>$content,'isNew'=>$isNew,'brands'=>$brands]);
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

            $row = ModelsModel::find($id);
            $name = $request->input('name');
            $date = $request->input('date');
            $brand = $request->input('brand');





            $row->name=$name;
            $row->date_of_delivery=$date;
            $row->brand_id=$brand;

            $row->save();
            return redirect()->route('showTable',['table'=>'models'])->with('success','Uspesno!');
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

            $table = ModelsModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'models'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

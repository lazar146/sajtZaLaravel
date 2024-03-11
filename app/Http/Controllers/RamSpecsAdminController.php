<?php

namespace App\Http\Controllers;

use App\Models\CameraSpecModel;
use App\Models\RamSpecModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RamSpecsAdminController extends Controller
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
        $isNew = true;
        return view('admin.forms.specsForm',['isNew'=>$isNew,'tableName'=>'ram']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $data = $request->input('value');

            RamSpecModel::create([
                'value'=>$data
            ]);
            return redirect()->route('showTable',['table'=>'ram_specs'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Brend nije kreiran!');
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
        $content = RamSpecModel::find($id);
        $isNew = false;
        return view('admin.forms.specsForm',['content'=>$content,'isNew'=>$isNew,'tableName'=>'ram']);
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
            $row = RamSpecModel::find($id);
            $name = $request->input('value');
            $row->value=$name;
            $row->save();
            return redirect()->route('showTable',['table'=>'ram_specs'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Brend nije kreiran!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $table = RamSpecModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'ram_specs'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Brend nije kreiran!');
        }

    }
}

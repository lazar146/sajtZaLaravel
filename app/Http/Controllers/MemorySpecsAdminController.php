<?php

namespace App\Http\Controllers;

use App\Models\MemorySpecModel;
use App\Models\RamSpecModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MemorySpecsAdminController extends Controller
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
        return view('admin.forms.specsForm',['isNew'=>$isNew,'tableName'=>'memory']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $data = $request->input('value');

            MemorySpecModel::create([
                'value'=>$data
            ]);
            return redirect()->route('showTable',['table'=>'memory_specs'])->with('success','Uspesno!');
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
        $content = MemorySpecModel::find($id);
        $isNew = false;
        return view('admin.forms.specsForm',['content'=>$content,'isNew'=>$isNew]);
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
            $row = MemorySpecModel::find($id);
            $name = $request->input('value');
            $row->value=$name;
            $row->save();
            return redirect()->route('showTable',['table'=>'memory_specs'])->with('success','Uspesno!');
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

            $table = MemorySpecModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'memory_specs'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Brend nije kreiran!');
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCheckRequest;
use App\Models\MenusModel;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RolesAdminController extends Controller
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
        return view('admin.forms.rolesForm',['isNew'=>$isNew]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminCheckRequest $request)
    {

        try {

            $name = $request->input('name');

            RoleModel::create([
                'name'=>$name,

            ]);
            return redirect()->route('showTable',['table'=>'roles'])->with('success','Uspesno!');
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
        $content = RoleModel::find($id);
        $isNew = false;
        return view('admin.forms.rolesForm',['content'=>$content,'isNew'=>$isNew]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminCheckRequest $request, string $id)
    {

        try {
//            $validatedData = $request->validate([
//                'value'=>'required|int|max:255'
//            ]);
            $row = RoleModel::find($id);
            $name = $request->input('name');

            $row->name=$name;

            $row->save();
            return redirect()->route('showTable',['table'=>'roles'])->with('success','Uspesno!');
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

            $table = RoleModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'roles'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

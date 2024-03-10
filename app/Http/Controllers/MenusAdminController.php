<?php

namespace App\Http\Controllers;

use App\Models\CameraSpecModel;
use App\Models\MenusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MenusAdminController extends Controller
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
        return view('admin.forms.menusForm',['isNew'=>$isNew]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $name = $request->input('name');
            $route = $request->input('route');
            MenusModel::create([
                'name'=>$name,
                'route'=>$route
            ]);
            return redirect()->route('showTable',['table'=>'menus'])->with('success','Uspesno!');
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
        $content = MenusModel::find($id);
        $isNew = false;
        return view('admin.forms.menusForm',['content'=>$content,'isNew'=>$isNew]);
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
            $row = MenusModel::find($id);
            $name = $request->input('name');
            $route = $request->input('route');
            $row->name=$name;
            $row->route=$route;
            $row->save();
            return redirect()->route('showTable',['table'=>'menus'])->with('success','Uspesno!');
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

            $table = MenusModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'menus'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Brend nije kreiran!');
        }

    }
}

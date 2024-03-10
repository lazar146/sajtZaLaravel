<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandsAdminController extends Controller
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
        return view('admin.forms.brandsForm',['isNew'=>$isNew]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validationData = $request->validate([
                'name'=>'required|string|max:255'
            ]);
            $table = BrandModel::create($validationData);
            return redirect()->route('admin')->with('success', 'Brend je uspešno kreiran!');
        }
        catch (\Exception $e)
        {
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
        $isNew = false;
        $tableContent = DB::table('brands')->find($id);
        return view('admin.forms.brandsForm',['content'=>$tableContent,'isNew'=>$isNew]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $row = BrandModel::find($id);
            $name = $request->input('name');
            $row->name=$name;
            $row->save();
            return redirect()->route('admin')->with('message', 'Uspešno izvršeno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Došlo je do greške prilikom izvršavanja.');
        }


        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $col = BrandModel::find($id);
            $col->delete();
            return redirect()->route('admin')->with('message', 'Uspešno izvršeno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Došlo je do greške prilikom izvršavanja.');
        }
    }
}

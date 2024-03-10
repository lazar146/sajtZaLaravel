<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveraReg;
use App\Models\RoleModel;
use App\Models\UserDva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsersDvaAdminController extends Controller
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
        $role = RoleModel::all();
        $isNew = true;
        return view('admin.forms.usersForm',['isNew'=>$isNew,'role'=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveraReg $request)
    {

        try {

            $name = $request->input('name');
            $last_name = $request->input('last_name');
            $email = $request->input('email');
            $password = $request->input('password');
            $conf_pass= $request->input('password_confirmation');
            $role = $request->input('userRole');

            UserDva::create([
                'name'=>$name,
                'last_name'=>$last_name,
                'email'=>$email,
                'password'=>Hash::make($password),
                'role_id'=>$role
            ]);

            return redirect()->route('home')->with('success', 'Registration successful. Please login.');
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
        $role = RoleModel::all();
        $content = UserDva::find($id);
        $isNew = false;
        return view('admin.forms.usersForm',['content'=>$content,'isNew'=>$isNew,'role'=>$role]);
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

            $row = UserDva::find($id);
            $name = $request->input('name');
            $last_name = $request->input('last_name');
            $email = $request->input('email');
            $password = $request->input('password');

            $role = $request->input('userRole');

            $row->name=$name;
            $row->last_name=$last_name;
            $row->email=$email;
            $row->password=Hash::make($password);
            $row->role_id=$role;
            $row->save();
            return redirect()->route('showTable',['table'=>'users_dva'])->with('success','Uspesno!');
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

            $table = UserDva::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'users_dva'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

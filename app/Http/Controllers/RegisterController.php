<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveraReg;
use App\Models\UserDva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.register');
    }

    public function register(ProveraReg $request){


        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $conf_pass= $request->input('password_confirmation');


        $newUser = UserDva::create([
            'name' => $name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => 2
        ]);

        $newUserId = $newUser->id;
        DB::table('log')->insert([
            'logType_id' => 2,
            'user_id' => $newUserId,
            'value' => 'User ' . $newUser->name . ' ' . $newUser->lastname . ' has registered in.',
            'created_at' => now()
        ]);
        return redirect()->route('home')->with('success', 'Registration successful. Please login.');
    }
}

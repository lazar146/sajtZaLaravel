<?php

namespace App\Http\Controllers;

use App\Models\UserDva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm(){
        return view('pages.login');
    }

    public function login(Request $request){


        $user = UserDva::where('email', $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {
            //Auth::login($user);
            $request->session()->put('user',$user);
            $data = $request->session()->all();

            return redirect()->intended();
        }

        return redirect()->back()->withErrors(['error' => 'Email ili Password nisu dobri']);
    }

    public function logout(Request $request)
    {

        $user = $request->session()->get('user')->id;
        $request->session()->forget('user');
        $data = session()->all();

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\UserDva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $userSes = session()->get('user')->id;
            DB::table('log')->insert([
                'logType_id' => 2,
                'user_id' => $userSes,
                'value' => 'User ' . $user->name . ' ' . $user->lastname . ' has logged in.',
                'created_at' => now()
            ]);
            return redirect()->intended();
        }

        return redirect()->back()->withErrors(['error' => 'Email ili Password nisu dobri']);
    }

    public function logout(Request $request)
    {

        $user = $request->session()->get('user');
        $request->session()->forget('user');
        DB::table('log')->insert([
            'logType_id' => 2,
            'user_id' => $user->id,
            'value' => 'User ' . $user->name . ' ' . $user->lastname . ' has logged out.',
            'created_at' => now()
        ]);
        $data = session()->all();

        return redirect('/login');
    }
}

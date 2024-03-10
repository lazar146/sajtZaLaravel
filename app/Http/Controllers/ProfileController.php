<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = session()->get('user');

        return view('pages.profile',['user'=>$user]);
    }
}

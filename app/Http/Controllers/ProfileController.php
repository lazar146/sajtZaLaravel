<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){

        $user = session()->get('user');

        $checkouts = DB::table('models')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->join('product_cart','model_specification_color.id','=','product_cart.msc_id')
            ->join('cart','product_cart.cart_id','=','cart.id')
            ->join('users_dva','cart.user_id','=','users_dva.id')
            ->select('models.name as modelName','product_cart.created_at as buyDate')
            ->get();
        return view('pages.profile',['user'=>$user,'cek'=>$checkouts]);
    }
}

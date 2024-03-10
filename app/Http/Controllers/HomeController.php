<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\ModelsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends MainController
{
    public function index(){
        $models = DB::table('models')->get();



        $randomModels =DB::table('models')
            ->join('images', function ($join) {
                $join->on('models.id', '=', 'images.model_id')
                    ->whereRaw('images.id IN (SELECT MIN(id) FROM images GROUP BY model_id)');
            })
            ->join('folders', 'images.folder_id', '=', 'folders.id')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->select('models.*', 'price.price', 'price.old_price','images.*','folders.*')
            ->orderBy('models.created_at','desc')
            ->limit(3)
            ->get();
        return view('pages.main',['products'=>$randomModels]);
    }

}

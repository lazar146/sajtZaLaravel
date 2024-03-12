<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CameraSpecModel;
use App\Models\MemorySpecModel;
use App\Models\RamSpecModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index($param){
        $brands = BrandModel::all();
        $ram = RamSpecModel::all();
        $memory = MemorySpecModel::all();
        $camera = CameraSpecModel::all();


        $products = DB::table('models')
            ->join('images', function ($join) {
                $join->on('models.id', '=', 'images.model_id')
                    ->whereRaw('images.id IN (SELECT MIN(id) FROM images GROUP BY model_id)');
            })
            ->join('folders', 'images.folder_id', '=', 'folders.id')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->where('models.name','like',$param .'%')
            ->select('models.id as modelId','models.date_of_delivery as date','models.name as modelName','price.price as price','images.image_name as image')
            ->get();


        return response()->json($products);
    }
}

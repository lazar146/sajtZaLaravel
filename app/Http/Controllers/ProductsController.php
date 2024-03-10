<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CameraSpecModel;
use App\Models\MemorySpecModel;
use App\Models\ModelsModel;
use App\Models\ProductModel;
use App\Models\RamSpecModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request){
        $brands = BrandModel::all();
        $ram = RamSpecModel::all();
        $memory = MemorySpecModel::all();
        $camera = CameraSpecModel::all();
        $selected_brands = $request->input('brand');
        $selected_ram = $request->input('ram');
        $selected_camera = $request->input('camera');
        $selected_memory = $request->input('memory');

        $products = DB::table('models')
            ->join('images', function ($join) {
                $join->on('models.id', '=', 'images.model_id')
                    ->whereRaw('images.id IN (SELECT MIN(id) FROM images GROUP BY model_id)');
            })
            ->join('folders', 'images.folder_id', '=', 'folders.id')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->select('models.*', 'price.price', 'price.old_price','images.*','folders.*');

        if ($selected_brands) {
            $products->whereIn('models.brand_id', $selected_brands);
        }

        if ($selected_ram) {
            $products->whereIn('model_specifications.ram_id', $selected_ram);
        }

        if ($selected_camera) {
            $products->whereIn('model_specifications.camera_id', $selected_camera);
        }

        if ($selected_memory) {
            $products->whereIn('model_specifications.memory_id', $selected_memory);
        }

        $products = $products->orderBy('models.created_at','desc')->paginate(3);


        return view('pages.products',['products'=>$products,'brands'=>$brands,'ram'=>$ram,
        'memory'=>$memory,'camera'=>$camera]);
    }

    public function show($id){
        $productId = ModelsModel::findOrFail($id);
        $product = DB::table('models')
            ->join('brands','models.brand_id','=','brands.id')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('camera_specs','model_specifications.camera_id','=','camera_specs.id')
            ->join('ram_specs','model_specifications.ram_id','=','ram_specs.id')
            ->join('memory_specs','model_specifications.memory_id','=','memory_specs.id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->where('models.id','=',$productId->id)
            ->select('models.id as model_id','models.name as modelName','models.description','price.price','price.old_price','brands.name as brandName','ram_specs.value as ram','camera_specs.value as camera','memory_specs.value as memory')
            ->get();
        $productImages = DB::table('models')
            ->join('images', 'models.id', '=', 'images.model_id')
            ->join('folders', 'images.folder_id', '=', 'folders.id')
            ->where('images.model_id','=',$productId->id)
            ->select('models.*','images.*','folders.*')
            ->get();

        return view('pages.single',['product'=>$product],['productImages'=>$productImages]);
    }
}

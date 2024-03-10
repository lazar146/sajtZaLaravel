<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\productCartModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
class CartController extends Controller
{
    public function sendToView(Request $request){
      return view('pages.listCart');

    }

    public function AddToCart(Request $request){
        $ids = $request->input('products');
        $pluckedIds = collect($ids)->pluck('id');
        $forCart =DB::table('models')
            ->join('images', function ($join) {
                $join->on('models.id', '=', 'images.model_id')
                    ->whereRaw('images.id IN (SELECT MIN(id) FROM images GROUP BY model_id)');
            })
            ->join('folders', 'images.folder_id', '=', 'folders.id')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->whereIn('models.id',$pluckedIds)
            ->select('models.*','model_specification_color.id as Cmsc_id', 'price.price', 'price.old_price','images.*','folders.*')
            ->get();

        return $forCart;


    }

    public function CartCheck(Request $request){

        if(session()->has('user')){
            $products= $request->input('products');
            $pluckedIds = collect($products)->pluck('id');
            foreach ($products as $product) {
                $productIds[] = $product['id'];
            }
            $forCart =DB::table('models')
                ->join('images', function ($join) {
                    $join->on('models.id', '=', 'images.model_id')
                        ->whereRaw('images.id IN (SELECT MIN(id) FROM images GROUP BY model_id)');
                })
                ->join('folders', 'images.folder_id', '=', 'folders.id')
                ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
                ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
                ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
                ->whereIn('models.id',$pluckedIds)
                ->select('models.*','model_specification_color.id as Cmsc_id', 'price.price', 'price.old_price','images.*','folders.*')
                ->get();


            $user = session()->get('user')->id;
            try {
                $cart_id = CartModel::insertGetId([
                    'user_id'=>$user
                ]);
                foreach ($forCart as $fc){
                    productCartModel::create([
                        'cart_id'=>$cart_id,
                        'msc_id'=>$fc->Cmsc_id,
                        'quantity'=>1
                    ]);
                }
            }
            catch (\Exception $e) {
                return response()->json(['error' => 'Došlo je do greške: ' . $e->getMessage()], 500);
            }


            return response()->json(['message' => 'Uspesno'], Response::HTTP_OK);
        }
        else{
            return response()->json(['error' => 'niste prijavljeni'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        //return $request->input('products');
    }
}

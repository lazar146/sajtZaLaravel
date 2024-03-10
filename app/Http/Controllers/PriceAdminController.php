<?php

namespace App\Http\Controllers;

use App\Models\MenusModel;
use App\Models\ModelSpecificationColorModel;
use App\Models\PriceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PriceAdminController extends Controller
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
        $isNew = true;
        $msc_idsAndModels = DB::table('models')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->select('models.name as modelName','model_specification_color.id as mscId')
            ->get();



        return view('admin.forms.priceForm',['isNew'=>$isNew,'msc'=>$msc_idsAndModels]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $name = $request->input('name');
            $route = $request->input('route');
            PriceModel::create([
                'name'=>$name,
                'route'=>$route
            ]);
            return redirect()->route('showTable',['table'=>'price'])->with('success','Uspesno!');
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
        $msc_idsAndModels = DB::table('models')
            ->join('model_specifications', 'models.id', '=', 'model_specifications.model_id')
            ->join('model_specification_color', 'model_specifications.id', '=', 'model_specification_color.ms_id')
            ->join('price', 'model_specification_color.id', '=', 'price.msc_id')
            ->select('models.name as modelName','model_specification_color.id as mscId')
            ->get();
        $content = PriceModel::find($id);
        $isNew = false;
        return view('admin.forms.priceForm',['content'=>$content,'isNew'=>$isNew,'msc'=>$msc_idsAndModels]);
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
            $row = PriceModel::find($id);
            $price = $request->input('price');
            $oldPrice = $request->input('oldPrice');

            $row->price=$price;
            $row->old_price=$oldPrice;
            $row->save();
            return redirect()->route('showTable',['table'=>'price'])->with('success','Uspesno!');
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

            $table = PriceModel::find($id);
            $table->delete();
            return redirect()->route('showTable',['table'=>'price'])->with('success','Uspesno!');
        }
        catch (\Exception $e){
            Log::error('Greška prilikom izvršavanja: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Nije kreiran!');
        }

    }
}

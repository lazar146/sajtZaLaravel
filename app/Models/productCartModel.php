<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCartModel extends Model
{
    use HasFactory;

    protected $table = 'product_cart';
    protected $fillable = ['cart_id','msc_id','quantity'];


    public function msc(){
        return $this->belongsTo(ModelSpecificationColorModel::class);
    }

    public function cart(){
        return $this->belongsTo(CartModel::class);
    }
}

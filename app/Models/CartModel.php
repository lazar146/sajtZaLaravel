<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $fillable = ['user_id'];


    public function usersDva(){
        return $this->belongsTo(UserDva::class);
    }
    public function  productCart(){
        return $this->hasMany(productCartModel::class);
    }
}

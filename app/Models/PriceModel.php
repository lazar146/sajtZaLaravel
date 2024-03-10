<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    use HasFactory;

    protected $table = 'price';
    protected $fillable = ['msc_id','price','old_price'];

    public function msc(){
        return $this->hasMany(ModelSpecificationColorModel::class);
    }
}

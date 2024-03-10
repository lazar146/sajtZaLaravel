<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSpecificationColorModel extends Model
{
    use HasFactory;


    protected $table = 'model_specification_color';
    protected $fillable = ['ms_id', 'color_id'];


    public function modelSpecifications()
    {
        return $this->belongsTo(ModelSpecificationColorModel::class);
    }


    public function color()
    {
        return $this->belongsTo(ColorModel::class);
    }

    public function productCart()
    {
        return $this->hasMany(productCartModel::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    use HasFactory;

    protected $table = 'colors';
    protected $fillable = ['value'];

    public function modelSpecificationColor(){
        return $this->hasMany(ModelSpecificationColorModel::class);
    }
}

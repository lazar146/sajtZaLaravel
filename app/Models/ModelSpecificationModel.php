<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSpecificationModel extends Model
{
    protected $table = 'model_specifications';
    protected $fillable = ['model_id', 'camera_id', 'memory_id', 'ram_id'];


    public function ramSpec()
    {
        return $this->belongsTo(RamSpecModel::class);
    }


    public function memorySpec()
    {
        return $this->belongsTo(MemorySpecModel::class);
    }


    public function cameraSpec()
    {
        return $this->belongsTo(CameraSpecModel::class);
    }


    public function modelSpec()
    {
        return $this->belongsTo(ModelsModel::class);
    }

    public function modelSpecificationColor(){
        return $this->hasMany(ModelSpecificationColorModel::class);
    }
}

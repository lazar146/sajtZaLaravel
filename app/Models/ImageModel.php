<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'image_name',
        'model_id',
        'folder_id',
    ];

    public function folder()
    {
        return $this->belongsTo(FolderModel::class);
    }

    public function model()
    {
        return $this->belongsTo(ModelsModel::class);
    }
}

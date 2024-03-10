<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderModel extends Model
{
    use HasFactory;

    protected $table = 'folders';

    protected $fillable = [
        'folder_name',
        'parent_folder_id',
    ];

    public function parentFolder()
    {
        return $this->belongsTo(FolderModel::class, 'parent_folder_id');
    }

    public function images()
    {
        return $this->hasMany(ImageModel::class, 'folder_id');
    }
}

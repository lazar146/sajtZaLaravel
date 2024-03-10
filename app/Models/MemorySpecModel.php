<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MemorySpecModel extends Model
{
    use HasFactory;

    protected $table = 'memory_specs';
    protected $fillable = [
        'value',
    ];

    public function modelSpecs() : hasMany
    {
        return $this->hasMany(ModelSpecificationModel::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModelsModel extends Model
{
    use HasFactory;
    protected $table = 'models';
    protected $fillable = [
        'name','description','brand_id','date_of_delivery'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(BrandModel::class);
    }

    public function modelSpecs() : hasMany
    {
        return $this->hasMany(ModelSpecificationModel::class);
    }

    public function images() : hasMany
    {
        return $this->hasMany(ImageModel::class);
    }
}

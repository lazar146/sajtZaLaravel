<?php

namespace Database\Seeders;

use App\Models\CameraSpecModel;
use App\Models\ColorModel;
use App\Models\MemorySpecModel;
use App\Models\ModelsModel;
use App\Models\ModelSpecificationColorModel;
use App\Models\ModelSpecificationModel;
use App\Models\RamSpecModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSpecificationColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 12')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'White')->value('id'),
            ],
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 7 Plus')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'Blue')->value('id'),
            ],
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Galaxy S20 Ultra')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'black')->value('id'),
            ],
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 13')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'black')->value('id'),
            ],
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 13 Pro')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'black')->value('id'),
            ],
            [
                'ms_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Redmi Note 12')->value('id'))->value('id'),
                'color_id' => ColorModel::where('value', 'blue')->value('id'),
            ],
        ];

        foreach ($models as $modelData) {
            ModelSpecificationColorModel::create($modelData);
        }
    }
}

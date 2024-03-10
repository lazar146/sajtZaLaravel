<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use App\Models\CameraSpecModel;
use App\Models\MemorySpecModel;
use App\Models\ModelsModel;
use App\Models\ModelSpecificationModel;
use App\Models\RamSpecModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'model_id' => ModelsModel::where('name', 'Iphone 12')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '108')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '512GB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '8')->value('id')

            ],
            [
                'model_id' => ModelsModel::where('name', 'Iphone 7 Plus')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '40')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '256GB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '4')->value('id')
            ],
            [
                'model_id' => ModelsModel::where('name', 'Galaxy S20 Ultra')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '108')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '512GB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '8')->value('id')
            ],
            [
                'model_id' => ModelsModel::where('name', 'Iphone 13')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '40')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '512GB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '6')->value('id')
            ],
            [
                'model_id' => ModelsModel::where('name', 'Iphone 13 Pro')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '70')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '1TB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '6')->value('id')
            ],
            [
                'model_id' => ModelsModel::where('name', 'Redmi Note 12')->value('id'),
                'camera_id' => CameraSpecModel::where('value', '40')->value('id'),
                'memory_id' => MemorySpecModel::where('value', '64GB')->value('id'),
                'ram_id' => RamSpecModel::where('value', '4')->value('id')
            ],
        ];

        foreach ($models as $modelData) {
            ModelSpecificationModel::create($modelData);
        }

    }
}

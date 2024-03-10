<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use App\Models\ModelsModel;
use App\Models\RoleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'name' => 'Iphone 12',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Apple')->value('id'),
                'date_of_delivery'=>'2024-01-12'
            ],
            [
                'name' => 'Iphone 7 Plus',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Apple')->value('id'),
                'date_of_delivery'=>'2023-11-11'
            ],
            [
                'name' => 'Galaxy S20 Ultra',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Samsung')->value('id'),
                'date_of_delivery'=>'2024-01-09'
            ],
            [
                'name' => 'Iphone 13',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Apple')->value('id'),
                'date_of_delivery'=>'2023-11-05'
            ],
            [
                'name' => 'Iphone 13 Pro',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Apple')->value('id'),
                'date_of_delivery'=>'2023-10-03'
            ],
            [
                'name' => 'Redmi Note 12',
                'description' => 'test',
                'brand_id' => BrandModel::where('name', 'Xiaomi')->value('id'),
                'date_of_delivery'=>'2024-02-11'
            ],
        ];

        foreach ($models as $modelData) {
            ModelsModel::create($modelData);
        }
    }
}

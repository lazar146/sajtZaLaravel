<?php

namespace Database\Seeders;

use App\Models\ColorModel;
use App\Models\ModelsModel;
use App\Models\ModelSpecificationModel;
use App\Models\PriceModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $prices = [
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 12')->value('id'))->value('id'),
                'price' => '350',
                'old_price' => '400',
            ],
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 7 Plus')->value('id'))->value('id'),
                'price' => '120',
                'old_price' => '0',
            ],
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Galaxy S20 Ultra')->value('id'))->value('id'),
                'price' => '400',
                'old_price' => '550',
            ],
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 13')->value('id'))->value('id'),
                'price' => '570',
                'old_price' => '600',
            ],
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Iphone 13 Pro')->value('id'))->value('id'),
                'price' => '680',
                'old_price' => '700',
            ],
            [
                'msc_id' => ModelSpecificationModel::where('model_id', ModelsModel::where('name', 'Redmi Note 12')->value('id'))->value('id'),
                'price' => '200',
                'old_price' => '0',
            ],
        ];

        foreach ($prices as $price){
            PriceModel::create($price);
        }
    }
}

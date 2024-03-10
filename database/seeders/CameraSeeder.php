<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use App\Models\CameraSpecModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            '20',
            '40',
            '70',
            '108',
            '200',
        ];

        foreach ($values as $value) {
            CameraSpecModel::create([
                'value' => $value,
            ]);
        }

    }

}

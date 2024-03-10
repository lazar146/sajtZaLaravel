<?php

namespace Database\Seeders;

use App\Models\FolderModel;
use App\Models\ImageModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'image_name' => '1',
                'model_id' =>1,
                'folder_id' => 4
            ],
            [
                'image_name' => '2',
                'model_id' =>1,
                'folder_id' => 4
            ],
            [
                'image_name' => '3',
                'model_id' =>1,
                'folder_id' => 4
            ],

            [
                'image_name' => '4',
                'model_id' =>1,
                'folder_id' => 4
            ],
            [
                'image_name' => '1',
                'model_id' =>2,
                'folder_id' => 2
            ],
            [
                'image_name' => '2',
                'model_id' =>2,
                'folder_id' => 2
            ],
            [
                'image_name' => '3',
                'model_id' =>2,
                'folder_id' => 2
            ],

            [
                'image_name' => '4',
                'model_id' =>2,
                'folder_id' => 2
            ],
            [
                'image_name' => '1',
                'model_id' =>3,
                'folder_id' => 6
            ],
            [
                'image_name' => '2',
                'model_id' =>3,
                'folder_id' => 6
            ],
            [
                'image_name' => '3',
                'model_id' =>3,
                'folder_id' => 6
            ],
            [
                'image_name' => '4',
                'model_id' =>3,
                'folder_id' => 6
            ],

            [
                'image_name' => '5',
                'model_id' =>3,
                'folder_id' => 6
            ],
            [
                'image_name' => '1',
                'model_id' =>4,
                'folder_id' => 8
            ],
            [
                'image_name' => '2',
                'model_id' =>4,
                'folder_id' => 8
            ],
            [
                'image_name' => '3',
                'model_id' =>4,
                'folder_id' => 8
            ],
            [
                'image_name' => '4',
                'model_id' =>4,
                'folder_id' => 8
            ],

            [
                'image_name' => '5',
                'model_id' =>4,
                'folder_id' => 8
            ],
            [
                'image_name' => '1',
                'model_id' =>5,
                'folder_id' => 10
            ],
            [
                'image_name' => '2',
                'model_id' =>5,
                'folder_id' => 10
            ],
            [
                'image_name' => '3',
                'model_id' =>5,
                'folder_id' => 10
            ],
            [
                'image_name' => '4',
                'model_id' =>5,
                'folder_id' => 10
            ],

            [
                'image_name' => '5',
                'model_id' =>5,
                'folder_id' => 10
            ],
            [
                'image_name' => '6',
                'model_id' =>5,
                'folder_id' => 10
            ],
            [
                'image_name' => '1',
                'model_id' =>6,
                'folder_id' => 12
            ],
            [
                'image_name' => '2',
                'model_id' =>6,
                'folder_id' => 12
            ],
            [
                'image_name' => '3',
                'model_id' =>6,
                'folder_id' => 12
            ],
            [
                'image_name' => '4',
                'model_id' =>6,
                'folder_id' => 12
            ],

            [
                'image_name' => '5',
                'model_id' =>6,
                'folder_id' => 12
            ],
            [
                'image_name' => '6',
                'model_id' =>6,
                'folder_id' => 12
            ],
        ];

        foreach ($images as $image) {
            ImageModel::create($image);
        }
    }
}

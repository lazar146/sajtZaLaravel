<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use App\Models\FolderModel;
use App\Models\ModelsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoldersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $folders = [
            [
                'folder_name' => 'Iphone 7 Plus',
                'parent_folder_id' => null
            ],
            [
                'folder_name' => '2023-11-11',
                'parent_folder_id' => 1
            ],
            [
                'folder_name' => 'Iphone 12',
                'parent_folder_id' => null
            ],

            [
                'folder_name' => '2024-01-12',
                'parent_folder_id' => 3
            ],
            [
                'folder_name' => 'Galaxy S20 Ultra',
                'parent_folder_id' => null
            ],

            [
                'folder_name' => '2024-01-09',
                'parent_folder_id' => 5
            ],
            [
                'folder_name' => 'Iphone 13',
                'parent_folder_id' => null
            ],

            [
                'folder_name' => '2023-11-05',
                'parent_folder_id' => 7
            ],
            [
                'folder_name' => 'Iphone 13 Pro',
                'parent_folder_id' => null
            ],

            [
                'folder_name' => '2023-10-03',
                'parent_folder_id' => 9
            ],
            [
                'folder_name' => 'Redmi Note 12',
                'parent_folder_id' => null
            ],

            [
                'folder_name' => '2024-02-11',
                'parent_folder_id' =>11
            ]

        ];

        foreach ($folders as $folder) {
            FolderModel::create($folder);
        }
    }
}

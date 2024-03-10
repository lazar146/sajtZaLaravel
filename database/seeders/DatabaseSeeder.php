<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ColorModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CameraSeeder::class,
            MemorySeeder::class,
            RamSeeder::class,
            RoleSeeder::class,
            ModelSeeder::class,
            ModelSpecSeeder::class,
            ColorSeeder::class,
            ModelSpecificationColorSeeder::class,
            UserDvaSeeder::class,
            PriceSeeder::class,
            MenuSeeder::class,
            FoldersSeeder::class,
            ImagesSeeder::class
            ]);
    }
}

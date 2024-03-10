<?php

namespace Database\Seeders;

use App\Models\MemorySpecModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            '64GB',
            '128GB',
            '256GB',
            '512GB',
            '1TB',
        ];

        foreach ($values as $value) {
            MemorySpecModel::create([
                'value' => $value,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\MenusModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {
         $values = [
            ["name" => "Početna",
                "route" => "home"],
            ["name" => "Telefoni",
                "route" => "products"],
            ["name" => "Kontakt",
                "route" => "contact"]
        ];

        foreach ($values as $value) {
            MenusModel::create($value);
        }

    }





}

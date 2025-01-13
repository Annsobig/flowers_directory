<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

       // Flower::factory(10)->create();

        foreach (range(1, 10) as $index) {
            DB::table('flowers')->insert([
                'name' => $faker->word, // Tên giả
                'description' => $faker->sentence, // Mô tả giả
                'image_url' => $faker->imageUrl(640, 480, 'flowers', true), // URL ảnh giả
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        // $flowers = [
        //     ['name' => 'Flower 1', 'description' => 'Description for Flower 1', 'image_url' => 'flower1.jpg', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Flower 2', 'description' => 'Description for Flower 2', 'image_url' => 'flower2.jpg', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Flower 3', 'description' => 'Description for Flower 3', 'image_url' => 'flower3.jpg', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Flower 4', 'description' => 'Description for Flower 4', 'image_url' => 'flower4.jpg', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Flower 5', 'description' => 'Description for Flower 5', 'image_url' => 'flower5.jpg', 'created_at' => now(), 'updated_at' => now()],
        // ];

        // // Insert dữ liệu vào bảng
        // foreach ($flowers as $flower) {
        //     Flower::create($flower);
        // }
    }

    }
}
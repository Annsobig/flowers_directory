<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $flowerIds = DB::table('flowers')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('regions')->insert([
                'flower_id' => $faker->randomElement($flowerIds),
                'region_name' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Lấy flower_id từ bảng flowers
        //$flowerIds = \App\Models\Flower::pluck('id')->toArray();

        // //Dữ liệu mẫu
        // $regions = [
        //     ['flower_id' => $flowerIds[0], 'region_name' => 'Khu vực Hà Nội', 'created_at' => '2024-01-15', 'updated_at' => '2024-02-15'],
        // ];

        // // Insert dữ liệu vào bảng
        // foreach ($regions as $region) {
        //     Region::create($region);
        // }
    }
}

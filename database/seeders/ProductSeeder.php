<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Product::factory(50)->create();
       

        // \App\Models\Product::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'email' => 'test@example.com',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '200',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '50',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '20',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '49',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);


        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '100',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);


        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '250',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);


        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '11',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '30',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);


        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '44',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '60',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '22',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => '3000',
            'color' => Str::random(10),
            'description' =>  Str::random(10),
        ]);


    }
}

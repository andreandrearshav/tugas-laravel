<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $condition =['baru', 'bekas'];
        for ($i=0; $i <12 ; $i++) { 
            DB::table('products') ->insert([
                
                'name' => 'products' . $i,
                'price' => rand(1000, 100000),
                'stock' => rand(1, 100),
                'weight' => rand(1, 10),
                'image' => '',
                'condition'=>$condition[rand(0,1)],
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, distinctio?',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

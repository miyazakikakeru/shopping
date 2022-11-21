<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => '1',
            'name' => '商品欄',
            'explanation' => '説明欄',
            'price' => '1000',
            'gender' => '男',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '2',
            'name' => 'ショッピング',
            'explanation' => '説明書',
            'price' => '2000',
            'gender' => '男',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '3',
            'name' => '家電',
            'explanation' => 'わいやで',
            'price' => '3000',
            'gender' => '女',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '4',
            'name' => '商品',
            'explanation' => 'バスケ',
            'price' => '4000',
            'gender' => '男',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '5',
            'name' => '企業',
            'explanation' => '社長',
            'price' => '5000',
            'gender' => '女',
            'condition' => '中古品', 
        ]);
    }
}

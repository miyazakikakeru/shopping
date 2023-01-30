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
            'name' => 'スカーフ',
            'explanation' => '手編みの物です',
            'price' => '1000',
            'gender' => '女',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '2',
            'name' => 'ダウン',
            'explanation' => '	冬の寒さに対抗',
            'price' => '7000',
            'gender' => '男',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '3',
            'name' => 'スカート',
            'explanation' => '	可愛らしく着飾れます',
            'price' => '4000',
            'gender' => '女',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '4',
            'name' => '靴',
            'explanation' => '革靴',
            'price' => '7000',
            'gender' => '男',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '5',
            'name' => 'バッグ',
            'explanation' => '高級なバッグです',
            'price' => '25000',
            'gender' => '女',
            'condition' => '新品', 
        ]);
    }
}

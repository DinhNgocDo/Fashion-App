<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Product::truncate(); */

        $users = User::all();
        $categories = Category::all();

        /* $data = [];

        for($i = 0; $i < 25; $i++) {
            $data[] = [
                'name' => 'T-Shirts A',
                'title' => 'Fiding perfect t-shirt A',
                'image' => 'cloth_1.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts A',
                'category_id' => rand(1, 10),
                'user_id' => rand(1,99),
            ];
            
        } */
        
        $data = [
            [
                'name' => 'T-Shirts A',
                'title' => 'Fiding perfect t-shirt A',
                'image' => 'cloth_1.jpg',
                'price' => rand(1, 100),
                'quantity' => rand(1, 1000),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts A',
                'is_public' => rand(0, 1),
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
            ],
    
            [
                'name' => 'T-Shirts B',
                'title' => 'Fiding perfect t-shirt B',
                'image' => 'cloth_2.jpg',
                'price' => rand(1, 100),
                'quantity' => rand(1, 1000),
                'size' => rand(1, 4),
                'description' => 'This is a blue T-Shirts B',
                'is_public' => rand(0, 1),
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
            ],
    
            [
                'name' => 'Shoe A',
                'title' => 'Fiding perfect shoe A',
                'image' => 'shoe_1.jpg',
                'price' => rand(1, 100),
                'quantity' => rand(1, 1000),
                'size' => rand(1, 4),
                'description' => 'This is a blue shoe A',
                'is_public' => rand(0, 1),
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
            ],
    
            [
                'name' => 'T-Shirts C',
                'title' => 'Fiding perfect t-shirt C',
                'image' => 'cloth_3.jpg',
                'price' => rand(1, 100),
                'quantity' => rand(1, 1000),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts C',
                'is_public' => rand(0, 1),
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
            ],
        ];

        Product::insert($data);
    }
}

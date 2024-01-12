<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => "Es Kristal 3kg",
                'price' => 30000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.24.jpeg'
            ],
            [
                'name' => "Es Serut 3kg",
                'price' => 30000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.24.jpeg'
            ],
            [
                'name' => "Es Kristal 5kg",
                'price' => 50000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.23-1.jpeg'
            ],
            [
                'name' => "Es Serut 5kg",
                'price' => 50000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.23-1.jpeg'
            ],
            [
                'name' => "Es Kristal 10kg",
                'price' => 100000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.23.jpeg'
            ],
            [
                'name' => "Es Serut 10kg",
                'price' => 100000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.23.jpeg'
            ],
            [
                'name' => "Es Kristal 20kg",
                'price' => 200000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.22.jpeg'
            ],
            [
                'name' => "Es Serut 20kg",
                'price' => 200000,
                'image_url' => 'https://eskristal-ptespugautama.com/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-21-at-17.16.22.jpeg'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

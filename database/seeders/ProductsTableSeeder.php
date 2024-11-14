<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Wireless Bluetooth Headphones',
            'price' => 79.99,
            'description' => 'High-quality wireless Bluetooth headphones with noise cancellation and 20 hours of playtime.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Smart Home Speaker',
            'price' => 49.99,
            'description' => 'Voice-controlled smart speaker with powerful sound and integrated virtual assistant.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => '4K Ultra HD Action Camera',
            'price' => 129.99,
            'description' => 'Waterproof action camera with 4K resolution, ideal for capturing outdoor adventures.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Portable Power Bank 10000mAh',
            'price' => 24.99,
            'description' => 'Compact and lightweight power bank with 10000mAh capacity and fast charging support.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Smart Fitness Tracker',
            'price' => 39.99,
            'description' => 'Fitness tracker with heart rate monitoring, step tracking, and sleep analysis.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'LED Desk Lamp with USB Charging',
            'price' => 34.99,
            'description' => 'Adjustable LED desk lamp with USB charging port, touch control, and multiple brightness levels.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Ergonomic Office Chair',
            'price' => 199.99,
            'description' => 'Comfortable ergonomic office chair with adjustable height, lumbar support, and breathable mesh back.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Electric Toothbrush',
            'price' => 59.99,
            'description' => 'Rechargeable electric toothbrush with multiple brushing modes and a 2-minute timer.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Stainless Steel Water Bottle',
            'price' => 15.99,
            'description' => 'Durable stainless steel water bottle with double-wall insulation to keep drinks cold or hot for hours.',
            'uuid' => Str::uuid(),
        ]);

        Product::create([
            'name' => 'Wireless Charging Pad',
            'price' => 19.99,
            'description' => 'Slim and fast wireless charging pad compatible with most smartphones and accessories.',
            'uuid' => Str::uuid(),
        ]);
    }
}
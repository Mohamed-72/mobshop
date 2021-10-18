<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'OPPO',
            'price' => 450,
            'description' => 'Reno 5 - 5G Dual SIM - 128GB, 8GB RAM - Galactic Silver',
            'image' => 'https://media.btech.com/media/catalog/product/cache/22b1bed05f04d71c4a848d770186c3c4/o/p/oppo-reno5-128gb-4g-black_11.jpg'
        ]);
        Product::create([
            'name' => 'Apple',
            'price' => 750,
            'description' => 'iPhone 12 Pro 256GB 6 GB RAM, Gold -  for 5G service',
            'image' => 'https://cairosales.com/46345-thickbox_default/apple-iphone-12-pro-256gb-graphite-mgmp3aaa.jpg'
        ]);
        Product::create([
            'name' => 'Samsung',
            'price' => 560,
            'description' => 'Galaxy A12 Dual SIM Mobile - 6.5 Inch, 64 GB, 4 GB RAM, 4G LTE - Black',
            'image' => 'https://www.mytrendyphone.eu/images/Genuine-Samsung-Galaxy-A12-Soft-Clear-Cover-EF-QA125-Transparent-8806090854019-22122020-03-p.jpg'
        ]);
        Product::create([
            'name' => 'Xiaomi',
            'price' => 380,
            'description' => 'Redmi Note 10S Dual SIM Mobile - 6.43 Inches, 8G RAM, 128 GB, 4G LTE - Onyx Gray',
            'image' => 'https://www.vooc-stores.com/storage/images/products/gallery/cache/xiaomi-redmi-note-10-4gb-ram-128gb-lake-green-pre-order-3.png'
        ]);
        Product::create([
            'name' => 'Realme',
            'price' => 480,
            'description' => 'C21 Dual SIM - 6.5 Inches, 64GB, 4GB RAM, 4G LTE - Black',
            'image' => 'https://media.btech.com/media/catalog/product/cache/c221855467ae3bccc853f1460c8b5700/r/e/realme_c21_blue_main.jpg'
        ]);
        Product::create([
            'name' => 'Nokia',
            'price' => 580,
            'description' => 'G20 Dual Sim - 6.5 inch, 128 GB, 4 GB RAM, 4G LTE - Blue',
            'image' => 'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
        ]);
        Product::create([
            'name' => 'Infinix',
            'price' => 660,
            'description' => 'Note 10 Dual SIM Mobile Phone - 6.95 inches, 6 GB RAM, 128 GB, 4G LTE - Black',
            'image' => 'https://dream2000.com/pub/media/catalog/product/cache/9b6394f59e15b10e6dd47471b29c7ca4/i/n/infinix---note-10--_6_128_-x693-purple-2.jpg'
        ]);
        Product::create([
            'name' => 'Huawei',
            'price' => 380,
            'description' => 'P20 Pro Dual Sim - 128 GB, 6 GB Ram, 4G LTE, Twilight',
            'image' => 'https://www.mytrendyphone.eu/images/Huawei-P20-Pro-Back-Cover-Black-13112018-1-p.jpg'
        ]);
        Product::create([
            'name' => 'Honor',
            'price' => 480,
            'description' => '5D Glass Tempered Screen Protector Laser Cutted, Full Glue, - Black',
            'image' => 'https://cdn.movertix.com/media/catalog/product/cache/image/1200x/h/o/honor-8-dual-sim-en-azul-detras.jpg'
        ]);
    }
}

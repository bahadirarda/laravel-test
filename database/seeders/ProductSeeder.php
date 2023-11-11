<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Akıllı Telefon',
                'description' => 'Yüksek çözünürlüklü kamera, yüksek hızda işlemci.',
                'price' => rand(1000, 3000),
            ],
            [
                'name' => 'Tablet',
                'description' => 'Taşınabilir, yüksek performanslı cihaz.',
                'price' => rand(500, 2000),
            ],
            [
                'name' => 'Laptop',
                'description' => 'Güçlü işlemci, yüksek kapasiteli RAM ile donatılmıştır.',
                'price' => rand(1500, 5000),
            ],
            [
                'name' => 'Akıllı Saat',
                'description' => 'Kullanışlı ve şık tasarım, sağlık takibi özellikleri.',
                'price' => rand(200, 1500),
            ],
            [
                'name' => 'E-Kitap Okuyucu',
                'description' => 'Göz yormayan ekran, uzun pil ömrü.',
                'price' => rand(300, 1200),
            ],
            [
                'name' => 'Kablosuz Kulaklık',
                'description' => 'Yüksek ses kalitesi, gürültü engelleme özelliği.',
                'price' => rand(200, 800),
            ],
            [
                'name' => 'Oyun Konsolu',
                'description' => 'Yeni nesil oyun deneyimi, yüksek çözünürlük.',
                'price' => rand(2500, 4500),
            ],
            [
                'name' => 'Drone',
                'description' => 'Yüksek uçuş süresi, profesyonel kamera.',
                'price' => rand(1500, 3000),
            ],
            [
                'name' => 'Akıllı Ev Asistanı',
                'description' => 'Sesli komutlarla kontrol, akıllı ev cihazlarıyla uyumlu.',
                'price' => rand(100, 700),
            ],
            [
                'name' => '3D Yazıcı',
                'description' => 'Yüksek çözünürlükte baskı, çeşitli malzemelerle uyumlu.',
                'price' => rand(2000, 7000),
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => null,
                // Gerçek bir görsel yolu eklenebilir.
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
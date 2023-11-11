<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        // Temel kategorileri oluşturuyoruz.
        $categories = [
            'Elektronik',
            'Giyim',
            'Ayakkabılar',
            'Ev ve Bahçe',
            'Spor',
            'Kitaplar',
            'Mücevherler',
            'Saatler',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'parent_id' => null, // Temel kategorilerin parent_id'si null olmalıdır.
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // İsteğe bağlı olarak alt kategorileri burada ekleyebilirsiniz.
    }
}

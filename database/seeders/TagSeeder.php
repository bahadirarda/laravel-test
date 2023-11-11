<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        
        $tags = [
            'Teknoloji',
            'Moda',
            'Spor',
            'Yemek',
            'Seyahat',
            'Sağlık',
            'Sanat',
            'Müzik',
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

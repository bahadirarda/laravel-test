<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Önce temizleme işlemi
        DB::table('users')->delete();

        // Kullanıcıları oluşturalım
        User::create([
            'name' => 'Admin',
            'email' => 'dm@webintek.com.tr',
            'password' => Hash::make('webintek'),
            
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('test'),
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // role_user tablosuna bir ilişkilendirme ekliyoruz
        DB::table('role_user')->insert([
            'user_id' => 1, // Yönetici kullanıcının ID'si
            'role_id' => 1, // Admin rolünün ID'si
        ]);
    }
}


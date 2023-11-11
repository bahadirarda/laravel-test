<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    public function update(User $user, Product $product)
    {
        // Kullanıcının ürünü düzenleme yetkisi olup olmadığını kontrol eder
        // Örneğin, kullanıcı admin rolüne sahipse veya ürünü oluşturan kişi ise düzenleyebilir
        return $user->hasRole('admin') || $user->id === $product->user_id;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function makeAdmin(User $user)
    {
        // Admin rolünün ID'si varsayılan olarak 1 kabul edilmiştir
        $user->roles()->sync([1]); // Kullanıcıya sadece admin rolünü atar
        return back()->with('success', 'Kullanıcı admin olarak atandı.');
    }
}

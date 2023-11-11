<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id']; // 'parent_id' kategorilerin hiyerarşik yapısı için

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }

    // Alt kategoriler için ilişki (eğer hiyerarşik bir yapı istiyorsanız)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}

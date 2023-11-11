<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image'];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function categories()
    {
        // Kategorilerle ilişki
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function tags()
    {
        // Etiketlerle ilişki
        return $this->belongsToMany(Tag::class);
    }
}

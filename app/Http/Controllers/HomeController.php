<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Veya istediğiniz bir sorgu ile verileri çekebilirsiniz.
        // Slaytları burada tanımlayabiliriz
        // $slides = [
        //     ['image' => 'slide1.jpg', 'title' => 'Slide 1 Örnek'],
        //     ['image' => 'slide2.jpg', 'title' => 'Slide 2 Örnek'],
        //     // Diğer slaytlar
        // ];
        $products = Product::orderBy('created_at', 'desc')->take(6)->get();
        return view('home', compact('products'));

        
    }
}

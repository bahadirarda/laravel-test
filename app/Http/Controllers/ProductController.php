<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->authorize('update', $product);

        // Düzenleme sayfasını göster
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Form verileri ile modeli güncelleme
        // Önce, form verilerinin doğrulamasını yapıyoruz.
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Sonra, modeli güncelliyoruz.
        $product->update($validatedData);

        // Güncelleme başarılı olduğunda, kullanıcıyı başka bir sayfaya yönlendiriyoruz.
        return redirect()->route('products.show', $product)->with('success', 'Ürün başarıyla güncellendi.');

    }
}

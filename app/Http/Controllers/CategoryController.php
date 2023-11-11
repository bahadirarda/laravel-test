<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Kategorilerin listelendiği metod
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Kategori oluşturma formunun gösterildiği metod
    public function create()
    {
        return view('categories.create');
    }

    // Yeni bir kategori kaydının veritabanına eklenmesi
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'slug' => 'required|unique:categories,slug',
        ]);

        $category = new Category();
        $category->name = $request->name;
        // $category->slug = $request->slug;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategori başarıyla oluşturuldu.');
    }

    // Kategori düzenleme formunun gösterildiği metod
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Kategori güncellemesinin veritabanına kaydedilmesi
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            // 'slug' => 'required|unique:categories,slug,' . $id,
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        // $category->slug = $request->slug;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategori başarıyla güncellendi.');
    }

    // Bir kategorinin silinmesi
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Kategori başarıyla silindi.');
    }
}
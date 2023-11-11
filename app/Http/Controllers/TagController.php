<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    // Etiketlerin listelendiği metod
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // Etiket oluşturma formunun gösterildiği metod
    public function create()
    {
        return view('tags.create');
    }

    // Yeni bir etiket kaydının veritabanına eklenmesi
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'slug' => 'required|unique:tags,slug',
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        // $tag->slug = $request->slug;
        $tag->save();

        return redirect()->route('tags.index')->with('success', 'Etiket başarıyla oluşturuldu.');
    }

    // Etiket düzenleme formunun gösterildiği metod
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    // Etiket güncellemesinin veritabanına kaydedilmesi
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            // 'slug' => 'required|unique:tags,slug,' . $id,
        ]);

        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        // $tag->slug = $request->slug;
        $tag->save();

        return redirect()->route('tags.index')->with('success', 'Etiket başarıyla güncellendi.');
    }

    // Bir etiketin silinmesi
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Etiket başarıyla silindi.');
    }
}

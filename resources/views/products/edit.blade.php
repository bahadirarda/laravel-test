{{-- Ürün düzenleme sayfası --}}

@extends('layouts.app')

@section('title', 'Ürün Düzenle')

@section('content')
<div class="container mx-auto px-4 sm:px-8 max-w-3xl">
    <h1 class="text-2xl font-semibold leading-tight py-2">Ürün Düzenle</h1>

    {{-- Düzenleme formu --}}
    <form action="{{ route('products.update', $product) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        
        {{-- Ürün adı --}}
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Ürün Adı:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        {{-- Ürün açıklaması --}}
        <div class="mb-6">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Açıklama:</label>
            <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">{{ $product->description }}</textarea>
        </div>

        {{-- Ürün fiyatı --}}
        <div class="mb-6">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Fiyat:</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        {{-- Gönder butonu --}}
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Düzenlemeyi Kaydet</button>
        </div>
    </form>
</div>
@endsection

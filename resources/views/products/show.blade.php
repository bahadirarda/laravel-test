@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mx-auto px-4 sm:px-8 py-8 flex justify-center items-center mt-24 mb-56">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-96">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-56 object-cover">
        <div class="p-4">
            <h2 class="text-3xl font-bold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700">{{ $product->description }}</p>
        </div>
        <div class="flex p-4 border-t border-gray-300 text-gray-700">
            <div class="flex-1 inline-flex items-center">
                <span class="text-2xl font-bold">{{ $product->price }} TL</span>
            </div>
            <div class="flex-1 inline-flex justify-end items-center">
                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-full px-6 py-2 font-semibold">Sepete Ekle</button>
            </div>
        </div>
    </div>
</div>
@endsection

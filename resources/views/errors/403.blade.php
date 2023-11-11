{{-- resources/views/errors/403.blade.php --}}

@extends('layouts.app')

@section('title', 'Yetkiniz Yok')

@section('content')
<div class="container mt-52 mx-auto px-4 py-8">
<div class="text-center">
    <h1 class="text-6xl font-bold mb-4">403</h1>
    <h2 class="text-xl mb-6">Oops! Yetkiniz yok.</h2>
    <p>Bu sayfayı görüntülemek için gerekli izinlere sahip değilsiniz.</p>
    <a href="{{ url('/') }}" class="text-indigo-600 hover:text-indigo-800">Anasayfaya dön</a>
    <div class="container mb-72">
    </div>
</div>
</div>
@endsection
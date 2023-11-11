@extends('layouts.app')

@section('title', 'Kayıt Ol')

@section('content')
<div class="flex items-start justify-center min-h-screen mt-24 bg-gray-100">
  <div class="px-8 py-8 text-left bg-white shadow-lg w-full max-w-md">
    <h3 class="text-2xl font-bold text-center">Kayıt Ol</h3>
    <form action="{{ route('register') }}" method="POST" class="mt-8">
      @csrf
      <div>
        <label for="name" class="block">Adınız</label>
        <input id="name" name="name" type="text" placeholder="Adınız"
          class="w-full px-3 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
          value="{{ old('name') }}" required autofocus>
        @error('name')
          <span class="text-xs text-red-600">{{ $message }}</span>
        @enderror
      </div>

      <div class="mt-4">
        <label for="email" class="block">Email Adresi</label>
        <input id="email" name="email" type="email" placeholder="Email"
          class="w-full px-3 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
          value="{{ old('email') }}" required>
        @error('email')
          <span class="text-xs text-red-600">{{ $message }}</span>
        @enderror
      </div>

      <div class="mt-4">
        <label for="password" class="block">Şifre</label>
        <input id="password" name="password" type="password" placeholder="Şifre"
          class="w-full px-3 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
          required>
        @error('password')
          <span class="text-xs text-red-600">{{ $message }}</span>
        @enderror
      </div>

      <div class="mt-4">
        <label for="password_confirmation" class="block">Şifreyi Onayla</label>
        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Şifreyi onaylayın"
          class="w-full px-3 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
          required>
      </div>

      <div class="flex justify-center mt-6">
        <button type="submit"
          class="px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
          Kayıt Ol
        </button>
      </div>

      <div class="text-center mt-6">
        <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">
          Zaten bir hesabınız var mı? Giriş Yap
        </a>
      </div>
    </form>
  </div>
</div>
@endsection

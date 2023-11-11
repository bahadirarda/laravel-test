@extends('layouts.app')

@section('title', 'Giriş Yap')

@section('content')
<div class="flex mt-24 justify-center min-h-screen bg-gray-100">
  <div class="w-full max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <div class="mb-4">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Giriş Yap
        </h2>
      </div>
      <form class="space-y-6" action="{{ route('login') }}" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
            Email
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input id="email" name="email" type="email" required autocomplete="email" autofocus 
              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 
              focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
              placeholder="Email adresinizi girin">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
            Şifre
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input id="password" name="password" type="password" required autocomplete="current-password" 
              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 
              focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
              placeholder="Şifrenizi girin">
          </div>
        </div>

        <div class="mt-4">
          {!! NoCaptcha::display(['data-theme' => 'light']) !!}
        </div>

        <div class="flex items-center justify-between mt-4">
          <div class="flex items-center">
            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
            <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
              Beni hatırla
            </label>
          </div>

          @if (Route::has('password.request'))
            <div class="text-sm leading-5">
              <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Şifremi unuttum
              </a>
            </div>
          @endif
        </div>

        <div>
          <button type="submit" 
            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
            Giriş Yap
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
{!! NoCaptcha::renderJs('tr') !!}
@endpush

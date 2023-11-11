<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web Sitem')</title>
    <!-- Tailwind CSS dosyasının bağlanması -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @stack('styles')
    <!-- Ekstra CSS stil tanımlamaları için yer tutucu -->
    <style>
        /* ... diğer stil tanımlamalarınız ... */
        /* Footer sabitleme için CSS */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="app">
        <!-- Header bölümü -->
        <header class="bg-white shadow">
            <div class="container mx-auto flex justify-between px-6 py-3">
                <h1 class="text-gray-700 text-3xl font-bold">
                    <a href="{{ url('/') }}" class="no-underline hover:underline">
                        @yield('header', 'Webintek')
                    </a>
                </h1>
                <div class="header-right flex items-center">
                    @guest
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline header-link px-3 py-2 rounded-md">Giriş yap</a>
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 underline header-link px-3 py-2 rounded-md">Kayıt ol</a>
                    @else
                        <span class="text-sm text-gray-700">{{ Auth::user()->name }}</span>
                        
                        @if(Auth::user()->hasRoleId(1))
                            <!-- Admin Kullanıcılar için Dashboard Bağlantısı -->
                            <a href="{{ url('/admin') }}" class="text-sm text-gray-700 hover:text-indigo-500 px-3 py-2 rounded-md">
                                Yönetim Paneli
                            </a>
                        @endif
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-sm text-gray-700 underline header-link px-3 py-2 rounded-md">Çıkış yap</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </header>
        <!-- Ana içerik bölümü -->
        <main class="container mx-auto px-6 my-8">
            @yield('content')
        </main>
    </div>
    <!-- Footer bölümü -->
    <footer class="bg-white shadow text-center py-5 text-sm text-gray-600">
        &copy; {{ date('Y') }} Tüm Hakları Saklıdır.
    </footer>
    <!-- Opsiyonel JavaScript -->
    <!-- Uygulamanızın ana JavaScript dosyası -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @stack('scripts') <!-- Ekstra JavaScript tanımlamaları için yer tutucu -->
</body>
</html>

@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
<section class="py-8">
    <div class="container mx-auto"> <!-- Swiper Slider --> <div class="swiper-container"> <!-- Additional required
        wrapper --> <div class="swiper-wrapper"> <!-- Slides -->
        <div class="swiper-slide" style="background-image:url('https://source.unsplash.com/1920x1280/?animal');"></div>
        <div class="swiper-slide" style="background-image:url('https://source.unsplash.com/1920x1280/?nature');"></div>
        <div class="swiper-slide" style="background-image:url('https://source.unsplash.com/1920x1280/?people');"></div>
        <!-- ... diğer slaytlar ... -->
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
    </div>
    </section> <!-- Boşluk Div'i --> <div class="my-8"></div> <!-- Slider ile ürün kartları arasında boşluk --> <!--
        Ürünler Bölümü --> <section class="py-4">
    <div class="container mx-auto">
    <h2 class="text-2xl font-bold leading-tight mb-6">Son Eklenen Ürünler</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- Ürün kartları -->
        @foreach ($products as $product)
        <div class="rounded overflow-hidden shadow-lg bg-white">
            <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
            <p class="text-gray-700 text-base">
                {{ $product->description }}
                </p>
        </div>
        <div class="px-6 pt-4 pb-4">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{
                $product->price }} TL</span>
            <a href="{{ route('products.show', $product) }}"
                class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-white">Detay</a>
            @can('update', $product)
            <a href="{{ route('products.edit', $product) }}"
                class="inline-block bg-green-500 rounded px-3 py-1 text-sm font-semibold text-white mr-2">Düzenle</a>
            @endcan
        </div>
    </div>
    @endforeach
    </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .swiper-container {
        width: 100%;
        height: 300px;
        /* Ya da ihtiyacınıza göre ayarlayın */
        position: relative;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
    }

    .swiper-button-prev,
    .swiper-button-next {
        color: #fff;
        /* Okların rengi */
        position: absolute;
        top: 55%;
        transform: translateY(-50%);
        /* Dikey ortala */
        z-index: 10;
        /* Görsellerin üzerinde gözükmesi için */
    }

    .swiper-button-prev {
        left: 10px;
        /* Sol kenardan boşluk */
    }

    .swiper-button-next {
        right: 10px;
        /* Sağ kenardan boşluk */
    }

    .swiper-pagination {
        position: absolute;
        bottom: 10px;
        /* Alt kenardan boşluk */
        left: 0;
        width: 100%;
        text-align: center;
        /* Orta hizalama */
    }

    .swiper-pagination-bullet {
        background: #fff;
        /* Pagination noktalarının rengi */
        opacity: 0.5;
        /* Yarı saydam */
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        /* Aktif nokta tam opak */
    }
</style>
@endpush

@push('scripts')
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        initialSlide: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // diğer yapılandırmalar...
    });
</script>
@endpush
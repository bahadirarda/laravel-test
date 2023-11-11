
//Slider.JS kullanmadan önce kullanım denenmiştir.

<div class="slider-container relative">
    <!-- Slides -->
    @foreach ($slides as $slide)
        <div class="slide" style="display: none;">
            <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}">
            <!-- Slide içeriği -->
        </div>
    @endforeach

    <!-- Prev/Next Butonları -->
    <button class="prev">Önceki</button>
    <button class="next">Sonraki</button>

    <!-- Noktalar -->
    <div class="dots">
        @foreach ($slides as $index => $slide)
            <span class="dot" data-slide="{{ $index }}"></span>
        @endforeach
    </div>
</div>

<script>
// Buraya slider'ınızı kontrol etmek için JavaScript kodları gelecek
</script>

<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        @foreach ($pictures as $picture)
            <div class="banner-item" style="background-image: url({{Storage::url('/carousel/' . $picture )}})">
                <div class="text-content">
                    <h4 class="visible-text">Best Offer</h4>
                    <h2 class="visible-text">New Arrivals On Sale</h2>
                </div>
            </div>
        @endforeach
    </div>
</div>

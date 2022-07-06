<div class="banner header-text">
    <div class=".d-sm-none .d-md-block owl-banner owl-carousel">
        @foreach ($pictures as $picture)
            <div class="banner-item" style="background-image: url({{Storage::url('/carousel/' . $picture )}})">
                <div class="text-content">
                    <h4 class="visible-text">@lang('messages.best-offer')</h4>
                    <h2 class="visible-text">@lang('messages.check-out-catalogue')</h2>
                </div>
            </div>
        @endforeach
    </div>
</div>

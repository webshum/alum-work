<section class="main-slider">
    <swiper-container>
        <swiper-slide>
            @if(!empty($thumbnails))
                <img src="{{ Storage::url($thumbnails) ?? asset('images/og_image.jpg') }}" alt="{{ $title ?? '' }}" loading="lazy">
            @else
                <img src="{{ asset('images/og_image.jpg') }}" alt="{{ $title ?? '' }}" loading="lazy">
            @endif

            <div class="center">
                <h1><span>{{ $title ?? 'ALUMWORK'}}</span></h1>

                @if(!empty($metaTitle))
                    <h2>{{ $metaTitle }}</h2>
                @endif

                @if(!empty($description))
                    <div class="text mt-[40px] max-w-[745px]">
                        <p>{{ $description }}</p>
                    </div>
                @endif
            </div>
        </swiper-slide>
    </swiper-container>
</section>

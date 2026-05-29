<section class="main-slider">
    <swiper-container>
        <swiper-slide>
            @if(!empty($thumbnails))
                <img src="{{ Storage::url($thumbnails) }}" alt="{{ $title ?? '' }}" loading="lazy">
            @endif

            <div class="center">
                <h1><span>{{ $title ?? 'ALUMWORK'}}</span></h1>

                @if(!empty($metaTitle))
                    <h2>{{ $metaTitle }}</h2>
                @endif

                @if($description)
                    <div class="text mt-[40px] max-w-[745px]">
                        <p>{{ $description }}</p>
                    </div>
                @endif
            </div>
        </swiper-slide>
    </swiper-container>
</section>

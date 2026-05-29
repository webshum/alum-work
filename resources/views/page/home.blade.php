@extends('layouts.app')
@section('title'){{ config('app.name') }}@endsection
@section('description'){{ $page->meta_description ?? '' }}@endsection
@section('og_image'){{ Storage::url($page->thumbnails ?? null) }}@endsection

@section('content')

{{-- Main Slider --}}
@if(!empty($page))
<x-main-slider
    :thumbnails="$page->thumbnails"
    :description="$page->meta_description"
/>
@endif
{{-- // Main Slider --}}

{{-- Intro --}}
@if(!empty($page) && $page->content)
    <x-intro>{!! $page->content !!}</x-intro>
@endif
{{-- // Intro --}}

{{-- Category --}}
@if($categories->isNotEmpty())
<section class="category-grid">
    <div class="center">
        @foreach($categories as $category)
            <x-product.card
                href="{{ route('categories.show', $category->slug) }}"
                :thumbnails="$category->thumbnails"
                :title="$category->title"
            />
        @endforeach
    </div>
</section>
@endif
{{-- // Category --}}

{{-- Service --}}
<x-service/>
{{-- // Service --}}

{{-- Action --}}
@if(!empty($actions))
    <x-action :$actions class="py-[95px]"/>
@endif
{{-- // Action --}}

{{-- Faq --}}
<section class="py-[30px] bg-[#F2F6F2] hidden md:block">
    <div class="center grid md:grid-cols-1 lg:grid-cols-2 gap-[25px]">
        @if(!empty($faqs))
            <div class="faq">
                <h2 class="!text-white text-[36px] mb-[15px]">Häufige Fragen</h2>

                <div class="acordeon main-acordeon">
                    @foreach($faqs as $index => $faq)
                    <div class="acordeon-wrap {{ $index >= 3 ? 'hidden' : '' }}">
                        <div class="acordeon-btn">
                            <span>{{ $faq->title }}</span>
                        </div>

                        <div class="acordeon-content">
                            <div class="inner">
                                {!! $faq->description !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <x-button class="mt-[40px]">Alle FAQs lesen</x-button>
            </div>
        @endif

        <div class="guide">
            <div class="label">RATGEBER & WISSEN</div>
            <h2 class="text-[36px] mb-[25px]">Baugenehmigung für Terrassendächer</h2>

            <div class="text">
                Erfahren Sie alles über die rechtlichen Rahmenbedingungen und ab wann Sie in Ihrem
                Bundesland eine Genehmigung benötigen.
            </div>

            <blockquote class="quote">
                Wussten Sie schon? In vielen Regionen sind Überdachungen bis zu einer bestimmten
                Größe genehmigungsfrei.
            </blockquote>

            <a href="#" class="link">Zum Artikel →</a>
        </div>
    </div>
</section>
{{-- // Faq --}}

{{-- Recommended --}}
@if(!empty($references))
<section class="references">
    <div class="center">
        <div class="topbar">
            <div>
                <span class="subtitle">REFERENZEN</span>
                <h2>Unsere Referenzen</h2>
            </div>

            <div class="controls">
                <button class="prev" type="button">
                    <x-icons name="arr-2"/>
                </button>
                <button class="next" type="button">
                    <x-icons name="arr-2" class="-scale-x-100"/>
                </button>
            </div>

            <a href="#">
                <span>Alle Projekte Ansehen</span>
                <x-icons name="arr-full"/>
            </a>
        </div>

        <swiper-container
            breakpoints='{"320": {"slidesPerView": 1.03, "spaceBetween": 10}, "400": {"slidesPerView": 1.2, "spaceBetween": 16}, "767": {"slidesPerView": 2, "spaceBetween": 20}, "1024": {"slidesPerView": 3, "spaceBetween": 24}}'
            navigation-next-el=".references .next"
            navigation-prev-el=".references .prev">

            @foreach ($references as $reference)
            <swiper-slide>
                <a href="{{ route('products.show', $reference->slug) }}" class="card">
                    <div class="image">
                        <img src="{{ Storage::url($reference->thumbnails) }}" alt="{{ $reference->title }}" loading="lazy">
                    </div>

                    <div class="descr">
                        <span>Ulm, Baden-Württemberg, 2025</span>
                        <h3>{{ $reference->title }}</h3>
                        <p>{{ $reference->meta_description }}</p>
                    </div>
                </a>
            </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
</section>
@endif
{{-- // Recommended --}}

@endsection

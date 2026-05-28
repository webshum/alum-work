@extends('layouts.app')
@section('title'){{ config('app.name') }}@endsection
@section('description'){{ $page->meta_description ?? '' }}@endsection
@section('og_image'){{ Storage::url($page->thumbnails ?? null) }}@endsection

@section('content')

{{-- Main Slider --}}
@if(!empty($page))
<section class="main-slider">
    <swiper-container>
        <swiper-slide>
            <img src="{{ Storage::url($page->thumbnails) }}" alt="">

            <div class="center">
                <h1>ALUM<span class="!text-white">WORK</span></h1>

                @if($page->meta_description)
                    <div class="text mt-[40px] max-w-[745px]">
                        <p>{{ $page->meta_description }}</p>
                    </div>
                @endif
            </div>
        </swiper-slide>
    </swiper-container>
</section>
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
                href="/products/{{ $category->slug }}"
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
    <x-action :$actions/>
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

{{-- References --}}
<section class="references">
    <div class="center">
        <div class="referenc-top">
            <div class="referenc-title">
                <span class="subtitle">REFERENZEN</span>
                <h2>Unsere Referenzen</h2>
            </div>

            <div class="referenc-nav">
                <button class="slider-prev" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </button>
                <button class="slider-next" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </button>
            </div>

            <a href="#" class="referenc-all">
                Alle Projekte Ansehen
                <img src="{{ asset('images/ic-arrow.svg') }}" alt="">
            </a>
        </div>

        <swiper-container
            class="referenc-swiper"
            slides-per-view="3"
            space-between="24"
            breakpoints='{"320": {"slidesPerView": 1.2, "spaceBetween": 16}, "768": {"slidesPerView": 2, "spaceBetween": 20}, "1024": {"slidesPerView": 3, "spaceBetween": 24}}'
            navigation-next-el=".referenc-slider .slider-next"
            navigation-prev-el=".referenc-slider .slider-prev">

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-1.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Ulm, Baden-Württemberg, 2025</span>
                        <h3>Moderne Glas-Oase in Hanglage</h3>
                        <p>Sonderanfertigung mit integrierter LED-Beleuchtung und seitlichen Glaselementen.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-2.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Wertheim, Baden-Württemberg, 2026</span>
                        <h3>Carport & Terrasse</h3>
                        <p>Einheitliches Design für das gesamte Grundstück in Anthrazit-Optik.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </a>
            </swiper-slide>

        </swiper-container>
    </div>
</section>
{{-- // References --}}

@endsection

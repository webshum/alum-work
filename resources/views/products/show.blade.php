@extends('layouts.app')
@section('title'){{ $product->meta_title ?? $product->title }} | {{ config('app.name') }}@endsection
@section('description'){{ $product->meta_description ?? asset('images/og_image.jpg') }}@endsection
@section('og_image'){{ Storage::url($product->thumbnails ?? null) }}@endsection

@section('content')

{{-- Main Slider --}}
@if(!empty($product))
<x-main-slider
    :thumbnails="$product->thumbnails ?? asset('images/og_image.jpg')"
    :title="$product->title"
    :meta-title="$product->meta_title"
    :description="$product->meta_description"
/>
@endif
{{-- // Main Slider --}}

{{-- Intro --}}
@if(!empty($product) && $product->content)
    <x-intro>{!! $product->content !!}</x-intro>
@endif
{{-- // Intro --}}

<section class="product">
    <div class="center">
        <div class="product-title">
            <h2>
                <span class="brand">Alum</span> Standard
            </h2>
            <p class="subtitle">
                klassische Terrassenüberdachung für stilvolle Außenbereiche
            </p>
        </div>

        <div class="wrap">
            <div class="gallery">
                <swiper-container class="main-img" init="false" space-between="10">
                    <swiper-slide><img src="{{ asset('images/product-1.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-3.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-2.png') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-4.png') }}" alt=""></swiper-slide>
                </swiper-container>

                <swiper-container class="thumbs thumbs-slider" init="false" slides-per-view="4" space-between="10" watch-slides-progress="true">
                    <swiper-slide><img src="{{ asset('images/product-1.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-3.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-2.png') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-4.png') }}" alt=""></swiper-slide>
                </swiper-container>
            </div>

            <div class="info">
                <div class="rating"></div>

                <ul class="usp">
                    <li><x-icons name="check" class="[40px] h-[26px] text-[#4DB4E8]" />Abholbereit innerhalb von 2 Tagen</li>
                    <li><x-icons name="delivery" class="[40px] h-[35px] text-[#4DB4E8]" />Lieferung innerhalb von ca. 4-5 Wochen</li>
                </ul>

                <div class="price-box">
                    <div class="row">
                        <div class="inner">
                            <div class="discount">25% Rabatt</div>
                        </div>
                        <div class="old-price">1.694,00 €</div>
                    </div>

                    <div class="row">
                        <div class="inner">
                            <div class="sie">Sie sparen:</div>
                        </div>
                        <div class="saving">347,00 €</div>
                    </div>

                    <div class="row current-price">
                        <div class="inner">
                            <span>Preis :</span>
                        </div>
                        <strong>1.347,00 €</strong>
                        <small>inkl. MwSt.</small>
                    </div>
                </div>

                <div class="actions">
                    <button type="button" class="btn secondary">Jetzt konfigurieren</button>
                    <button type="button" class="btn primary">In den Warenkorb</button>
                </div>

                <ul class="trust">
                    <li><x-icons name="quality" class="[45px] h-[45px] text-[#4DB4E8]" />Bestpreis-Garantie</li>
                    <li><x-icons name="support" class="w-[40px] h-[41px] text-[#4DB4E8]" />10 Jahre Produktgarantie</li>
                    <li><x-icons name="warranty" class="w-[40px] h-[51px] text-[#4DB4E8]" />Hergestellt in Deutschland</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="product-advantages">
    <div class="center">
        <h2>Vorteile Unsere Produkt Alum Standart</h2>
    </div>
</section>

{{-- Service --}}
<x-service/>
{{-- // Service --}}

@endsection

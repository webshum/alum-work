@extends('layouts.app')
@section('title'){{ $category->meta_title ?? $category->title }} | {{ config('app.name') }}@endsection
@section('description'){{ $category->meta_description ?? '' }}@endsection
@section('og_image'){{ Storage::url($category->thumbnails ?? null) }}@endsection

@section('content')

{{-- Main Slider --}}
@if(!empty($category))
<x-main-slider
    :thumbnails="$category->thumbnails"
    :title="$category->title"
    :meta-title="$category->meta_title"
    :description="$category->meta_description"
/>
@endif
{{-- // Main Slider --}}

{{-- Intro --}}
@if(!empty($category) && $category->content)
    <x-intro>{!! $category->content !!}</x-intro>
@endif
{{-- // Intro --}}

{{-- Category --}}
@if($category->products)
<section class="category-grid">
    <div class="center">
        @foreach($category->products as $product)
            <x-product.card
                href="{{ route('products.show', $product->slug) }}"
                :thumbnails="$product->thumbnails"
                :title="$product->title"
            />
        @endforeach
    </div>
</section>
@endif
{{-- // Category --}}

{{-- Service --}}
<x-service/>
{{-- // Service --}}

<section class="advantages hidden md:block">
  <div class="center">
        <h2 class="title text-center mb-[30px]">Vorteil der AlumWork Terrassenüberdachung</h2>

        <div class="grid grid-cols-2 gap-[37px]">
            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">01</span>
                    <h3>Hochwertige Materialien</h3>
                </div>
                <p class="text-center">Langlebig und witterungsbeständig für langfristige Nutzung.</p>
            </div>

            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">02</span>
                    <h3>Modernes Design</h3>
                </div>
                <p class="text-center">Zeitlos, stilvoll und passend für jede Architektur.</p>
            </div>

            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">03</span>
                    <h3>Individuelle Anpassung</h3>
                </div>
                <p class="text-center">Maßanfertigung für Ihre speziellen Bedürfnisse.</p>
            </div>

            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">04</span>
                    <h3>Einfache Pflege</h3>
                </div>
                <p class="text-center">Minimaler Aufwand für maximale Sauberkeit.</p>
            </div>

            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">05</span>
                    <h3>Zusätzliche Optionen</h3>
                </div>
                <p class="text-center">Integrierte LED-Beleuchtung, Seitenelemente und mehr.</p>
            </div>

            <div class="advantage">
                <div class="head">
                    <span class="text-[var(--akcent)]">06</span>
                    <h3>Maximale Flexibilität</h3>
                </div>
                <p class="text-center">Erweiterbar mit Markisen, und anderen individuellen Komfortlösungen.</p>
            </div>
        </div>
    </div>
</section>

{{-- Action --}}
@if(!empty($actions))
    <x-action :$actions class="py-[30px]"/>
@endif
{{-- // Action --}}

@endsection

@extends('layouts.app')
@section('title')Kategorien | {{ config('app.name') }}@endsection
@section('description') Kategorien @endsection
@section('og_image'){{ asset('images/og_image.jpg') }}@endsection

@section('content')

{{-- Main Slider --}}
<x-main-slider title="Kategorien" description="Kategorien AlumWork" />
{{-- // Main Slider --}}

{{-- Category --}}
@if(!empty($categories))
<section class="category-grid">
    <div class="center">
        @foreach($categories as $category)
            <x-product.card
                href="{{ route('products.show', $category->slug) }}"
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

@endsection

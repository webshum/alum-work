@extends('layouts.app')
@section('title')Produkte | {{ config('app.name') }}@endsection
@section('description') Produkte @endsection
@section('og_image'){{ asset('images/og_image.jpg') }}@endsection

@section('content')

{{-- Main Slider --}}
<x-main-slider title="Produkte" description="Produkte AlumWork" />
{{-- // Main Slider --}}

{{-- Category --}}
@if(!empty($products))
<section class="category-grid">
    <div class="center">
        @foreach($products as $product)
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

@endsection

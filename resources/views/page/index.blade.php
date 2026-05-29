@extends('layouts.app')
@section('title'){{ $page->meta_title ?? $page->title }} | {{ config('app.name') }}@endsection
@section('description'){{ $page->meta_description ?? '' }}@endsection
@section('og_image'){{ Storage::url($page->thumbnails ?? null) }}@endsection

@section('content')

{{-- Main Slider --}}
@if(!empty($page))
<x-main-slider
    :thumbnails="$page->thumbnails"
    :title="$page->title"
    :meta-title="$page->meta_title"
    :description="$page->meta_description"
/>
@endif
{{-- // Main Slider --}}

{{-- Intro --}}
@if(!empty($page) && $page->content)
    <x-intro>{!! $page->content !!}</x-intro>
@endif
{{-- // Intro --}}

@endsection

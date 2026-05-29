@php
    $attributes = $attributes->merge([
        'href' => '#',
        'class' => 'card'
    ]);
@endphp

<a {{ $attributes }}>
    @if(!empty($thumbnails))
        <div class="image">
            <img src="{{ Storage::url($thumbnails) }}" loading="lazy" alt="Category">
        </div>
    @endif

    <h2>{{ $title }}</h2>
</a>

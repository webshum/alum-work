@php
    $attributes = $attributes->merge([
        'class' => 'button'
    ])
@endphp

<button {{ $attributes }}>
    <span>{{ $slot }}</span>
</button>

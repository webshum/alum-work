@props(['visible' => ['phone', 'mail', 'map']])
@php($class = 'flex items-center gap-[30px] hover:!text-[var(--akcent)]')

<address {{ $attributes }}>
    @if(in_array('phone', $visible))
    <a href="tel:079319589177" class="{{ $class }}">
        <x-icons name="home-phone" class="size-8"/>
		<span>07931 / 958 91 77</span>
    </a>

    <a href="tel:016751502254" class="{{ $class }}">
        <x-icons name="home-work" class="size-8"/>
        <span>01675 / 150 22 54</span>
    </a>
    @endif

    @if(in_array('mail', $visible))
    <a href="mailto:info@alumwork.de" class="{{ $class }}">
        <x-icons name="mail" class="size-8"/>
        <span>info@alumwork.de</span >
    </a>
    @endif

    @if(in_array('map', $visible))
    <a href="https://www.google.com/maps/place/Nussacker+1+%7C+97999+Igersheim" class="{{ $class }}">
        <div class="size-8">
            <x-icons name="map"/>
        </div>
        <span>Nussacker 1 | 97999<br>Igersheim</span>
    </a>
    @endif
</address>

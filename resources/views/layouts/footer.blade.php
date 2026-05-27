@use('App\Models\Menu')

@php
    $service = Menu::where('location', 'service')->first();
    $unsere_produkte = Menu::where('location', 'unsere_produkte')->first();
    $rechtliches = Menu::where('location', 'rechtliches')->first();
@endphp

<footer class="footer">
    <div class="center footer-main">
        <div class="footer-col footer-info">
            <a href="/" class="footer-logo">
                <img src="{{ asset('images/logo-footer.svg') }}" alt="ALUMWORK">
            </a>

            <x-address class="flex flex-col gap-[12px] not-italic text-[20px]"/>
            <x-social/>
        </div>

        @if($service->items->isNotEmpty())
        <div class="footer-col">
            <h4>Service</h4>
            <ul>
                @foreach($service->items as $item)
                <li>
                    <a href="{{ $item?->page->slug ?? $item->url }}" target="{{ $item->target }}">
                        {{ $item->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($unsere_produkte->items->isNotEmpty())
        <div class="footer-col">
            <h4>Unsere Produkte</h4>
            <ul>
                @foreach($unsere_produkte->items as $item)
                <li>
                    <a href="{{ $item?->page->slug ?? $item->url }}" target="{{ $item->target }}">
                        {{ $item->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($rechtliches->items->isNotEmpty())
        <div class="footer-col">
            <h4>Rechtliches</h4>
            <ul>
                @foreach($rechtliches->items as $item)
                <li>
                    <a href="{{ $item?->page->slug ?? $item->url }}" target="{{ $item->target }}">
                        {{ $item->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="center footer-bottom">
        <p class="copyright">&copy; {{ config('app.name') }} - {{ date('Y') }} Alle Rechte vorbehalten</p>
        <ul>
            <li><a href="#">AGB</a></li>
            <li><a href="#">Datenschutzerklärung</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
    </div>
</footer>

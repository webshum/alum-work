@use('App\Models\Menu')
@php($menu = Menu::where('location', 'header')->first())

<header class="header">
    <div class="center">
        <a href="/" class="logo">
            <picture>
                <source srcset="{{ asset('images/logo-mob.svg') }}" media="(max-width: 768px)">
                <img src="{{ asset('images/logo.svg') }}" alt="AlumWork">
            </picture>
        </a>

        <a href="tel:+4979319589177" class="phone hidden">
            <x-icons name="phone" />
        </a>

        @if(!empty($menu))
        <button class="menu-toggle hidden">
            <span>MENU</span>
            <span class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
        @endif

        @if(!empty($menu))
            <nav class="nav">
                <ul>
                    @foreach($menu->items->whereNull('parent_id') as $item)
                        <li>
                            <a href="/{{ $item->page?->slug ?? $item->url }}" target="{{ $item->target }}">
                                <span>{{ $item->title }}</span>
                                @if($item->children->isNotEmpty())
                                    <x-icons name="arr"/>
                                @endif
                            </a>

                            @if($item->children->isNotEmpty())
                                <ul class="dropdown">
                                    @foreach($item->children as $child)
                                        <li>
                                            <a href="/{{ $child->page?->slug ?? $child->url }}" target="{{ $child->target }}">
                                                <span>{{ $child->title }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

                <x-address :visible="['phone']" class="hidden"/>
            </nav>
        @endif
    </div>
</header>

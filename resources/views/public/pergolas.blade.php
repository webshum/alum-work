@extends('layouts.app')

@section('body-class', 'page-pergolas')

@section('content')
    

    <section class="main-slider">
        <swiper-container>
            <swiper-slide>
                <img src="{{ asset('images/banner-img.png') }}" alt="">

                <div class="center">
                    <h1><span>Terrassen</span>überdachun</h1>
                    <h2>gAlu nach Maß – konfigurieren & günstig kaufen</h2>
                    <p>
                        Hochwertige Alu-Terrassenüberdachungen <br> für Ihr Zuhause: Standard-Modelle oder individuelle Konfiguration <br> mit Flachdach & Lamellendach
                    </p>
                </div>
            </swiper-slide>

            <swiper-slide>
                <img src="{{ asset('images/banner-img.png') }}" alt="">

                <div class="center">
                    <h1><span>Terrassen</span>überdachun</h1>
                    <h2>gAlu nach Maß – konfigurieren & günstig kaufen</h2>
                    <p>
                        Hochwertige Alu-Terrassenüberdachungen <br> für Ihr Zuhause: Standard-Modelle oder individuelle Konfiguration <br> mit Flachdach & Lamellendach
                    </p>
                </div>
            </swiper-slide>
        </swiper-container>
    </section>    

    <section class="intro">
        <div class="center">
            <p>
                Wir legen großen Wert auf Qualität und Zufriedenheit in der Erfüllung der Wünsche unserer Kunden. Deshalb steht auch die fachgerechte, kompetente Beratung der Kunden yan erster Stelle. Ihren Wünschen
                entsprechend, planen wir Ihre Terrassenüberdachung, Carport oder Sommergarten unter Verwendung moderner Technik und ausgezeichneter Qualität.
            </p>

            <p>
                Kunden und Interessenten haben die Möglichkeit sich direkt bei Ihnen zuhause oder Geschäftsstelle beraten zu werden. Vereinbaren Sie gleich ein Beratungstermin und profitieren von den aktuellen Rabatten und Angeboten. Wir beraten Sie gerne!
            </p>
        </div>
    </section>

    <section class="products">
    <div class="center">
        <a href="#" class="product-card">
            <img src="{{ asset('images/product-1.jpg') }}" alt="">
            <h2>Terrassenüberdachung</h2>
        </a>

        <a href="#" class="product-card">
            <img src="{{ asset('images/product-2.png') }}" alt="">
            <h2>Sommergarten</h2>
        </a>

        <a href="#" class="product-card">
            <img src="{{ asset('images/product-3.jpg') }}" alt="">
            <h2>Carport</h2>
        </a>

        <a href="#" class="product-card">
            <img src="{{ asset('images/product-4.png') }}" alt="">
            <h2>Eingangüberdachung</h2>
        </a>
    </div>
</section>

@include('public.service')
@include('components.advantages')
@include('components.promo')


@endsection
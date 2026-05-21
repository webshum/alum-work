@extends('layouts.app')

@section('content')

@include('public.main-slider')

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

@include('components.products')

@include('public.service')

<section class="promo">
    <div class="center">
        <h2 class="title">Profitieren Sie jetzt von unseren Aktionen</h2>
        
        <div class="wrap">
            <a href="#" class="item">
                <img src="{{ asset('images/promo-1.png') }}" alt="10% Rabatt">
            </a>

            <a href="#" class="item">
                <img src="{{ asset('images/promo-2.png') }}" alt="Kontakt aufnehmen">
            </a>

            <a href="#" class="item">
                <img src="{{ asset('images/promo-3.png') }}" alt="LED-Lampen-Set">
            </a>
        </div>
    </div>
</section>
                                                                                                                                            
                                                                                                                                                                    

@endsection

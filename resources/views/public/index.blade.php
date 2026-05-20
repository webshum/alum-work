@extends('layouts.app')

@section('content')

@include('public.main-slider')

<section class="intro">
    <div class="center">
        <div class="wrap">
            <p>
                Wir legen großen Wert auf Qualität und Zufriedenheit in der Erfüllung der Wünsche unserer Kunden. Deshalb steht auch die fachgerechte, kompetente Beratung der Kunden yan erster Stelle. Ihren Wünschen
                entsprechend, planen wir Ihre Terrassenüberdachung, Carport oder Sommergarten unter Verwendung moderner Technik und ausgezeichneter Qualität.
            </p>

            <p>
                Kunden und Interessenten haben die Möglichkeit sich direkt bei Ihnen zuhause oder Geschäftsstelle beraten zu werden. Vereinbaren Sie gleich ein Beratungstermin und profitieren von den aktuellen Rabatten und Angeboten. Wir beraten Sie gerne!
            </p>
        </div>
    </div>
</section>

@include('public.products')
  
@include('public.service')
    
@endsection

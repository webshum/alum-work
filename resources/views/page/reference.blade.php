@extends('layouts.app')

@section('title') Reference @endsection

@section('content')
    <section class="reference">
        <div class="center">
            <h1 class="title">Referenzen</h1>
            
            <div class="gallery">
                <div class="gallery-categories">
                    <ul>
                        <li><a href="#" class="active">Terrassenüberdachung</a></li>
                        <li><a href="#">Flachdach SkyView</a></li>
                        <li><a href="#">Carport</a></li>
                        <li><a href="#">Eingangsüberdachung</a></li>
                        <li><a href="#">Vordach</a></li>
                        <li><a href="#">Lamellendach SunPro</a></li>
                        <li><a href="#">Balkonüberdachung mit Verglasung</a></li>
                    </ul>
                </div>
                
                <div class="grid">
                    <a href="{{ asset('images/Pict-1.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-1.png') }}" alt="Terrassenüberdachung">
                    </a>

                    <a href="{{ asset('images/Pict-2.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-2.png') }}" alt="Terrassenüberdachung">
                    </a>

                    <a href="{{ asset('images/Pict-3.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-3.png') }}" alt="Terrassenüberdachung">
                    </a>

                    <a href="{{ asset('images/Pict-4.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-4.png') }}" alt="Terrassenüberdachung">
                    </a>

                    <a href="{{ asset('images/Pict-5.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-5.png') }}" alt="Terrassenüberdachung">
                    </a>

                    <a href="{{ asset('images/Pict-6.png') }}" data-fancybox="gallery" data-caption="Single image">
                        <img loading="lazy" src="{{ asset('images/Pict-6.png') }}" alt="Terrassenüberdachung">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection






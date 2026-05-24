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

    <section class="category-grid">
    <div class="center">
        <a href="#" class="category-card">
            <img src="{{ asset('images/product-1.jpg') }}" alt="">
            <h2>Terrassenüberdachung</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-2.png') }}" alt="">
            <h2>Sommergarten</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-3.jpg') }}" alt="">
            <h2>Carport</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-4.png') }}" alt="">
            <h2>Eingangüberdachung</h2>
        </a>
    </div>
</section>

<section class="service">
    <div class="center">
            <div class="service-content">
                <div class="service-item">
                    <h3>Kundendienst</h3>
                    <p>Unser Kundendienst ist 365 Tage im Jahr erreichbar</p>
                </div>

                <div class="service-item">
                    <h3>Sicheres Bestellen</h3>
                    <p>Bestellen Sie sicher und einfach</p>
                </div>

                <div class="service-item">
                    <h3>Service & unsere Produkte</h3>
                </div>
            </div>

            <div class="service-manager">
                <img src="{{ asset('images/service-1.png') }}" alt="Manager">
            </div>
    </div>
</section>

<section class="advantages">
  <div class="center">
        <h2>Vorteil der AlumWork Terrassenüberdachung</h2>
    
        <div class="advantages-grid">
            <div class="advantage">
                <div class="head">
                    <span class="num">01</span>
                    <h3>Hochwertige Materialien</h3>
                </div>
                <p>Langlebig und witterungsbeständig für langfristige Nutzung.</p>
            </div>
            
            <div class="advantage">
                <div class="head">
                    <span class="num">02</span>
                    <h3>Modernes Design</h3>
                </div>
                <p>Zeitlos, stilvoll und passend für jede Architektur.</p>
            </div>
            
            <div class="advantage">
                <div class="head">
                    <span class="num">03</span>
                    <h3>Individuelle Anpassung</h3>
                </div>
                <p>Maßanfertigung für Ihre speziellen Bedürfnisse.</p>
            </div>
            
            <div class="advantage">
                <div class="head">
                    <span class="num">04</span>
                    <h3>Einfache Pflege</h3>
                </div>
                <p>Minimaler Aufwand für maximale Sauberkeit.</p>
            </div>
            
            <div class="advantage">
                <div class="head">
                    <span class="num">05</span>
                    <h3>Zusätzliche Optionen</h3>
                </div>
                <p>Integrierte LED-Beleuchtung, Seitenelemente und mehr.</p>
            </div>
            
            <div class="advantage">
                <div class="head">
                    <span class="num">06</span>
                    <h3>Maximale Flexibilität</h3>
                </div>
                <p>Erweiterbar mit Markisen, und anderen individuellen Komfortlösungen.</p>
            </div>
        </div>
    </div>
</section>

 <section class="promo">
    <div class="center">
        <h2>Profitieren Sie jetzt von unseren Aktionen</h2>
        
        <div class="wrap">
            <a href="#" class="item">
             <img src="{{ asset('images/promo-1.jpg') }}" alt="10% Rabatt">
            </a>

            <a href="#" class="item">
                <img src="{{ asset('images/promo-2.jpg') }}" alt="Kontakt aufnehmen">
            </a>

            <a href="#" class="item">
                <img src="{{ asset('images/promo-3.jpg') }}" alt="LED-Lampen-Set">
            </a>
        </div>
    </div>
</section>

@endsection
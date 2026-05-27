@extends('layouts.app')

@section('body-class', 'page-product')

@section('content')
     
    <section class="main-slider">
        <swiper-container>
            <swiper-slide>
                <img src="{{ asset('images/banner-img.png') }}" alt="">

                <div class="center">
                    <h1><span>Alum</span>Standard</h1>
                    <h2>konfigurieren & günstig kaufen</h2>
                    <p>Günstige, bewährte Modelle – schnell lieferbar</p>
                </div>
            </swiper-slide>
        </swiper-container>
    </section>    

    <section class="intro">
        <div class="center">
            <h2>Pure Qualität zum besten Preis</h2>

            <p>
                Die neue Terrassenüberdachung AlumStandart ist eine äußerst präzise Entwicklung, made in Germany und ist statisch geprüft. Es überzeugt Sie durch hochwertige, langlebige Materialien, präzise durchdachte Verarbeitung und ein flächenbündiges Design in Kombination mit einem attraktiven Preis. Die neue Produktlinie AlumStandart punktet durch eine innen liegende Statik, die für eine durchgängige harmonische Dachoptik sorgt. 
            </p>

            <p>
                Die Lösung für jede Einbausituation: Speziell für die Anforderungen und Wünsche unserer Kunden entwickelt, passt sich die Terrassenüberdachung AlumStandart auch besonderen Einbausituationen an. Das umfangreiche Profilsortiment ermöglicht die Realisierung zahlreicher (Sonder-)Konstruktionen.
            </p>

            <p>
                Fachkundige Beratung: Konfigurieren Sie sich jetzt in nur wenigen Schritten Ihr persönliches Terrassendach, und lassen Sie sich von unserem serviceorientierten Team fachgerecht beraten. Maximale Größe der Terrasse AlumStandart: 400 cm Tiefe  700 cm Länge.
            </p>
        </div>
    </section>

<section class="product">
    <div class="center">
        <div class="product-title">
            <h2>
                <span class="brand">Alum</span> Standard
            </h2>
            <p class="subtitle">
                klassische Terrassenüberdachung für stilvolle Außenbereiche
            </p>
        </div>

        <div class="wrap">
            <div class="gallery">
                <swiper-container class="main-img" init="false" space-between="10">
                    <swiper-slide><img src="{{ asset('images/product-1.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-3.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-2.png') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-4.png') }}" alt=""></swiper-slide>
                </swiper-container>

                <swiper-container class="thumbs thumbs-slider" init="false" slides-per-view="4" space-between="10" watch-slides-progress="true">
                    <swiper-slide><img src="{{ asset('images/product-1.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-3.jpg') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-2.png') }}" alt=""></swiper-slide>
                    <swiper-slide><img src="{{ asset('images/product-4.png') }}" alt=""></swiper-slide>
                </swiper-container>
            </div>

            <div class="info">
                <div class="rating"></div>

                <ul class="usp">
                    <li>Abholbereit innerhalb von 2 Tagen</li>
                    <li>Lieferung innerhalb von ca. 4-5 Wochen</li>
                </ul>

                <div class="price-box">
                    <div class="row">
                        <div class="inner">
                            <div class="discount">25% Rabatt</div>
                        </div>
                        <div class="old-price">1.694,00 €</div>
                    </div> 

                    <div class="row">
                        <div class="inner">
                            <div class="sie">Sie sparen:</div>
                        </div>
                        <div class="saving">347,00 €</div>
                    </div>

                    <div class="row current-price">
                        <div class="inner">
                            <span>Preis :</span>
                        </div>
                        <strong>1.347,00 €</strong>
                        <small>inkl. MwSt.</small>
                    </div>
                </div>

                <div class="actions">
                    <button type="button" class="btn secondary">Jetzt konfigurieren</button>
                    <button type="button" class="btn primary">In den Warenkorb</button>
                </div>

                <ul class="trust">
                    <li>Bestpreis-Garantie</li>
                    <li>10 Jahre Produktgarantie</li>
                    <li>Hergestellt in Deutschland</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="product-advantages">
    <div class="center">
        <h2>Vorteile Unsere Produkt Alum Standart</h2>
    </div>
</section>

<section class="service">
        <div class="center">
            <div class="wrap">
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

@endsection
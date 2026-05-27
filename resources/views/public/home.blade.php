@extends('layouts.app')

@section('content')

<section class="main-slider">
    <swiper-container>
        <swiper-slide>
            <img src="{{ Storage::url($page->thumbnails) }}" alt="">

            <div class="center">
                <h1>ALUM<span class="!text-white">WORK</span></h1>

                @if($page->meta_description)
                    <div class="text mt-[40px] max-w-[745px]">
                        <p>{{ $page->meta_description }}</p>
                    </div>
                @endif
            </div>
        </swiper-slide>
    </swiper-container>
</section>

@if($page->content)
    <x-intro>{!! $page->content !!}</x-intro>
@endif

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

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-5.png') }}" alt="">
            <h2>Balkonüberdachung</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-6.jpg') }}" alt="">
            <h2>Sonnenschutz & Beschattung</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-7.jpg') }}" alt="">
            <h2>Geländer</h2>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('images/product-7.jpg') }}" alt="">
            <h2>Geländer</h2>
        </a>
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

<section class="faq-guide">
    <div class="center">
        <div class="faq">
            <h2 class="faq-title">Häufige Fragen</h2>

            <div class="acordeon main-acordeon">
                <div class="acordeon-wrap">
                    <div class="acordeon-btn">
                        <span>Wie lange dauert die Montage?</span>
                    </div>

                    <div class="acordeon-content">
                        <div class="inner">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="acordeon-wrap">
                    <div class="acordeon-btn">
                        <span>Ist eine Baugenehmigung erforderlich?</span>
                    </div>

                    <div class="acordeon-content">
                        <div class="inner">
                            <p>
                                Проведение УЗИ диагностики (УЗИ органов брюшной полости, почек и забрюшинного пространства, всех сосудов; лимфатических узлов, мягких тканей, желез, мочевого пузыря и т.д.,). ЭХО-КГ (взрослым и детям). Контроль работы медицинской аппаратуры. Ведение истории болезни в электронном виде (работа в МИС Инфоклиника/Медиалог).
                            </p>

                            <p>
                                Высшее профессиональное медицинское образование "Лечебное дело". <br><br>
                                Наличие действующего сертификата по ультразвуковой диагностике.<br><br>
                                Опыт работы на аналогичной должности от 3-х лет.<br><br>Приветствуется опыт коммерческих амбулаторных приемов в государственных и частных медицинских учреждениях.
                                <br><br>Наличие медицинской книжки.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="acordeon-wrap">
                    <div class="acordeon-btn">
                        <span>Welche Schneelasten sind möglich?</span>
                    </div>

                    <div class="acordeon-content">
                        <div class="inner">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="faq-button">Alle FAQs lesen</button>
        </div>

        <div class="guide">
            <div class="guide-label">RATGEBER & WISSEN</div>
            <h2 class="guide-title">Baugenehmigung für Terrassendächer</h2>
            <p class="guide-text">
                Erfahren Sie alles über die rechtlichen Rahmenbedingungen und ab wann Sie in Ihrem
                Bundesland eine Genehmigung benötigen.
            </p>
            <blockquote class="guide-quote">
                Wussten Sie schon? In vielen Regionen sind Überdachungen bis zu einer bestimmten
                Größe genehmigungsfrei.
            </blockquote>
            <a href="#" class="guide-link">Zum Artikel →</a>
        </div>
    </div>
</section>

<section class="referenc-slider">
    <div class="center">
        <div class="referenc-top">
            <div class="referenc-title">
                <span class="subtitle">REFERENZEN</span>
                <h2>Unsere Referenzen</h2>
            </div>

            <div class="referenc-nav">
                <button class="slider-prev" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </button>
                <button class="slider-next" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </button>
            </div>

            <a href="#" class="referenc-all">
                Alle Projekte Ansehen
                <img src="{{ asset('images/ic-arrow.svg') }}" alt="">
            </a>
        </div>

        <swiper-container
            class="referenc-swiper"
            slides-per-view="3"
            space-between="24"
            breakpoints='{"320": {"slidesPerView": 1.2, "spaceBetween": 16}, "768": {"slidesPerView": 2, "spaceBetween": 20}, "1024": {"slidesPerView": 3, "spaceBetween": 24}}'
            navigation-next-el=".referenc-slider .slider-next"
            navigation-prev-el=".referenc-slider .slider-prev">

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-1.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Ulm, Baden-Württemberg, 2025</span>
                        <h3>Moderne Glas-Oase in Hanglage</h3>
                        <p>Sonderanfertigung mit integrierter LED-Beleuchtung und seitlichen Glaselementen.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-2.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Wertheim, Baden-Württemberg, 2026</span>
                        <h3>Carport & Terrasse</h3>
                        <p>Einheitliches Design für das gesamte Grundstück in Anthrazit-Optik.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide>
                <a href="#" class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </a>
            </swiper-slide>

        </swiper-container>
    </div>
</section>



@endsection

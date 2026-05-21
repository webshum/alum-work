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

            <a href="#" class="referenc-all">Alle Projekte Ansehen →</a>
        </div>

        <swiper-container 
            class="referenc-swiper"
            slides-per-view="3" 
            space-between="24"
            breakpoints='{"320": {"slidesPerView": 1.2, "spaceBetween": 16}, "768": {"slidesPerView": 2, "spaceBetween": 20}, "1024": {"slidesPerView": 3, "spaceBetween": 24}}'
            navigation-next-el=".referenc-slider .slider-next"
            navigation-prev-el=".referenc-slider .slider-prev">
            
            <swiper-slide>
                <div class="referenc-card">
                    <img src="{{ asset('images/referenc-1.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Ulm, Baden-Württemberg, 2025</span>
                        <h3>Moderne Glas-Oase in Hanglage</h3>
                        <p>Sonderanfertigung mit integrierter LED-Beleuchtung und seitlichen Glaselementen.</p>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="referenc-card">
                    <img src="{{ asset('images/referenc-2.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Wertheim, Baden-Württemberg, 2026</span>
                        <h3>Carport & Terrasse</h3>
                        <p>Einheitliches Design für das gesamte Grundstück in Anthrazit-Optik.</p>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="referenc-card">
                    <img src="{{ asset('images/referenc-3.png') }}" alt="">
                    <div class="referenc-info">
                        <span class="referenc-location">Nürnberg, Bayern, 2025</span>
                        <h3>Premium Lamellendach</h3>
                        <p>Variable Lichtsteuerung durch automatisierte Lamellen für Komfort.</p>
                    </div>
                </div>
            </swiper-slide>

        </swiper-container>
    </div>
</section>
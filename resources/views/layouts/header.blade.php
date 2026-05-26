<header class="header">
    <div class="center">
        <a href="/" class="header-logo">
            <img src="{{ asset('images/logo.svg') }}" alt="ALUMWORK">
        </a>

        <!-- Іконка телефону + Бургер для мобайлу -->
        <div class="header-actions">
            <a href="/" class="logo-mob">
                <img src="{{ asset('images/logo-mob.svg') }}" alt="ALUMWORK">
            </a>

            <a href="tel:+49123456789" class="header-phone">
                <img src="{{ asset('images/ic-phoneMob.svg') }}" alt="ALUMWORK">
            </a>
            <button class="menu-toggle" aria-label="Menu" aria-expanded="false">
                <span class="menu-text">MENU</span>
                <span class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>

        <nav class="header-nav">
            <ul class="nav-list">
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Produkte</a>
                    <ul class="dropdown">
                        <li><a href="#">Terrassenüberdachung</a></li>
                        <li><a href="#">Sommergarten</a></li>
                        <li><a href="#">Carport</a></li>
                        <li><a href="#">Eingangsüberdachung</a></li>
                        <li><a href="#">Balkonüberdachung</a></li>
                        <li><a href="#">Sonnenschutz</a></li>
                        <li><a href="#">Glasschiebewand</a></li>
                        <li><a href="#">Geländer</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Leistungen</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Über Uns</a></li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Kontakt</a>
                    <ul class="dropdown">
                        <li><a href="#">Terrassenüberdachung</a></li>
                        <li><a href="#">Sommergarten</a></li>
                        <li><a href="#">Carport</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
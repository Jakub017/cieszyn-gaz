<nav>
    <div class="menu-container">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <ul class="menu-list active">
            <li class="menu-item">
                <a href="{{ route('installations') }}">Instalacje gazowe</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('service') }}">Serwis LPG</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('pricing') }}">Cennik</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('realizations') }}">Realizacje</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('contact') }}">Kontakt</a>
            </li>
        </ul>
        <div class="hamburger-container">
            <img src="{{ asset('img/hamburger.png') }}" alt="">
        </div>
    </div>
</nav>

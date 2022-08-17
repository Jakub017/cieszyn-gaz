<nav>
    <div class="menu-container">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <ul class="menu-list">
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

<div class="cookies-wrapper">
    <div class="content">
        <h4 class="cookies-header">Szanujemy Twoją prywatność</h4>
        <p>Korzystamy z plików cookies i umożliwiamy zamieszczanie ich osobom trzecim. Pliki cookie pozwalają na
            poznanie twoich preferencji na podstawie zachowań w serwisie. Uznajemy, że jeżeli kontynuujesz korzystanie z
            serwisu, wyrażasz na to zgodę. Poznaj szczegóły i możliwości zmiany ustawień w <a
                href="{{ route('cookies') }}">Polityce Cookies</a></p>
        <div class="buttons">
            <a href="javascript:acceptCookies()" class="item agree-cookies">Rozumiem</a>
        </div>
    </div>
</div>

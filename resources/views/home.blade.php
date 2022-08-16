@extends('templates.page')

@section('content')
<div class="main-screen">
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('img/Untitled.mp4') }}" type="video/mp4">
    </video>
    <div class="main-screen-text">
        <h1>Oferujemy naprawy wszystkich typów instalacji LPG</h1>
        <p>Wieloletnia działalność w branży owocuje dobrą współpracą z najlepszymi hurtowniami.</p>
    </div>
</div>
<section id="main">
    <div class="section-content">
        <div class="row">
            <div class="col-12 col-md-4 sidebar">
                <div class="form-container">
                    <h3>Kalkulator Benzyna - LPG</h3>
                    <form action="">
                        <input type="number" placeholder="Ilość kilometrów rocznie">
                        <input type="number" placeholder="Spalanie na 100km">
                        <input type="submit" value="Sprawdź" class="calculator-submit">
                    </form>
                    <a href="#" class="calculator-contact">Wycena montażu instalacji gazowej</a>
                </div>
                <div class="realizations-container">
                    <h3>Ostatnie realizacje</h3>
                    <a href="#" class="see-realizations">Zobacz inne realizacje</a>
                </div>
            </div>
            <div class="col-12 col-md-8 content">
                <h2>Witamy na stronie Cieszyn-gaz.pl</h2>
                <p>Firma nasza istnieje od 2004 roku. Jesteśmy prężnie działającą firmą. W naszej działalności
                    stawiamy
                    na zadowolenie oraz profesjonalną obsługę Klientów. Działalność firmy oparta jest na wieloletnim
                    doświadczeniu jakie zdobyliśmy w renomowanych firmach istniejących od lat w branży
                    motoryzacyjnej.
                    Oferta naszej firmy skierowana jest do właścicielach aut, dla których liczą się jakość usług i
                    przystępna cena.</p>
                <div class="logos-container">
                    <img src="{{ asset('img/packed.png') }}" alt="">
                    <img src="{{ asset('img/stag.png') }}" alt="">
                    <img src="{{ asset('img/nano.png') }}" alt="">
                </div>
                <p>Do montażu instalacji używamy najnowszych urządzeń, gwarantujących Państwu najwyższą jakość.
                    Świadectwa homologacji sposobu montażu instalacji przystosowującej do zasilania gazowego, które
                    posiadamy są dowodem na rzetelną i fachową obsługę. Udzielamy gwarancji na wszystkie części
                    instalacji gazowej. Instalowane przez nas systemy pochodzą od renomowanych i sprawdzonych
                    producentów co gwarantuje Państwu bezawaryjną i bezproblemową eksploatację.</p>
            </div>
        </div>
    </div>
</section>
@endsection


</html>

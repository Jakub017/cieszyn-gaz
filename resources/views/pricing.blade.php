@extends('templates.page')

@section('content')

<section id="pricing">
    <div class="pricing-wrapper">
        <h1>Cennik</h1>
        <h4>Instalacja LPG sekwencyjnego wtrysku gazu
        </h4>
        <div class="pricing-boxes">


            <div class="pricing-box">
                <h3 class="price-name">Samochody 3-, 4- cylindrowe</h3>
                <ul class="price-list">
                    <li>STAG 4 QBOX BASIC od {{ setting('cennik.3_stag_4_qbox_basic') }} zł</li>
                    <li>STAG GO FAST od {{ setting('cennik.3_stag_go_fast') }} zł</li>
                    <li>BRC SQ32 od {{ setting('cennik.3_brc_sq32') }} zł</li>
                    <li>LPG TECH od {{ setting('cennik.3_lpg_tech') }} zł</li>
                    <li>OPTIMA od {{ setting('cennik.3_optima') }} zł</li>
                </ul>
            </div>
            <div class="pricing-box">
                <h3 class="price-name">Samochody 5-, 6- cylindrowe</h3>
                <ul class="price-list">
                    <li>STAG 4 QBOX od {{ setting('cennik.5_stag_q_max') }} zł</li>                    
                    <li>LPG TECH od {{ setting('cennik.5_lpg_tech') }} zł</li>
                    <li>BRC od {{ setting('cennik.5_brc') }} zł</li>                    
                    <li>OPTIMA od {{ setting('cennik.5_optima') }} zł</li>
                </ul>
            </div>
            <div class="pricing-box">
                <h3 class="price-name">Samochody 8- cylindrowe</h3>
                <ul class="price-list">
                    <li>STAG 300 - 8 ISA2/QMAX BASIC od {{ setting('cennik.8_stag_300') }} zł</li>
                    <li>LPG TECH od {{ setting('cennik.8_lpg_tech') }} zł</li>
                    <li>BRC od {{ setting('cennik.8_brc') }} zł</li>                    
                    <li>OPTIMA od {{ setting('cennik.8_optima') }} zł</li>
                </ul>
            </div>
        </div>
        <h4>Instalacja LPG sekwencyjnego wtrysku gazu do silników z bezpośrednim wtryskiem paliwa
        </h4>
        <div class="pricing-boxes">
            <div class="pricing-box">
                <h3 class="price-name">Samochody 4- cylindrowe</h3>
                <ul class="price-list">
                    <li>SSTAG 400 DPI od {{ setting('cennik.4_stag_dpi') }} zł</li>                    
                    <li>BRC SDI od {{ setting('cennik.4_bri_sdi') }} zł</li>                    
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

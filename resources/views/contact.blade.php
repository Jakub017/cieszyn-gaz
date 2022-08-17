@extends('templates.page')

@section('content')

<section id="contact">
    <div class="contact-wrapper">
        <h1>Kontakt</h1>
        <div class="row">
            <div class="col-12 col-md-6">

                <address>
                    Czynne: Pn-Pt - 8:00 - 16:00<br>
                    Sobota - Nieczynne<br>
                    Niedziela - Nieczynne<br>
                    Leszek Witkowski<br><br>
                    ul. Dworkowa 1B,<br>
                    43-400 Cieszyn<br>
                    <a href="tel:509464584">+48 509 464 584</a><br>
                    <a href="mailto:leszekv40@wp.pl">leszekv40@wp.pl</a>

                </address>
            </div>
            <div class="col-12 col-md-6">
                <form class="contact-form" action="">
                    <div class="two-inputs">
                        <input type="text" placeholder="Imię i nazwisko">
                        <input type="number" placeholder="Numer telefonu">
                    </div>
                    <input type="email" placeholder="Adres e-mail">
                    <textarea name="" id="" placeholder="Treść wiadomości"></textarea>
                    <input class="send-msg" type="submit" value="Wyślij wiadomość">
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

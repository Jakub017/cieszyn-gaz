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
                 @if (Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
                  @endif
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li><br>
                          @endforeach
                          </ul>
                      </div>
                  @endif
                <form class="contact-form" action="{{ route('post.contact') }}" method="post">                    
                    <div class="two-inputs">
                        <input type="text" placeholder="Imię i nazwisko" name="name">
                        <input type="number" placeholder="Numer telefonu" name="phone">
                    </div>                   
                    <input type="email" placeholder="Adres e-mail" name="email">
                     @csrf
                    <textarea id="" placeholder="Treść wiadomości" name="userMessage"></textarea>
                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            {!! RecaptchaV3::field('contact') !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input class="send-msg" type="submit" value="Wyślij wiadomość">
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

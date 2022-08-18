@extends('templates.page')

@section('content')

<section id="installations">
    <div class="installations-wrapper">
        <h1>Wycena instalacji gazowej LPG</h1>
        
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
        <form class="valuation-form" action="{{ route('post.installation.valuation') }}" method="post">                    
            
            <input type="text" placeholder="Imię i nazwisko" name="name" value="{{ old('name') }}">
            <input type="text" placeholder="Marka samochodu" name="brand" value="{{ old('brand') }}">
            <input type="text" placeholder="Model samochodu" name="model" value="{{ old('model') }}">
            <input type="text" placeholder="Rocznik samochodu" name="production_date" value="{{ old('production_date') }}">
            <input type="text" placeholder="Pojemność samochodu" name="capacity" value="{{ old('capacity') }}">
            <input type="text" placeholder="Moc silnika w kM" name="engine_power" value="{{ old('engine_power') }}"> 
            <input type="number" placeholder="Numer telefonu" name="phone" value="{{ old('phone') }}">
            <input type="email" placeholder="Adres e-mail" name="email" value="{{ old('email') }}">
            
            <textarea id="" placeholder="Uwagi" name="comment">{{ old('comment') }}</textarea>
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
            @csrf
            <input class="installation-link" type="submit" value="Wyślij zapytanie">
        </form>

    </div>
</section>
@endsection


@extends('templates.page')

@section('content')

<section id="realizations">
    <div class="gallery-container">
        <h1>Realizacje</h1>
        <div class="gallery">
            @foreach($realizations as $realization)            
            <div>
                <img class="gallery__Image" src="{{ asset('storage/'.$realization->photo) }}"
                    data-large="{{ asset('storage/'.$realization->photo) }}">
            </div>
            @endforeach
        </div>

</section>

@endsection

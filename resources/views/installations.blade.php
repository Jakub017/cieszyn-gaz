@extends('templates.page')

@section('content')

<section id="installations">
    <div class="installations-wrapper">


        <h1>Instalacje gazowe</h1>
        <div class="list-header">
            <h4>BRC Gas Equipment</h4>
        </div>
        <ul class="installation-list">
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/S32.jpg') }}" alt="">
                </div>
                <h5 class="installation-name">Sequent 32 OBD </h5>
                <a href="{{ asset('folder/SQ32_A4 OBD.pdf') }}" class="installation-link" target="_blank">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/SPD.jpg') }}" alt="">
                </div>
                <h5 class="installation-name"> Sequent Plug & Drive</h5>
                <a href="{{ asset('folder/folder_sequent_pndn.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/SDI20.jpg') }}" alt="">
                </div>
                <h5 class="installation-name">Sequent Direct Injection 2.0 </h5>
                <a href="{{ asset('folder/folder_sequent_SDI_20.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/LDI.jpg') }}" alt="">
                </div>
                <h5 class="installation-name">LDI</h5>
                <a href="{{ asset('folder/folder_sequent_LDI.pdf') }}" class="installation-link">Folder</a>
            </li>
        </ul>

        <div class="list-header">
            <h4>STAG</h4>
        </div>
        <ul class="installation-list">
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/STAG-qgeneration.png') }}" alt="">
                </div>
                <h5 class="installation-name">STAG QMAX PLUS </h5>
                <a href="{{ asset('folder/STAG QMAX PLUS.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/STAG-qgeneration.png') }}" alt="">
                </div>
                <h5 class="installation-name">STAG QBOX PLUS </h5>
                <a href="{{ asset('folder/stag box.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/STAG-qgeneration.png') }}" alt="">
                </div>
                <h5 class="installation-name">STAG 400 DPI </h5>
                <a href="{{ asset('folder/stag-400-dpi.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/STAG-qgeneration.png') }}" alt="">
                </div>
                <h5 class="installation-name">STAG GoFast </h5>
                <a href="{{ asset('folder/stag-gofast.pdf') }}" class="installation-link">Folder</a>
            </li>
        </ul>

        <div class="list-header">
            <h4>OPTIMA</h4>
        </div>
        <ul class="installation-list">
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/optima_nano.png') }}" alt="">
                </div>
                <h5 class="installation-name">OPTIMA NANO </h5>
                <a href="{{ asset('folder/optima-nano.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/optima_shark.png') }}" alt="">
                </div>
                <h5 class="installation-name">OPTIMA SHARK </h5>
                <a href="{{ asset('folder/optima-shark.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/optima_baracuda.png') }}" alt="">
                </div>
                <h5 class="installation-name">OPTIMA BARRACUDA </h5>
                <a href="{{ asset('folder/optima barracuda.pdf') }}" class="installation-link">Folder</a>
            </li>
            <li class="installation-item">
                <div class="installation-image">
                    <img src="{{ asset('img/optima_expert.png') }}" alt="">
                </div>
                <h5 class="installation-name"> OPTIMA EXPERT</h5>
                <a href="{{ asset('folder/optima expert.pdf') }}" class="installation-link">Folder</a>
            </li>
        </ul>
    </div>
</section>
@endsection

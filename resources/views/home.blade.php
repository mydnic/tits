@extends('layout')

@section('content')
<section class="hero is-primary is-fullheight is-bold home">
    <div class="image">
        <img src="/images/DSC0018.jpg" alt="IT MAKER">
    </div>
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-uppercase">
                We don't need suits<br>to get shit done.
            </h1>
            {{-- <h2 class="subtitle">
                This tech guy in geeky t shirt can do anything.
            </h2> --}}
        </div>
    </div>
    <div class="hero-foot">
        <div class="container">
            <p><strong>Clement Rigo</strong> - Freelance IT Consultant & Founder at</p>
            <nav class="tabs">
                <ul>
                    <li>
                        Tech In T Shirt
                    </li>
                    <li>
                        <a href="https://mydnic.be" target="_blank">My Dynamic Production SPRL</a>
                    </li>
                    <li>
                        <a href="https://webradio.io" target="_blank">WebRadio.io</a>
                    </li>
                    <li>
                        <a href="https://24imagesparseconde.com" target="_blank">24 Images Par Seconde</a>
                    </li>
                    <li>
                        <a href="http://dailyscrum.tips/" target="_blank">Daily Scrum Tips</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
@endsection

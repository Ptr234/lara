@extends('LAYOUTS.KyebPage')
@section('title', 'Sermons')
@section( 'content')


@endsection
@include('CSS.Styles')

<div class="container">
    <h1>CHRIST'S HEART KYEBANDO</h1>        
    <h2>ABOUT US</h2>
    
    <div class="gallery">
        <div class="gallery-item">
            <img src="https://raw.githubusercontent.com/Ptr234/ChKyeb/main/WhatsApp%20Image%202025-02-05%20at%2010.11.44_ecb5d128.jpg" alt="About Us">
            @php
            $textDescription = "Christ's Heart Kyebando is dedicated to spreading the gospel and uplifting communities";
            $textLocation    ="We are located at Kyebando Kyerisa, Uganda. Join us every Sunday!";
            $button          ="Click the button below to download our latest service materials.";
            $serviceHighlight ="OUR SERVICES ARE AVAILABLE FOR DOWNLOAD";
            $link = "https://drive.google.com/drive/folders/1JotlObpiJVgERb_t-DrANIjoT9GbmIHl?usp=sharing";
            @endphp
            <div class="gallery-text">{{$textDescription}}</div>
        </div>
        <div class="gallery-item">
            <img src="https://raw.githubusercontent.com/Ptr234/ChKyeb/main/yt.jpg" alt="Location">
            <div class="gallery-text">{{$textLocation}}</div>
        </div>
    </div>

    <h2>{{$serviceHighlight}}</h2>
    <p>{{$button}}</p>
    <a href={{$link}} class="download-btn" target="_blank" rel="noopener noreferrer">Download</a>
</div>

@yield('content')


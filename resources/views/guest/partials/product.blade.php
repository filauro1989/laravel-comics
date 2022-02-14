@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section ('content')
    <div class="jumbotron">
    </div>
    <div class="product-image-container">
        <div class="top-left-image-container p-absolute">
            <img class="top-left-image" src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
            <p class="comic-p p-absolute">COMIC BOOK</p>
            <p class="view-p p-absolute">VIEW GALLERY</p>
        </div>
    </div>
    <div class="container-55">
        <div class="product-top-container d-flex">
            <div class="product-info w-70">
                <h1>{{ $product['title'] }}</h1>
                <div class="green-bar d-flex">
                    <div class="green-bar-left w-70 d-flex">
                        <p>U.S. Price <span>{{ $product['price'] }}</span></p>
                        <p>AVAILABLE</p>
                    </div>
                    <div class="green-bar-right w-30">
                        <p>Check Availability &#9660;</p>
                    </div>
                </div>
                <p class="product-info-description">
                    {{ $product['description'] }}
                </p>
            </div>
            <div class="sponsor w-30">
                <div class="adv-container">
                    <p>ADVERTISEMENT</p>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="product-bottom-container">

    </div>
@endsection

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
        <div class="container-55 d-flex">
            <div class="talent-box w-50">
                <h2>Talent</h2>
                <div class="talent-box-artby d-flex">
                    <p class="w-30">Art by:</p>
                    <p class="w-70 artists">
                        @foreach ($product['artists'] as $artist)
                            @if ($loop->last)
                            <span><a href="">{{ $artist }}</a></span>
                            @else 
                            <span><a href="">{{ $artist }}</a>,</span>
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="talent-box-writtenby d-flex">
                    <p class="w-30">Written by:</p>
                    <p class="w-70 artists">
                        @foreach ($product['writers'] as $writer)
                            @if ($loop->last)
                            <span><a href="">{{ $writer }}</a></span>
                            @else 
                            <span><a href="">{{ $writer }}</a>,</span>
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="specs-box w-50">
                <h2>Specs</h2>
                <div class="specs-box-series d-flex">
                    <p class="w-30">Series:</p>
                    <p class="w-70">
                            {{ $product['series'] }}
                    </p>
                </div>
                <div class="specs-box-price d-flex">
                    <p class="w-30">Price:</p>
                    <p class="w-70">
                            {{ $product['price'] }}
                    </p>
                </div>
                <div class="specs-box-sale d-flex">
                    <p class="w-30">On Sale Date:</p>
                    <p class="w-70">
                        {{ date_format(date_create($product['sale_date']),'M d Y') }}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection

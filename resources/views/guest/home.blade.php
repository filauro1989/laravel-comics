@extends('guest.layout.base')

@section('content')
<main>
    <div class="top d-flex">
        <div class="jumbotron">
            <div class="current-series">
                <p>current series</p>
            </div>
        </div>
        <div class="container-70">
            {{-- <Product v-for="(card, index) in cards" :key="index" :img="card.thumb" :alt="card.series" :titolo="card.series" /> --}}
            @foreach ($comics as $comics_item)
                <div class="card">
                    <div class="wrapper">
                        <div class="product">
                            <img
                                src="{{$comics_item['thumb']}}" 
                                alt="{{$comics_item['title']}}"
                            >
                        </div>
                        <h2>{{ $comics_item['title'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="load-wrap">
            <div class="load-more">
                <p>load more</p>
            </div>
        </div>
    </div>
    <div class="bottom d-flex">
        <div class="container-70 d-flex space-around">
            <div class="bottom-box d-flex">
                <div class="img-wrap">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="text-wrap">
                    <p>digital comics</p>
                </div>
            </div>
            <div class="bottom-box d-flex">
                <div class="img-wrap">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                </div>
                <div class="text-wrap">
                    <p>DC Merchandise</p>
                </div>
            </div>
            <div class="bottom-box d-flex">
                <div class="img-wrap">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div class="text-wrap">
                    <p>Subscription</p>
                </div>
            </div>
            <div class="bottom-box d-flex">
                <div class="img-wrap">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                </div>
                <div class="text-wrap">
                    <p>Comic Shop Locator</p>
                </div>
            </div>
            <div class="bottom-box d-flex">
                <div class="img-wrap">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                </div>
                <div class="text-wrap">
                    <p>Dc Power Visa</p>
                </div>
            </div>
            
        </div>
    </div>

</main>
@endsection
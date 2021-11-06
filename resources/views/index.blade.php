@extends('layouts.base')
@section('pageContent')
    <section class="container">
        <div class="current-series">
            Current Series
        </div>
        <div class="cards">
            @foreach ($comicsArray as $comics)
            <div class="card">
                <div class="card-img">
                <img src="{{$comics['thumb']}}" alt=" {{$comics['series']}}">
                </div>
                <h3>
                    {{$comics['series']}}
                </h3>
            </div>   
            @endforeach
        </div>
        
        <button>
            LOAD MORE
        </button>
    </section>
    <section class="merchandise">
        <div class="container">
            <nav>
                <ul>
                    <li>
                         <a class="link-merchandise" href="#">
                                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics">
                                <span>DIGITAL COMICS</span>
                            </a>
                     </li>
                     <li>
                        <a class="link-merchandise" href="#">
                               <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise">
                               <span>DC MERCHANDISE</span>
                           </a>
                    </li>
                    <li>
                        <a class="link-merchandise" href="#">
                               <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions">
                               <span>SUBSCRIPTION</span>
                           </a>
                    </li>
                    <li>
                        <a class="link-merchandise" href="#">
                               <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator">
                               <span>COMICS SHOP LOCATOR</span>
                           </a>
                    </li>
                    <li>
                        <a class="link-merchandise" href="#">
                               <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="buy-dc-power-visa">
                               <span>CD POWER VISA</span>
                           </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
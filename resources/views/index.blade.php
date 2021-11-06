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
@endsection
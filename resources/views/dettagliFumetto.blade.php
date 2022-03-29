@extends("layouts.base")

@section('pageTitle', $fumetto["title"]) 

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/dettagliFumetti.css')}}">
@endsection

@section('content')

    <div class="container_dettagli"> 
        <h1>{{$fumetto["title"]}}</h1>
        <p>{{$fumetto["description"]}}</p>
    </div>

    <div class="info">

        <div class="talent">
            <h3>Talent</h3>

            <div class="dettagli">
                <div>Art by: </div>
                <div>
                    @foreach ($fumetto["artists"] as $artist)
                        <a href="#">{{$artist}}</a>
                    @endforeach
                </div>
            </div>

            <div class="dettagli">
                <div>Written by: </div>
                <div>
                    @foreach ($fumetto["writers"] as $writer)
                        <a href="#">{{$writer}}</a>
                    @endforeach
                </div>
            </div>

        </div>
       <div class="specs">
            <h3>Specs</h3>

            <div class="dettagli">
                <div>Series: </div>
                <div class="series">
                    {{$fumetto["series"]}}
                </div>
            </div>

            <div class="dettagli">
                <div>U.S. Price: </div>
                <div>
                    {{$fumetto["price"]}}
                </div>
            </div>

            <div class="dettagli">
                <div>On Sales Date: </div>
                <div>
                    {{$fumetto["sale_date"]}}
                </div>
            </div>
            
        </div>
    </div>
@endsection
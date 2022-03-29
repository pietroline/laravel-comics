@extends("layouts.base")

@section('pageTitle', $fumetto["title"]) 

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/dettagliFumetti.css')}}">
@endsection

@section('content')

    <div class="container_dettagli"> 
        <a href="{{route('comics')}}">
            <i class="fa-solid fa-arrow-left"></i>
            <span>torna alla pagina precedente</span>
        </a>
        <h1>{{$fumetto["title"]}}</h1>
        <p>{{$fumetto["description"]}}</p>
    </div>

    <div class="info">

        <div class="talent">
            <h3>Talent</h3>

            <div class="dettagli">
                <div class="padding_right_1rem">Art by: </div>
                <div class="padding_right_1rem">
                    @foreach ($fumetto["artists"] as $artist)
                        <a href="#">{{$artist}}</a>
                    @endforeach
                </div>
            </div>

            <div class="dettagli">
                <div class="padding_right_1rem">Written by: </div>
                <div class="padding_right_1rem">
                    @foreach ($fumetto["writers"] as $writer)
                        <a href="#">{{$writer}}</a>
                    @endforeach
                </div>
            </div>

        </div>
       <div class="specs">
            <h3>Specs</h3>

            <div class="dettagli">
                <div class="padding_right_1rem">Series: </div>
                <div class="series padding_right_1rem">
                    {{$fumetto["series"]}}
                </div>
            </div>

            <div class="dettagli">
                <div class="padding_right_1rem">U.S. Price: </div>
                <div>
                    {{$fumetto["price"]}}
                </div>
            </div>

            <div class="dettagli">
                <div class="padding_right_1rem">On Sales Date: </div>
                <div>
                    {{$fumetto["sale_date"]}}
                </div>
            </div>
            
        </div>
    </div>
@endsection
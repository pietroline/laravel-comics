@extends("layouts.base")

@section('pageTitle')
    Comics    
@endsection

@section('content')

    <div>
        <section class="jumbotron"></section>
                 
        <div class="container">
            <span class="btn_blue_big">Current Series</span>

            @foreach ($fumetti as  $fumetto)
                <div class="card">

                    <div class="contenitoreImg">
            
                        <a href="#">
                            <img src="{{$fumetto['thumb']}}" alt="'img DC type ' + {{$fumetto['type']}}">
                        
                            <div class="price">
                                {{$fumetto['price']}} 
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a>
            
                    </div>
                    <h3>{{$fumetto['series']}}</h5>
            
                </div>
            @endforeach
            

            <a href="#" class="btn_blue">Load more</a>
        
        </div>
    </div>

@endsection
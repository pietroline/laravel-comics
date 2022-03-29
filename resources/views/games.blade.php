@extends("layouts.base")

@section('pageTitle')
    games    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/games.css')}}">
@endsection

@section('content')

   <div class="contenitore_games">
        <h1>Questa è il main di games</h1>
   </div>

@endsection
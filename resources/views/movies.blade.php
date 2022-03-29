@extends("layouts.base")

@section('pageTitle')
    movies    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/movies.css')}}">
@endsection

@section('content')

   <div class="contenitore_movies">
        <h1>Questa è il main di movies</h1>
   </div>

@endsection
@extends("layouts.base")

@section('pageTitle')
    characters    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/characters.css')}}">
@endsection

@section('content')

   <div class="contenitore_characters">
        <h1>Questa è il main di characters</h1>
   </div>

@endsection
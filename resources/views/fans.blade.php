@extends("layouts.base")

@section('pageTitle')
    fans    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/fans.css')}}">
@endsection

@section('content')

   <div class="contenitore_fans">
        <h1>Questa è il main di fans</h1>
   </div>

@endsection
@extends("layouts.base")

@section('pageTitle')
    collectibles    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/collectibles.css')}}">
@endsection

@section('content')

   <div class="contenitore_collectibles">
        <h1>Questa è il main di collectibles</h1>
   </div>

@endsection
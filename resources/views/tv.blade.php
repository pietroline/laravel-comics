@extends("layouts.base")

@section('pageTitle')
    tv    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/tv.css')}}">
@endsection

@section('content')

   <div class="contenitore_tv">
        <h1>Questa è il main di tv</h1>
   </div>

@endsection
@extends("layouts.base")

@section('pageTitle')
    news    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/news.css')}}">
@endsection

@section('content')

   <div class="contenitore_news">
        <h1>Questa è il main di news</h1>
   </div>

@endsection
@extends("layouts.base")

@section('pageTitle')
    videos    
@endsection

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/videos.css')}}">
@endsection

@section('content')

   <div class="contenitore_videos">
        <h1>Questa è il main di videos</h1>
   </div>

@endsection
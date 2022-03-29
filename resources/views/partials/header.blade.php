<header>
    <div class="headerUp">
        <ul>
            <li>
                <a href="#">
                    DC POWER&#8482; VISA&#174;
                </a>
            </li>
            <li>
                <a href="#">
                    ADDITIONAL DC SITES 
                    <i class="fa-solid fa-sort-down"></i>
                </a>
            </li>
        </ul>
    </div>
    
   <div class="spazioCentro">

        <a href="/" class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="Logo DC">
        </a>

        <nav>

            <ul>
                <li class="{{Request::route()->getName() == "characters" ? 'active':''}}">
                    <a href="{{route('characters')}}">Characters</a>
                </li>
                <li class="{{(Request::route()->getName() == "comics" || Request::route()->getName() == "fumetto" )? 'active':''}}">
                    <a href="{{route('comics')}}">Comics</a>
                </li>
                <li class="{{Request::route()->getName() == "movies" ? 'active':''}}">
                    <a href="{{route('movies')}}">Movies</a>
                </li>
                <li class="{{Request::route()->getName() == "tv" ? 'active':''}}">
                    <a href="{{route('tv')}}">Tv</a>
                </li>
                <li class="{{Request::route()->getName() == "games" ? 'active':''}}">
                    <a href="{{route('games')}}">Games</a>
                </li>
                <li class="{{Request::route()->getName() == "collectibles" ? 'active':''}}">
                    <a href="{{route('collectibles')}}">Collectibles</a>
                </li>
                <li class="{{Request::route()->getName() == "videos" ? 'active':''}}">
                    <a href="{{route('videos')}}">Videos</a>
                </li>
                <li class="{{Request::route()->getName() == "fans" ? 'active':''}}">
                    <a href="{{route('fans')}}">Fans</a>
                </li>
                <li class="{{Request::route()->getName() == "news" ? 'active':''}}">
                    <a href="{{route('news')}}">News</a>
                </li>
                <li class="{{Request::route()->getName() == "shop" ? 'active':''}}">
                    <a href="{{route('shop')}}">Shop</a>
                </li>
                <li>
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </li>
            </ul>
    
        </nav>

   </div>
</header>
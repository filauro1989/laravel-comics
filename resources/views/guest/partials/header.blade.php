<header>
    <div class="header-blue">
        <div class="header-blue-bar container-70">
            <div class="visa">DC POWER VISA&reg;</div>
            <div class="additional">ADDITIONAL DC SITES &#9660</div>
        </div>
    </div>
    <div class="header-nav container-70 text-center d-flex bg-green">
        <div class="logo-container w-20">
            <img src="{{ asset('img/dc-logo.png')}}" alt="">
        </div>
        <div class="header-nav-list">
            <ul>
                <li>
                    <a href="{{ route('characters') }}" class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}">CHARACTERS</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}" class="{{ ('comics' === Route::currentRouteName() || 'product' === Route::currentRouteName()) ? 'active' : '' }}">COMICS</a>
                </li>
                <li>
                    <a href="{{ route('movies') }}" class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}">MOVIES</a>
                </li>
                <li>
                    <a href="{{ route('tv') }}" class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}">TV</a>
                </li>
                <li>
                    <a href="{{ route('games') }}" class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}">GAMES</a>
                </li>
                <li>
                    <a href="{{ route('collectibles') }}" class="{{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="{{ route('videos') }}" class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}">VIDEOS</a>
                </li>
                <li>
                    <a href="{{ route('fans') }}" class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}">FANS</a>
                </li>
                <li>
                    <a href="{{ route('news') }}" class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}">NEWS</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}">SHOP</a>
                </li>
            </ul>
        </div>
        <div class="header-nav-search w-20">
            <div class="search-box d-flex">
                <p>Search</p>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            
        </div>
    </div> 
</header>

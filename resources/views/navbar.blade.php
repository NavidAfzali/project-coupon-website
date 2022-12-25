<nav class="navbar navbar-expand-lg p-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logohome" src="{{ asset('logo/Iran coupon-2.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Jome Bazaar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Cash back</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Stores
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Clothes</a></li>
                <li><a class="dropdown-item" href="#">Digitals</a></li>
                <li><a class="dropdown-item" href="#">Tools</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <form class="d-flex" role="search">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
        <input class="searchbox form-control me-2" type="search" placeholder="What do you need?" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
        </form>
        @guest
            <a class="btn nav" href="{{ route('login') }}">Login</a>
            <a class="btn nav" href="{{ route('register') }}">Register</a>
        @endguest

        @auth
            <a class="btn nav userhover" href="{{ route('dashboard') }}" style="background-color: purple;">{{ Auth::user()->name }}</a>
        @endauth
        
    </div>
    </nav>
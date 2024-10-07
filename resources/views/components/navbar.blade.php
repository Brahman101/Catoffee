<link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
<nav>
    <div class="nav-logo">
        <img src="{{ asset('images/Cattofee.png') }}" alt="Catofeee Logo">
    </div>
    <ul>
        <li>
            <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="/menu" class="{{ Request::is('menu') ? 'active' : '' }}">Menu</a>
        </li>
        <li>
            <a href="/cats" class="{{ Request::is('cats') ? 'active' : '' }}">The Cats</a>
        </li>
        <li>
            <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </li>
        <li>
            <a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a>
        </li>
    </ul>

    <div class="nav-actions">
        @guest
            <a href="/login" class="login-btn">Masuk</a>
            <a href="/register" class="register-btn">Daftar</a>
        @else
            <div class="left-icons">
                <i class="fa-solid fa-cart-shopping" href = "/history"></i>
            </div>
            @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endif
        @endguest
    </div>
</nav>

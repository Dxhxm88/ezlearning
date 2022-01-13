<nav class="navbar fixed-top navbar-dark shadow-5-strong">
    <div class="container">
        <a class="navbar-brand text-dark fw-bold" href="{{ route('index') }}">{{ config('app.name') }}</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="{{ route('register') }}">SIGN UP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="{{ route('login') }}">SIGN IN</a>
            </li>
        </ul>
    </div>
</nav>

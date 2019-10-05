<nav class="navbar navbar-expand-md navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto justify-content-center">
                <li class="nav-item {{ set_active_route('home_path') }}">
                    <a class="nav-link" href="{{ route('home_path') }}">Home</a>
                </li>
                <li class="nav-item {{ set_active_route('about_path') }}">
                    <a class="nav-link" href="{{ route('about_path') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                    <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                </div>
                </li>
                <li class="nav-item {{ set_active_route('contact_path') }}">
                    <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

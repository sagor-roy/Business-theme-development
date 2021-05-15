<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            @foreach($logo as $row)
                <img height="50px" src="{{ asset($row->img) }}" alt="img">
            @endforeach
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item {{ request()->is('price') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('price') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-4">
                <li class="nav-item">
                    <a class="navbar nav-item {{ Request::is('/') ? 'bg-primary rounded text-white' : '' }}"
                        aria-current="page" href="/" style="text-decoration: none; color: black">Home</a>
                </li>
                <li class="nav-item pl-3">
                    <a class=" navbar nav-item {{ Request::is('smart') ? 'bg-primary rounded text-white' : '' }}"
                        aria-current="page" href="/smart" style="text-decoration: none; color: black">About
                    </a>
                </li>
            </ul>



        </div>

        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-4">
                <li class="nav-item dropdown pr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                        Kategori Informasi
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($kategori as $kat)
                            <a class="dropdown-item " href="{{ $kat->slug }}">{{ $kat->nama_kategori }}</a>
                        @endforeach
                    </div>

                </li>
            </ul>
            <a href="/login"><button class="btn btn-info me-2 text-white auto" type="button">Login</button></a>
        </div>
    </div>
</nav>

<div class=" main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="primary">
        <a href="index.html" class="logo pl-3">
            <img src="{{ asset('img/smart.jpg') }} " alt="Image" class="avatar-img rounded-circle pl-1">
        </a>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
            {{-- <div class="collapse" id="search-nav">
                <marquee class="d-flex" width="825" height="50" style="font-size: 30px; color: white">Welcome Orang Dalam &#128513;</marquee>
            </div> --}}
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                < <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-undo"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

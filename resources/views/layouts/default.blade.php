<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>APLIKASI SMART SMAN 1 WONOAYU SIDOARJO</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('back/assets/img/icon.ico" type="image/x-icon') }}" />

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/fc583cca82.js" crossorigin="anonymous"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('back/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('back/assets/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/atlantis.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        @include('includes.header')

        @include('includes.sidebar')

        <div class="main-panel">
            <div class="content">

                @yield('content')

            </div>
            @include('includes.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    @include('includes.js')
    @include('sweetalert::alert')
</body>

</html>

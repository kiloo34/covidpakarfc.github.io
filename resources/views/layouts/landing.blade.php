<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Sistem Pakar</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

        @stack('css')
        @stack('styles')

    </head>

    <body class="layout-3">
        <div id="app">
            <div class="main-wrapper container">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <a href="#" class="navbar-brand sidebar-gone-hide">Sistem Pakar</a>
                    <div class="navbar-nav">
                        {{-- <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a> --}}
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('landing') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('info') }}" class="nav-link">Info</a></li>
                        <li class="nav-item"><a href="{{ route('diagnosa') }}" class="nav-link">Diagnosa</a></li>
                    </ul>
                    <form class="form-inline ml-auto">
                        
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item active"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    </ul>
                </nav>

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-body">
                            @yield('content')
                        </div>
                    </section>
                </div>
                @include('layouts.footer')
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="{{ asset('assets/js/stisla.js') }}"></script>

        <!-- JS Libraies -->

        <!-- Page Specific JS File -->

        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        @stack('js')
        @stack('scripts')

    </body>

</html>

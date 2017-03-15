<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <header>
            <nav class="mainNav">
                <ul class="container">
                    <li>
                        <a href="#">
                            <img src="images/home.svg">
                            <span>Hjem</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/plan.svg">
                            <span>Plan</span>
                        </a>
                    </li>
                    <li class="dropDownRight">
                        <a class="dropDownButton" @click="dropdown">
                            <span>
                                <img src="images/placeholder-200x200.jpg">
                            </span>
                            <span>
                                Christian
                            </span> 
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
 
                        </a>
                        <ul v-bind:class="{dropDown: true, 'show': isShow}">
                            <li>
                                <a href="#">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span>Min profil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                 <i class="fa fa-sign-out" aria-hidden="true"></i>
                                 <span>Logud</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
{{--     <nav class="projectNav">
        <ul>
            <li>
                <a href="" class="active">
                    Mærsk
                </a>
            </li>
            <li>
                <a href="">
                    Ikea
                </a>
            </li>
            <li>
                <a href="">
                    Mega langt projektnavn
                </a>
            </li>
        </ul>
    </nav> --}}
    <nav class="projectNav">
        <ul>
            <li><img src="images/InTraceLogo.png"></li>
            <li>
                <a href="#" class="active">
                    <span><img src="images/plan.svg"></span>
                    <span>Plan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><img src="images/home.svg"></span>
                    <span>Rapporter</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><img src="images/plan.svg"></span>
                    <span>Projekter</span>
                </a>
            </li>
        </ul>
    </nav>
        @yield('content')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{--
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"> --}} {{--
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>HackerPair</title>
</head>

<body>

    <div id="app">

        {{-- Header --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">HackerPair</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Events</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Content --}}
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>

        {{-- Footer --}}
        <div class="container">
            <footer class="text-right">HackerPair &copy; 2019</footer>
        </div>

    </div>

    {{--
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}} {{--
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>HackerPair</title>
</head>
<body>

    <div id="app">
        <v-app>
            <v-toolbar>
              <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
              <v-toolbar-title>
                <v-btn flat href="{{ route('home') }}">HackerPair</v-btn>
              </v-toolbar-title>
              <v-spacer></v-spacer>
              <v-toolbar-items class="hidden-sm-and-down">
                <v-btn flat href="{{ route('events.index') }}">Events</v-btn>
              </v-toolbar-items>
            </v-toolbar>

          <v-container>
              @yield('content')
          </v-container>

          <v-footer class="pa-3">
            <v-spacer></v-spacer>
            <div>HackerPair &copy; 2019</div>
          </v-footer>
        </v-app>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
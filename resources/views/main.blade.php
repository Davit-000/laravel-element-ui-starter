<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>Element UI</title>
</head>
<body>
    <main id="app">
        <main-component :auth="{{ (Auth::check())?1:0 }}"></main-component>
        {{-- <p class="text-center">{{ dd(Auth::id()) }}</p> --}}
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
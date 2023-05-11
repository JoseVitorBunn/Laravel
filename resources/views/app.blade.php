<!DOCTYPE html>
<html>
<head>
    <title>Meu Projeto Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('menu')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
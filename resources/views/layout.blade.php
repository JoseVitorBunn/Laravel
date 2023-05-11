<!DOCTYPE html>
<html>
<head>
    <title>Meu Projeto Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .menu {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }

        .menu li {
            display: inline-block;
            margin-right: 10px;
        }

        .menu a {
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
        }

        .menu a:hover {
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 36px;
            color: #333;
        }

        .jumbotron p {
            font-size: 18px;
            color: #555;
        }

        .page-bar {
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .page-bar h2 {
            color: #fff;
            margin: 0;
        }

        .page-content {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Página Inicial</a>
        <a class="navbar-brand" href="{{ route('contato') }}">Contato</a>
    </nav>

    <div class="container mt-4">
        <div class="page-bar">
            <h2>Minha Página Inicial</h2>
        </div>

        <div class="jumbotron">
            <h1 class="display-4">Bem-vindo ao Meu Projeto Laravel!</h1>
            <p class="lead">Um exemplo simples de projeto Laravel com página inicial e formulário de contato.</p>
        </div>

        <div class="page-content">
            @yield('content')
        </div>
    </div>
</body>
</html>

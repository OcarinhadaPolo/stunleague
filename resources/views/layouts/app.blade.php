<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <title>Stun League</title>
    <!-- Inclua os estilos -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="background-section">
    <!-- Cabeçalho -->
    

    <!-- Conteúdo da página -->
    <main>
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer>
        <!-- Seu rodapé aqui -->
    </footer>
</body>
</html>


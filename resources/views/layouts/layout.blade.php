<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav a { margin-right: 15px; }
    </style>
</head>
<body>
    <header>
        <h1>Meu Site</h1>
        <nav>
            <a href="/empresas">Empresas</a>
            <a href="/usuarios">Usuários</a>
            <a href="/publicacoes">Publicações</a>
            <a href="/comentarios">Comentários</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Meu site © 2025</p>
    </footer>
</body>
</html>

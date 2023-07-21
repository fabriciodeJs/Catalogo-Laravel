<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- CSS -->
         <link rel="stylesheet" href="/css/style.css">
        <!-- FONTS DO GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav id="navbar">
                <div id="image-container">
                    <a href="/">
                        <img src="/img/logo.png" alt="Logo">
                    </a>
                </div>
                <form action="/" method="get">
                    <input type="text" name="search" id="search" placeholder="Digite sua Busca">
                    <input type="submit" id="btn" value="Pesquisar">
                </form>
                <div id="nav-link-container">
                    <ul id="nav-link">
                        <li>
                            <a href="/login">Login</a>
                        </li>
                        <li>
                            <a href="/register">Registrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div id="msg-container">
                @if(session('msg'))
                    <P id="msg">{{ session('msg') }}</P>
                @endif
            </div>


            @yield('content')


        </main>

        <footer>
            <p>Catalogo &copy; 2023</p>
        </footer>
        <script src="https://kit.fontawesome.com/546ab0e97a.js" crossorigin="anonymous"></script>
    </body>
</html>

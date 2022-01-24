<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/CSS/style.css">
        <link rel="stylesheet" href="/CSS/@yield('css').css">
        <title> @yield('title')</title>

        
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"> Accueil</a></li>
                    <li><a href="/livres"> Liste </a></li>
                    <li><a href="/ajouterLivre">Ajouter </a></li>
                 </ul>
            <nav>
        </header>

        <main>
            @yield('content')
        </main>
        
    </body>
</html>

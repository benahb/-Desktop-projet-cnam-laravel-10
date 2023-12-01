<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('main.home') }}">accueil</a>
            </li>
            <li>
                <a href="{{ route('main.menu') }}">menu</a>
            </li>
        </ul>
    </header>
    @yield('content')
    <footer>
        <!-- todo -->
    </footer>
  
    
</body>
</html>
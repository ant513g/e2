<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='/css/style.css' rel='stylesheet'>
    @yield('head')

</head>
<body>

<header>
     <h1>
    <a href="/"> <img id='logo' src='/images/powerball-logo.png' alt='Powerball Logo'></a>
   {{-- {{ $app->config('app.name') }} --}}
   </h1>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/app.css">
    <script src="https://kit.fontawesome.com/f7e1fa5e2e.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="min-h-screen global-wallpaper">
    
    <header>
        @include('partials.header')
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer class="bg-footer">
        @include('partials.footer')
    </footer>
    
    <script src="https://kit.fontawesome.com/f7e1fa5e2e.js" crossorigin="anonymous"></script>
</body>
</html>
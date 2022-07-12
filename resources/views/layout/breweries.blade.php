<x-head>
    <x-slot:title>Cervecerías</x-slot:title>
</x-head>

<body>
    
    <!-- Nav Bar -->

    <x-nav-bar />
    
    <!-- Titulo -->

    <h2 class="text-center">@yield ('title')</h2>

    <!-- Contenido -->

    @yield ('content')
    
    @yield('message')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
<html>
    <head>
        <title>@yield('title') - EspecializaTi</title>
    </head>
    <body>
        <header>
            @section('sidebar')
                Sidebar
            @show
        </header>
 
        <section class="container">
            @yield('content')
        </section>
 
        <footer>
            Rodapé
        </footer>
    </body>
</html>
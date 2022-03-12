<html>

    <head>
        <title>App Name - Fashion Me</title>
    </head>

    <body>
        @section('sidebar')
            This is the master sidebar
        @show
        <div class="container">
            <nav>
                @include('menu.index')
            </nav>
            @yield('content')
        </div>
    </body>

</html>
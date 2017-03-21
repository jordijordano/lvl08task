<!DOCTYPE html>
<html lang="es-ca">
    <head>
        <meta charset="utf-8" />
        <title> 
            @yield('titlePage')
        </title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                @yield('header')
            </div>
           

              
            @yield('content')

            <footer class="footer">      
                @yield('footer')
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
        </div>
        
    </body>
</html>

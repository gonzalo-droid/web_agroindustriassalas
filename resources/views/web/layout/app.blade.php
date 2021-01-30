<!DOCTYPE html>
<html lang="es">
    <head>
      
        @include('web.layout.dependencies.metadata')

        @include('web.layout.dependencies.styles')

    </head>
    <body>
      
        @include('web.layout.components.navbar')

        @yield('web.content')
        
        @include('web.layout.components.footer')

    </body>

    @include('web.layout.dependencies.scripts')

</html>

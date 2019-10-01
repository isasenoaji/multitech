<!DOCTYPE html>
<html>
    <head>
        <title>Multitechic | Experience Enginee</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        @include('template.styles')
        @yield('additional-styles')
    </head>
    <body data-spy="scroll" data-target="#navbar-example">
        <div id="preloader"></div>
        
        @yield('main')
        @include('template.footer')
        @include('template.script')
        @yield('additional-script')
    </body>
</html>
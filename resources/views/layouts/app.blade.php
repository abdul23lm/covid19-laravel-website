<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @include('includes.style')
    @stack('style')


    <!-- Favicons -->
    <link href="{{ url('frontend/images/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
  </head>
  <body>

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')
    @stack('script')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div id="preloader"></div>

  </body>
</html>

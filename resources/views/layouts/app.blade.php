<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @include('includes.style')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>

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
    <script src="{{ asset('frontend/scripts/here.js') }}"></script>
    <script>
      window.hereApiKey = "{{ env('HERE_API_KEY') }}"
    </script>


    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div id="preloader"></div>

  </body>
</html>

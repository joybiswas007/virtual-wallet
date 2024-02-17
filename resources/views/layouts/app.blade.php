<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
        @yield('content')
        <div class="row mt-5">
            <div class="col-md-12 text-center">
              <footer>
                <p>&copy; {{date("Y")}} Joy Biswas. All rights reserved.</p>
              </footer>
            </div>
          </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

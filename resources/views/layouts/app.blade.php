<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>@yield('title', 'Boolean Careers')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <!-- HEADER -->
    @include('partials._header')

    @yield('content')
    <!-- PREFOOTER -->
    @include('partials._footer')
  </body>
</html>

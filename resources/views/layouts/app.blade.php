<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
  {{-- <link rel="icon" type="image/png" href="{{ asset('images/globe.gif') }}"> --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <title>@yield('title') | Companies</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  @include('layouts.styles')
</head>

<body class="{{ $class ?? '' }}">
  <div class="wrapper">
    @auth
      @include('layouts.page_template.auth')
    @endauth
    @guest
      @include('layouts.page_template.guest')
    @endguest
  </div>
  @include('layouts.scripts')
  @stack('js')
</body>

</html>

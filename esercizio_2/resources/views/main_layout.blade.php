<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="header">
      @include('header')
    </div>
    <div class="main">
      @yield('content')
    </div>
    <div class="footer">
      @include('footer')
    </div>
  </body>
</html>

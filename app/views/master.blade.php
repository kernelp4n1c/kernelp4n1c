<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nu11</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  @yield('styles', '')
</head>
<body>
  @yield('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts', '')
</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nu11</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  @yield('styles', '')
</head>
<body>
<div class="wrapper">
  @yield('content')
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts', '')
<i id="ghost"></i>
</body>
</html>

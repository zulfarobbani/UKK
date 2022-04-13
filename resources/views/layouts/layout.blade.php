<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <style>
      body{
    
    background-size: cover;
    background-image:url({{ asset('img/Group_4.png') }});
}
    </style>
    
    <title>Dashboard</title>
</head>
<body>
  @include('layouts.navbar')
  <div class="container" >
      @yield('content')
    </div>
   

      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      @stack('tambahan')
</body>
</html>
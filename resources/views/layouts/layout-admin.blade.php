<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/bootstrap.min.css.map') }}" rel="stylesheet"> --}}
    <link rel="stylesheet"  href="{{ asset('css/style-admin.css') }}">
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
  {{-- @include('layouts.sidebar') --}}
  <div class="container" >
      @yield('content')
    </div>
   

      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      @stack('tambahan')
</body>
</html>
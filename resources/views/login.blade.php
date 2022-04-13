<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/bootstrap.min.css.map') }}" rel="stylesheet"> --}}
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
  
    <div class="container-fluid" id="login" >    
        <div class="row">
            <div class="col-lg-7">
                
            </div>
            <div class="background-putih col-lg-5">
              @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
        </div>
    @endif
                <h1 class="h1-login text-center">Hotel Hebat</h1>
                <div class="card card-login">
                    
                    <div class="card-body">
                      <h3 class="card-title">Login</h3>
                      <form action="{{ route('masuk') }}" method="POST">
                        @csrf
                        <label for="Email">Email : </label>
                        <input class="form-control" type="email" name="email" placeholder="Masukan email" aria-label="default input example" required>
                        
                        <label for="Email">Password : </label>
                        <input class="form-control" type="password" name="password" placeholder="Masukan password" aria-label="default input example" required>
                        <br>
                        <button type="submit" class="btn btn-submit btn-primary">Login</button>
                      </form><br>
                      <span>Belum memiliki akun?<a href="{{ route('register') }}" class="">Buat akun sekarang!</a></span>
                    </div>
                  </div>  
            </div>   
        </div>    
    </div>
 
   

      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      @stack('tambahan')
</body>
</html>
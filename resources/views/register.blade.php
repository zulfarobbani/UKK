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
 
    <div class="container-fluid" id="login">    
        <div class="row">
            <div class="col-lg-7">
                
            </div>
            <div class="background-putih col-lg-5">
                <h1 class="h1-login text-center">Hotel Hebat</h1>
                <div class="card card-login">
                    
                    <div class="card-body">
                      <h3 class="card-title">Register</h3>
                      <form action="{{ route('buat-akun') }}" method="POST">
                        @csrf
                        <label for="name">Nama : </label>
                        <input class="form-control" type="text" placeholder="Masukan Nama"  name="nama" aria-label="default input example" required>
                        
                        <label for="Email">Username : </label>
                        <input class="form-control" type="text" placeholder="Masukan Username" name="username" aria-label="default input example" required>

                        <label for="Email">Email : </label>
                        <input class="form-control" type="email" placeholder="Masukan email" aria-label="default input example" name="email" required>
                        
                        <label for="Email">Password : </label>
                        <input class="form-control" type="password" placeholder="Masukan password"      
                        name="password" aria-label="default input example" required>
                        <br>
                        <div class="row">
                        <div class="col-sm-2 ">
                        <a class="btn btn-danger" href="{{ route('login') }}">Kembali</a>
                    </div>
                        
                            <div class="col-sm-2 ms-auto">
                            <button class="btn btn-submit btn-primary">Register</button>
                        </div>
                        </div>
                        <input value="3" name="role" hidden>
                      </form><br>
                      
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
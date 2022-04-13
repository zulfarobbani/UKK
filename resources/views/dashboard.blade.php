 <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
      {{-- <style>
        body{
      
      background-size: cover;
      background-image:url({{ asset('img/Group_4.png') }});
  }
      </style> --}}
      
      <title>Dashboard</title>
  </head>
  <body>
      @include('layouts.navbar')
      <div class="main" style="">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3   " aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/pegunungan.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Pegunungan</h5>
                      <p>Pemandangan pegunungan yang indah.</p>
                    </div>
                </div>
              
              <div class="carousel-item">
                <img src="{{ asset('img/danau.jpg') }}" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Danau</h5>
                  <p>Pemandangan danau yang memukau.</p>
                </div>
              </div>    
             
              
              <div class="carousel-item">
                <img src="{{ asset('img/sunset.jpg') }}" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Sore hari</h5>
                  <p>Temani sore hari dengan sunset yang memukau.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/playground.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Playground</h5>
                  <p>Santai  bermain dengan anak anda</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> 
          </div>
          <div class="row justify-content-center">
            <div class="col-12 text-center mt-2">
              <p>Butuh liburan?</p>
              <a href="{{ route('tamu.pesan') }}" class="btn btn-primary">Reservasi sekarang</a>
            </div>
            <div class="col-8 rounded mt-4 text-center flex-row">
              <h3>Tentang Kami</h3>
              <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan matahari terbenanm yang memukau. Kid'club yang luas - menawan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah</p>
            </div>
        </div>
      </div>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>
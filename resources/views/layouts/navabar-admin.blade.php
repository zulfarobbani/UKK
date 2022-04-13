<nav class="navbar navbar-expand-lg   fixed-top" style="background-color: #2D5A27;  ">
  
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Hotel Hebat</a>
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav " style="">
        
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.kamar') }}">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.fashot') }}">Fasilitas</a>
          </li>
          <li class="nav-item">
            @auth
            <form action="{{ logout }}" method="post">
            @csrf
            <button class="nav-link btn btn-danger" style="color: aliceblue">Logout</button>
            </form>
            @else
            <a class="nav-link btn btn-primary" href="{{ route('login') }}">masuk</a>
            
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>
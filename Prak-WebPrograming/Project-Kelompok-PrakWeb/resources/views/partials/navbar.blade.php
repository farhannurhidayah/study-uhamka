  <!-- Navbar Start -->
 
  <nav id="home" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
     <a class="navbar-brand fs-7 font-weight-bold " href="#">
        <img src="{{ asset('/img/logo/sofa.png') }}" alt="Logo" width="50" height="40" class="d-inline-block ">TokoFurniture.
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto h7">
          <li class="nav-item text-white">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tentang" >Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/belanja" >Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kontak" >Kontak</a>
          </li>  
       

        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
        <a href="/login" class="nav-link"><i class="bi bi-person-circle"> Acccount || {{session()->get('username')}}</i></a>
        </li> 
        @if (session()->get('status')=='user')
        <li class="nav-item">
                <a href="/logout" class="nav-link"><i class="bi bi-door-open-fill"> Keluar</i></a>
            </li> 
            @endif
        @if (session()->get('status')=='admin')
        <li class="nav-item">
                <a href="/logout" class="nav-link"><i class="bi bi-door-open-fill"> Keluar</i></a>
            </li> 
            @endif
          
       
      
          </ul>  
      </div>
    </div>
  </nav>

  <!-- Navbar End -->
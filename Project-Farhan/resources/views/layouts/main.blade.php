<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Furniture</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src=   "{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Owl CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('/img/logo/sofa.png') }}" type="image/x-icon">

  <!-- Icon Bostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    
</head>
<body id="home">
  <!-- Navbar Start -->
  <nav id="home" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid ">
     <a class="navbar-brand fs-5 " href="#">
        <img src="{{ asset('/img/logo/sofa.png') }}" alt="Logo" width="50" height="40" class="d-inline-block ">TokoFurniture.
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto h6">
          <li class="nav-item text-white">
            <a class="nav-link" aria-current="page" href="#home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#katalog">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>        
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-person-circle"> Login</i></a>
            </li>
        </ul>
      </div>
    </div>

  </nav>
  <!-- Navbar End -->
    <div class="container mt-4">
        @yield('container')
    </div>
</body>
</html>
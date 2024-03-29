<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Owl CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- JS File -->
  <script src="js/script.js"></script>

  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
  <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src=   "{{ asset('/js/jquery-3.6.0.min.js') }}"></script>


<title>Toko Furnitureasda sdas</title>
</head>
<body id="home">
  <!-- Navbar Start -->
  <!-- <nav id="home" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid ">
     <a class="navbar-brand " href="#">
        <img src="{{ asset('/img/logo/sofa.png') }}" alt="Logo" width="20" height="30" class="d-inline-block ">TokoFurniture.
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto h5">
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
      </div>
    </div>

  </nav> -->
  <!-- Navbar End -->

  <!-- Carousel Star -->
  <section name="carousel">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="img/carousel/furniture.jpg" class="d-block w-100 c-img" alt="Slide 1">
          <div class="carousel-caption top-0 mt-5 ">
            <p >Toko Furniture</p>
            <!-- class="mt-5 fs-6 text-uppercase" -->
            <h1>Temukan Furniture Impianmu Jadikan Rumah Idamanmu</h1>
            <!-- class="display-1 fw-bolder text-capitalizee" -->
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Mulai Belanja</button>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="img/carousel/furniture2.jpg" class="d-block w-100 c-img" alt="Slide 2">
          <div class="carousel-caption top-0 mt-5">
            <p class="mt-5 fs-5 text-uppercase">Toko Furniture</p>
            <h1 class="display-1 fw-bolder text-capitalizee">Temukan Furniture Impianmu Jadikan Rumah Idamanmu</h1>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Mulai Belanja</button>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="img/carousel/furniture3.jpg" class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-0 mt-5">
            <p class="mt-5 fs-5 text-uppercase">Toko Furniture</p>
            <h1 class="display-1 fw-bolder text-capitalizee">Temukan Furniture Impianmu Jadikan Rumah Idamanmu</h1>
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Mulai Belanja</button>
          </div>
      </div>
    </div>
  </section>
  <!-- Carousel End -->
  
  <!-- About Start -->
  <section id="About" class="About">
    <div class="container-fluid my-5">
    <h2><span>Tentang </span>Kami</h2>

    <div class="row mt-5">
      <div class="about-img">
        <img src="img/furniture4.jpg" alt="Furniture">
      </div>
      <div class="content">
        <h3>Toko Kami Sudah Berdiri Secara Turun Temurun</h3>
        <p>Toko ini telah berdiri sejak lama dan saat ini dipegang dan juga dijalankan di generasi kedua</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod amet unde libero nostrum corporis animi mollitia adipisci doloribus culpa! Aut libero accusantium quis quas tempore.</p>
      </div>
    </div>
  </div>
  </section>
  <!-- About End -->

  <!-- Katalog Start -->
  <section id="katalog" class="katalog">
  <div class="container-fluid my-5">
    <h2 class="display-3 text-center fw-bold my-4" ><span>Katalog</span> Kami</h2>
    <div class="row mt-5">
      <div class="owl-carousel owl-theme">
        <div class="item mb-4">
          <div class="card border-0 shadow">
            <div class="card-body">
              <img src="img/katalog/dapur1.jpg" alt="image" class="card-img-top">
              <hr/>
              <h4 class="text-center">carousel</h4>
            </div>
          </div>
        </div>
    
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/meja.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
   
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/mejatv1.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
   
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/dapur2.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
    
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/meja2.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
      
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/mejatv2.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/dapur3.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/meja3.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
      <div class="item mb-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="img/katalog/mejatv3.jpg" alt="image" class="card-img-top">
            <hr/>
            <h4 class="text-center">carousel</h4>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- Katalog End -->

<!-- Contact start -->
<div class="contact-area" id="kontak">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-title">
          <h2><span>Kontak</span> Kami</h2>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 col-sm 12 col-xs-12">
        <div class="contact-form">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Kamu Disini">
            </div> <br>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email Kamu Disini">
            </div> <br>
            <div class="form-group">
              <textarea class="form-control" cols="30" rows="10" placeholder="Masukkan Saran dan Kritik"></textarea>
            </div> <br>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="map-area">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.670650754528!2d106.87091607453227!3d-6.306929361721489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed581fd04607%3A0x98b000ec597ad204!2sFakultas%20Teknologi%20Industri%20dan%20Informatika%20Uhamka!5e0!3m2!1sid!2sid!4v1687967306427!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
   

</section>
<!-- <footer class="bg-dark py-5 mt-5">
  <div class="container text-light text-center ">
    <p class="display-5 mb-3"> Toko Furniture </p> 
   
      <a href=""> <img src="img/logo/ig.png" alt="" style="width: 30px; margin-right: 10px;" ></a>
      <a href=""> <img src="img/logo/facebook.png" alt="" style="width: 30px; margin-right: 10px;"> </a>
      <a href=""> <img src="img/logo/whatsapp.png" alt="" style="width: 30px;"> </a>
      <br> <hr>
      <small class="text-white-50">&copy; Copyright by GroupSix. All rights reserved.</small>
    
  </div>
</footer> -->

<!-- Script From JS -->
  <script src="css/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery-3.7.0.min.js"></script>

  <!-- Javascript cdn carousel owl -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
  
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

  </script>
</body>
</html>
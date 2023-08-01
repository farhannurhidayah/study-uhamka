<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"> </script>
    <script type="text/javascript" src="{{asset('/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

      <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('/img/logo/sofa.png') }}" type="image/x-icon">

<!-- Icon Bostrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Toko Furniture</title>
</head>



<body  >

@include('partials.navbar')


<section id="About" class="About">
    <div class="container-fluid my-5">
    <h2 data-aos="fade-up"><span>Kontak</span> Kami</h2>

    <div class="row mt-5">
      <div class="about-img" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <img src="img/katalog/meja5.jpg" alt="Furniture">
      </div>
      <div class="content mt-2" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="1000">
        <h3>Dapat Hubungi Kami</h3>
        
      <a href=""> <img src="img/logo/ig.png" alt="" style="width: 30px; margin-right: 10px;  margin-left: 10px; " > @TokoFurniture </a>
      <a href=""> <img src="img/logo/facebook.png" alt="" style="width: 30px; margin-right: 10px; margin-left: 10px;"> Toko Furniture </a>
      <a href=""> <img src="img/logo/whatsapp.png" alt="" style="width: 30px; margin-right: 10px; margin-left: 10px;"> +6285883650327 </a>
      <a href=""> <img src="img/logo/twitter.png" alt="" style="width: 30px; margin-right: 10px; margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"> @TokoFurniture </a>
        <p>Dengan adanya beberapa media ini pelanggan dapat berikan saran dan kritiknya</p>
        <p>Call Center 24 Jam Melalui Nomer berikut +6221936473832 hubungi bebas biaya Khusus Area Jabodetabek
        </p>
      </div>
    </div>
  </div>
  </section>
@include('partials.footer')

</body>
</html>
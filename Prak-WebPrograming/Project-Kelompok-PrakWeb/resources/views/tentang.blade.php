<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"> </script>
    <script type="text/javascript" src="{{asset('/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/css/card.css') }}"> -->

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
    <h2 data-aos="fade-up"><span>Tentang </span>Kami</h2>

    <div class="row mt-5">
      <div class="about-img" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <img src="img/furniture4.jpg" alt="Furniture">
      </div>
      <div class="content mt-2" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="1000">
        <h3>Toko Kami Sudah Berdiri Secara Turun Temurun</h3>
        <p>Toko ini telah berdiri sejak lama dan saat ini dipegang dan juga dijalankan di generasi kedua</p>
        <p>Awalnya bisnis ini berfokus kepada pemasangan kitchen set karna permintaan pelanggan yang banyak sehingga bisnis ini merambah keranah pembuatan furniture.
          Tentu keinginan besar owner ingin terus berkembang dan memberikan hasil yang terbaik dan kepuasaan tersendiri kepada pelanggan.
        </p>
      </div>
    </div>
  </div>
  </section>
@include('partials.footer')

</body>
</html>
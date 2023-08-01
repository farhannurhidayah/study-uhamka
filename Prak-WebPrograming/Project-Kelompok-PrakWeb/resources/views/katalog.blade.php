<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
c
    <!-- <link rel="stylesheet" href="{{ asset('/css/card.css') }}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Toko Furniture</title>
  <link rel="shortcut icon" href="{{ asset('/img/logo/sofa.png') }}" type="image/x-icon">
</head>
<body  >
  <!-- Navbar Start -->

  @include('partials.navbar')

  <!-- Navbar End -->

<div class="row mt-5 no-gutters">
    <div class="col-md-2 bg-light">
      <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item text-light bg-primary">Kategori Produk</li>
        <li class="list-group-item">Kitchen Set</li>
        <li class="list-group-item">Kursi</li>
        <li class="list-group-item">Set Tv</li>
        <li class="list-group-item">Set Up</li>
      </ul>
    </div>
    <div class="col-md-10">
    <section name="carousel">
    <div id="hero-carousel" class="carousel slide mt-4 shadow-lg p-1 mb-5 bg-body-tertiary rounded" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="img/carousel/furniture.jpg" class="d-block w-100 c-img" alt="Slide 1">
        </div>
        <div class="carousel-item c-item">
          <img src="img/carousel/furniture2.jpg" class="d-block w-100 c-img" alt="Slide 2">
        </div>
        <div class="carousel-item c-item">
          <img src="img/carousel/furniture3.jpg" class="d-block w-100 c-img" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </section>

    <h4 class="text-center font-weight-bold m-4">Produk Terbaru</h4>

    <div class="row mx-auto">
    <div class="card m-2 " style="width: 19rem;">
      <img src="img/carousel/furniture.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Meja Estetik</h5>
          <p class="card-text">Warna Yang lebih Menarik dengan bahan dasar jati</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 800.000</a>
    </div>
  </div>

  <div class="card m-2" style="width: 19rem;">
      <img src="img/katalog/dapur1.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Dapur Cantik</h5>
          <p class="card-text">Desain Dengan Tampilan yang Smooth</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 1.500.000</a>
    </div>
  </div>

  <div class="card m-2" style="width: 19rem;">
      <img src="img/katalog/meja.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Meja Jati</h5>
          <p class="card-text">Cocok Untuk Bersama Keluarga ketika berkumpul</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 2.000.000</a>
    </div>
  </div>

  <div class="card   m-2" style="width: 19rem;">
      <img src="img/katalog/mejatv1.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Meja TV</h5>
          <p class="card-text">Terdiri Banyak Varian Warna dengan kesan modern</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 999.000</a>
    </div>
  </div>
    </div>

    <!-- kedua -->
    <div class="row mx-auto mt-5">
    <div class="card m-2 " style="width: 19rem;">
      <img src="img/katalog/dapur2.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Dapur Mamah</h5>
          <p class="card-text">Dengan Harga ekonomis bagi pengantin baru dalam berkeluarga</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 1.000.000</a>
    </div>
  </div>

  <div class="card m-2" style="width: 19rem;">
      <img src="img/katalog/meja3.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Meja Spanyol</h5>
          <p class="card-text">Barang Impor yang didukung dengan kualitas anti rayap</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 8.000.000</a>
    </div>
  </div>

  <div class="card m-2" style="width: 19rem;">
      <img src="img/katalog/mejatv4.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Meja TV2</h5>
          <p class="card-text">Tanpa mengurangi Kesan tradisional dan elegan</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 2.500.000</a>
    </div>
  </div>

  <div class="card   m-2" style="width: 19rem;">
      <img src="img/katalog/dapur5.jpg" class="card-img-top mt-2" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title">Dapur Modern</h5>
          <p class="card-text">Memberikan kehangat didalam rumah tanpa menghilangkan kesan mewah</p>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
          <i class="bi bi-star text-warning"></i> <br>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
          <a href="#" class="btn btn-danger">Rp. 3.000.000</a>
    </div>
  </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
          <img src="img/carousel/furniture.jpg" class="card-img-top mt-2" alt="...">
          </div>
          <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

          </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
          <img src="img/carousel/furniture.jpg" class="card-img-top mt-2" alt="...">
          </div>
          <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

            <tr>
              <th>Nama Produk</th>
              <td>Deskripsi</td>
            </tr>

          </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    </div>
   </div>

   @include('partials.footer')

</body>
</html>
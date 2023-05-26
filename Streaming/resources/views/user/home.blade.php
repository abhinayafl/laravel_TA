<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Home Production</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">Home</span>Production</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#paket">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#order">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth

            <li class="nav-item">
                <a class="nav-link" style="background-color: #00D9A5; color : white; border-radius: 4px" href="{{url('pesanan')}}">Pesanan</a>
              </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif


          </ul>
        </div>
      </div> <!-- .container -->
    </nav>
  </header>

  <!-- .notifikasi pemesanan -->

  @if(session()->has('message'))

  <div class="alert alert-success">

      {{session()->get('message')}}

      <button type="button" class="close" data-dismiss="alert">
          X
      </button>

  </div>

  @endif

    <!-- .section caraousel -->

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/camera1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your party awesome</span>
        <h1 class="display-4">Live streaming</h1>
        <a href="#" class="btn btn-primary">Let's Order</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> dengan admin </p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Jasa</span> Sangat Terpercaya</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Banyak</span> Pilihan Paket</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- .section about us -->

    <div id="about" class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Home Production <br> Sidoarjo</h1>
            <p class="text-grey mb-4">Home production menyediakan berbagai macam jasa dokumenter kegiatan acara seperti Wedding, Wisuda,
                Pengajian dan berbagai macam lainnya. Jasa yang ditawarkan oleh Home production memiliki banyak pilihan seperti
                live streaming acara, video cinematic, foto dokumentasi dan dan berbagai tools kebutuhan acara. Jasa ini memiliki berbagai
                spesifikasi tools sesuai request dari customer dan untuk harga lebih variatif. Home production memiliki
                banyak paket promo cek paket kami untuk melihat semua detailnya.
            </p>
            <a href="#paket" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/cameramen.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


<!-- .section paket -->
@include('user.paket')

<!-- .section order -->
@include('user.order')



    <!-- .section footer -->

  <footer id="contact" class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#about">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Live-Streaming</a></li>
            <li><a href="#">Video-Cinematic</a></li>
            <li><a href="#">Lighting</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2"><a href="https://maps.app.goo.gl/2eU4QkxM8Atoh2Vo8" >Ds.Panggeh, Kec.Jabon, Sidoarjo</a></p>
          <a href="https://wa.me/089531704945?text=Halo, Home Production" class="footer-link">+0895-3170-4945</a>
          <a href="mailto:homeproduction.sidoarjo@gmail.com" class="footer-link">homeproduction.sidoarjo@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="https://instagram.com/homeproduction.sidoarjo?igshid=MzRlODBiNWFlZA==" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href="https://github.com/abhinayafl" target="_blank">Kaftapus</a>. All right reserved</p>
    </div>
  </footer>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>

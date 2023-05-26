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
              <a class="nav-link" href="{{url('home#about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home#paket')}}">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home#order')}}">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home#contact')}}">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth

            <li class="nav-item">
                <a class="nav-link" style="background-color: #00D9A5; color : white;
                border-radius: 4px" href="{{url('pesanan')}}">Pesanan</a>
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
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div align="center" style="padding: 70px">

    <table>

        <tr style="background-color: #00D9A5 ">
            <th style="padding:10px; color:white">Nama</th>
            <th style="padding:10px; color:white">Jenis Paket</th>
            <th style="padding:10px; color:white">Tanggal</th>
            <th style="padding:10px; color:white">Deskripsi/Alamat</th>
            <th style="padding:10px; color:white">Status</th>
            <th style="padding:10px; color:white">Batalkan Pesanan</th>
        </tr>

        @foreach ($order as $orders)

        <tr style="background-color: #ededed">
            <td style="padding:10px">{{$orders->name}}</td>
            <td style="padding:10px">{{$orders->paket}}</td>
            <td style="padding:10px">{{$orders->date}}</td>
            <td style="padding:10px">{{$orders->message}}</td>
            <td style="padding:10px">{{$orders->status}}</td>

            <td align="center"><a class="btn btn-danger" onclick="return confirm('Apakah ingin membatalkan pesanan ini')" href="{{url('batalkan_pesanan', $orders->id)}}"
                style="border-radius: 4px; font-size: 14px; padding: 5px 14px">Batalkan</a></td>
        </tr>

        @endforeach



    </table>

  </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>

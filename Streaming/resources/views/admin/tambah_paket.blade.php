
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- jarak text=label -->

    <style type="text/css">

        label
        {
            display: inline-block;

            width: 200px;
        }
    </style>

    <!-- Required meta tags -->

        @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->

        @include('admin.navbar')

            <!-- pesan tambah paket -->

            <div class="container-fluid page-body-wrapper">

                <div class="container" align="center" style="padding-top:100px">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    {{session()->get('message')}}

                    <button type="button" class="close" data-dismiss="alert">
                        X
                    </button>


                </div>

                @endif




            <!-- end pesan -->

            <!-- upload paket ke database -->

        <form action="{{url('upload_paket')}}" method="POST" enctype="multipart/form-data">

            @csrf

        <div style="padding: 15px;">

            <label>Nama Paket</label>
            <input type="text" style="color:black"; name="name" placeholder="Masukkan Jenis Paket">

        </div>

        <div style="padding: 15px;">

            <label>Harga</label>
            <input type="number" style="color:black"; name="harga" placeholder="Masukkan Jumlah Harga">

        </div>

        <div style="padding: 15px;">

            <label>Jenis Paket</label>

             <select name="jenis" style="color: black; width: 210px" >
                <option>--Pilih--</option>
                <option value="Live Streaming">Live Streaming</option>
                <option value="Video Cinematic">Video Cinematic</option>
                <option value="Foti Dokumentasi">Foto Dokumentasi</option>
                <option value="Lighting">Lighting</option>
                <option value="Lainnya">Lainnya</option>

             </select>

        </div>

        <div style="padding: 15px;">

            <label>Deskripsi</label>
            <input type="text" style="color:black"; name="deskripsi" placeholder="Masukkan Deskripsi">

        </div>

        <div style="padding: 25px;">

            <label>Gambar</label>

            <input type="file" name="file">

        </div>
        <div style="">


            <input style="background-color: #00D9A5" type="submit" class="btn btn-succsess">

        </div>

        </form>

        <!-- end upload -->

        </div>

    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

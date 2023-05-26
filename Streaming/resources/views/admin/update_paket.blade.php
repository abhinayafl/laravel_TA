<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">

        label
        {
            display: inline-block;

            width: 200px;
        }
    </style>

        @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- sidebar section -->
        @include('admin.sidebar')

      <!-- navbar section -->
        @include('admin.navbar')

        <!-- update section -->

        <div class="container-fluid page-body-wrapper">

           <div class="container" align="center" style="padding: 70px">


            @if(session()->has('message'))

            <div class="alert alert-success">

                {{session()->get('message')}}

                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>

            </div>

            @endif


            <form action="{{url('editpaket', $data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px">
                    <label>Nama Paket</label>
                    <input type="text" style="color: black" name="name" value="{{$data->name}}">
                </div>

                <div style="padding: 15px">
                    <label>Harga</label>
                    <input type="number" style="color: black" name="harga" value="{{$data->harga}}">
                </div>

                <div style="padding: 15px">
                    <label>Jenis</label>
                    <input type="text" style="color: black" name="jenis" value="{{$data->jenis}}">
                </div>

                <div style="padding: 15px">
                    <label>Deskripsi</label>
                    <input type="text" style="color: black" name="deskripsi" value="{{$data->deskripsi}}">
                </div>

                <div style="padding: 15px">
                    <label>Gambar paket</label>
                    <img height="150" width="150" src="paketimage/{{$data->image}}">
                </div>

                <div style="padding: 15px">
                    <label>Ganti Gambar</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">
                    <input type="submit" class="btn btn-primary">
                </div>



            </form>
            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

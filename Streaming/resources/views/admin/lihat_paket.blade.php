
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

        @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div align="center" style="padding-top: 70px">

                <table>
                    <tr align="center" style="background-color: #00D9A5">
                        <th style="padding: 10px">Nama Paket</th>
                        <th style="padding: 10px">Harga</th>
                        <th style="padding: 10px">Jenis Paket</th>
                        <th style="padding: 10px">Deskripsi</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">Delete</th>
                        <th style="padding: 10px">Update</th>
                    </tr>

                    @foreach ($data as $paket)

                    <tr align="center" style="background-color: #ededed">
                        <td style="padding:10px; color:black">{{$paket->name}}</td>
                        <td style="padding:10px; color:black">{{$paket->harga}}</td>
                        <td style="padding:10px; color:black">{{$paket->jenis}}</td>
                        <td style="padding:10px; color:black">{{$paket->deskripsi}}</td>
                        <td style="padding:10px;"><img height="100" width="100" src="paketimage/{{$paket->image}}"></td>

                        <td style="padding: 10px">
                            <a onclick="return confirm ('Apakah ingin menghapus paket ini')" style="font-size: 12px"
                            class="btn btn-danger" href="{{url('deletepaket', $paket->id)}}">Delete</a>
                        </td>

                        <td style="padding: 10px">
                            <a style="font-size: 12px" class="btn btn-primary" href="{{url('update_paket', $paket->id)}}">Update</a>
                        </td>
                    </tr>

                    @endforeach

                </table>

            </div>

        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

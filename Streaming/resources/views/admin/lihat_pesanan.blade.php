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

        <div class="container-fluid page-body-wrapper">


            <div align="center" style="padding-top: 70px">

                <table>
                    <tr align="center" style="background-color: #00D9A5">
                        <th style="padding: 10px">Nama Pemesan</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Nomor Hp</th>
                        <th style="padding: 10px">Jenis Paket</th>
                        <th style="padding: 10px">Tanggal</th>
                        <th style="padding: 10px">Alamat</th>
                        <th style="padding: 10px">Status</th>
                        <th style="padding: 10px">Menyetujui</th>
                        <th style="padding: 10px">Batalkan</th>
                    </tr>

                    @foreach ($data as $order)



                    <tr align="center" style="background-color: #ededed">
                        <td style="padding:10px; color:black">{{$order->name}}</td>
                        <td style="padding:10px; color:black">{{$order->email}}</td>
                        <td style="padding:10px; color:black">{{$order->phone}}</td>
                        <td style="padding:10px; color:black">{{$order->paket}}</td>
                        <td style="padding:10px; color:black">{{$order->date}}</td>
                        <td style="padding:10px; color:black">{{$order->message}}</td>
                        <td style="padding:10px; color:black">{{$order->status}}</td>

                        <td>
                            <a class="btn btn-success" href="{{url('setuju', $order->id)}}">Setuju</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" href="{{url('batal', $order->id)}}">Batal</a>
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

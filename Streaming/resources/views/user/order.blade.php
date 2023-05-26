<div id="order" class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Buat Pesanan</h1>

      <form class="main-form" action="{{url('order')}}" method="POST">

        @csrf <!-- .untuk upload data -->

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Nama Pemesan">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="paket" id="departement" class="custom-select">

                <option>Pilih Paket</option>

                @foreach ($paket as $pakets)

              <option value="{{$pakets->name}}">{{$pakets->jenis}} --Paket-- {{$pakets->name}}</option>

                @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Nomor Hp..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Alamat.."></textarea>
          </div>
        </div>

        <button style="background-color: #00D9A5" type="submit" class="btn btn-primary mt-3 wow zoomIn ">Buat Pesanan</button>
      </form>
    </div>
  </div> <!-- .page-section -->

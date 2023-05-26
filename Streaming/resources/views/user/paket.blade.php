<div id="paket" class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Kategori</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($paket as $pakets)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="paketimage/{{$pakets->image}}" alt="">
              <div align="center" class="meta">
                <a href="https://wa.me/089531704945?text=Home Production, Tanya mengenahi paket?"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-1">{{$pakets->name}}</p>
              <p class="text-s mb-1"><b>Rp {{$pakets->harga}}</b></p>
              <p style="font-size: 12px" class="text-s mb-0">{{$pakets->deskripsi}}</p>
              <span class="text-sm text-grey">{{$pakets->jenis}}</span>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>

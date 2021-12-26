<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="{{url('css/style.css')}}">
      <link rel="stylesheet" href="{{url('css/style-geografis.css')}}">
      <link rel="shortcut icon" href="{{url('img/logo_small.png')}}" type="image/x-icon">
      <title>Letak Geografis</title>
   </head>
   <body>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
      <!-- keterangan -->
      <section class="container-fluid row p-5 m-0">
         <h1 class="p-0 fw-bold mb-3">Letak Geografis</h1>
         <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/profile">Profil Kecamatan</a> > </span><span class="text-danger fw-bold">Letak Geografis</span></p>
            <img class="img-fluid mb-4" src="{{url('img/geografis.png')}}" alt="image deskripsi">
            <h3 class="p-0 fw-bold mb-2">Letak Geografis dan Keadaan Umum</h3>
            <div class="text-wrap">
               <ol>
                  <li>
                     Batas Wilayah
                     <ul>
                        <li>
                           Utara: Kabupaten Nunukan
                        </li>
                        <li>
                           Selatan: Pulau Bunyu, Kabupaten Bulungan
                        </li>
                        <li>
                           Barat: Kecamatan Sembakung, Kabupaten Nunukan
                        </li>
                        <li>
                           Timur: Laut Sulawesi
                        </li>
                     </ul>
                  </li>
                  <li>Ketinggian dari Permukaan laut : 3,5 M</li>
                  <li>Kecepatan Angin : </li>
                  <li>Luas Kecamatan &nbsp;: 76.790,09 Ha</li>
                  <li>Curah Hujan &emsp; &ensp;&ensp;: H 4,5   	MM  1.620</li>
                  <li>Suhu Udara  &emsp; &ensp;&nbsp; &nbsp;: Max 32 0C 	Min 27 0</li>
               </ol>
            </div>
            <h3 class="p-0 fw-bold mb-2 mt-3">Letak Geografis dan Keadaan Umum</h3>
            <div class="text-wrap">
              <p>
                <span class="fw-bold">Tanah Merah</span><br>
                Kode Desa : 64.10.03.01	dengan luas wilayah 204,40 (Km²). Di sebelah Utara adalah Sungai Sembakung, Kabupaten Nunukan. Selatan Kecamatan Sesayap, Kabupaten Tana Tidung dan Juata Laut, Kota Tarakan. Barat Sungai Sembakung, Kabupaten Nunukan. Timur Desa Sambungan, Kabupaten Tana Tidung.
              </p>
              <p>
                <span class="fw-bold">Tengku Dacing</span><br>
                Kode Desa : 64.10.03.02 dengan luas wilayah	259,44 (Km²). Di sebelah Utara Sungai Sembakung, Kabupaten Nunukan. Selatan Desa Sambungan, Kabupaten Tana Tidung. Barat	Desa Tanah Merah, Kabupaten Tana Tidung. Timur	Laut Bunyu, Kabupaten Bulungan.
              </p>
              <p>
                <span class="fw-bold">Sambungan</span><br>
                Kode Desa : 64.10.03.03 dengan luas wilayah 234,82 (Km²). Di sebelah 	Utara Desa Tengku Dacing, Kabupaten Tana Tidung. Selatan Juata Laut, Kota Tarakan. Barat	Desa Tanah Merah, Kabupaten Tana Tidung. Timur Laut Bunyu, Kabupaten Bulungan.
              </p>
              <p>
                <span class="fw-bold">Tanah Merah Darat</span><br>
                Kode Desa : 64.10.03.04 dengan luas wilayah 62,18 (Km²). Utara Desa Tengku Dacing. Selatan Desa Badan Bikis. Barat Sungai Sembakung. Timur Desa Tanah Merah.
              </p>
              <p>
                <span class="fw-bold">Sambungan Selatan</span><br>
                Kode Desa : 64.10.03.05 dengan luas wilayah 70,66 (Km²). Di sebelahUtara Desa Sambungan, Kabupaten Tana Tidung. Selatan Desa Sambungan, Kabupaten Tana Tidung. Barat Desa Sambungan, Kabupaten Tana Tidung. Timur	Desa Sambungan, Kabupaten Tana Tidung.
              </p>
              <p>Sehingga Total Luasnya adalah <span class="fw-bold">831,50 (Km²)</span></p>
            </div>
         </div>
         <div class="col d-flex flex-column side-content">
            <h4 class="fw-bolder mb-3">Terbaru</h4>
            <div class="d-flex flex-column flex-md-row flex-xl-column gap-4">
               <div class="card pad-40">
                  <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid ">
                  <div class="card-body px-0 pb-0">
                     <h5 class="card-title fw-bold">Judul Berita</h5>
                     <p class="card-title mb-2 text-muted">01 November 2021</p>
                  </div>
               </div>
               <div class="card pad-40">
                  <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid">
                  <div class="card-body px-0 pb-0">
                     <h5 class="card-title fw-bold">Judul Berita</h5>
                     <p class="card-title mb-2 text-muted">01 November 2021</p>
                  </div>
               </div>
               <div class="card pad-40">
                  <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid">
                  <div class="card-body px-0 pb-0">
                     <h5 class="card-title fw-bold">Judul Berita</h5>
                     <p class="card-title mb-2 text-muted">01 November 2021</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- akhir keterangan -->
      <!-- footer -->
      @include('footer')
      <!-- akhir footer -->
   </body>
</html>
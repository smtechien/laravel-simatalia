<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="shortcut icon" href="{{url('img/logo_small.png')}}" type="image/x-icon">
    <title>Deskripsi</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Deskripsi</h1>
        <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/profile">Profil Kecamatan</a> > </span><span class="text-danger fw-bold">Deskripsi</span></p>
            <img class="img-fluid mb-4" src="{{url('img/image-deskripsi.png')}}" alt="image deskripsi">
            <div class="text-wrap">
                <p>Kecamatan Tana Lia sebagai salah satu kecamatan di Kabupaten Tana Tidung, mempunyai luas 76.790,09 ha. Berbatasan sebelah Utara dengan Kabupaten Nunukan, Selatan berbatasan dengan Pulau Bunyu, Barat berbatasan dengan Kecamatan Sembakung dan Timur berbatasan dengan Laut Sulawesi.</p>
                <p>Kecamatan Tana Lia terdiri dari 5 desa dengan desa terluasnya adalah Desa Tengku Dacing dengan luas 25.943,97 ha, sedangkan desa dengan luas terkecil adalah Desa Sambungan Selatan yang luasnya hanya 706,64 ha.</p>
                <p>Pembentukan Kecamatan Tana Lia sesuai Peraturan Daerah Kabupaten Bulungan Nomor 13 Tahun 2002 tentang pembentukan Kecamatan Tanjung Palas Barat, Tanjung Palas Utara, Tanjung Palas Timur, Tanjung Selor, Tanjung Palas Tengah, Sesayap Hilir, Tana Lia dan Kecamatan Peso Hillir dalam wilayah Kabupaten Bulungan yang ditetapkan pada tanggal 15 Agustus 2002. </p>
                <p>Tetapi dengan Undang-undang Nomor 34 Tahun 2007 tentang pembentukan Kabupaten Tana Tidung, maka Kecamatan Sesayap Hilir dan Tana Lia termasuk dalam wilayah Kabupaten Tana Tidung. Hingga kini di wilayah Kecamatan Tana Lia terdapat 5 (lima) desa, yaitu : Desa Tanah Merah, Tengku Dacing, Sambungan, Tanah Merah Barat dan Sambungan Selatan.</p>
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
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>
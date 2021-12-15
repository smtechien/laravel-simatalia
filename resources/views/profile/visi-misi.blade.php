<!DOCTYPE html>
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
    <link rel="shortcut icon" href="{{url('img/logo_small.png')}}" type="image/x-icon">
    <title>Visi Misi</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Visi Misi</h1>
        <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary">Si Mata Lia > Profil Kecamatan ></span> <span
                    class="text-danger fw-bold">Visi Misi</span></p>
        <hr>
            <div>
                <div>
                    <h4 class="fw-bold">Visi</h4>
                    <div class="text-center mb-3">
                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus vestibulum, augue eu pretium, sit eget imperdiet adipiscing. Euismod egestas at sed lorem quis mi. Et ut lorem quis proin.”
                    </div>
                </div>
                <div>
                    <h4 class="fw-bold">Misi</h4>
                    <div class="text-justify">
                        <ol class="d-block p-0 m-0 ms-4">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus vestibulum, augue eu pretium, sit eget imperdiet adipiscing</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus vestibulum, augue eu pretium, sit eget imperdiet adipiscing</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus vestibulum, augue eu pretium, sit eget imperdiet adipiscing</li>
                        </ol>
                    </div>
                </div>
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
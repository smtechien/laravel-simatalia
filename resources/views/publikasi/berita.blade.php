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
    <title>Berita</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Berita</h1>
        <div class="col-12 p-0">
            <p class="url pb-3"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/publikasi">Publikasi</a> > <span class="text-danger fw-bold">Berita</span>
            </p>
            <div class="d-flex gap-4 flex-wrap justify-content-around">
            @for ($i = 0; $i < 9; $i++)
                <a href="/publikasi/berita/judul-berita" class="text-decoration-none">
                    <div class="card pad-40">  
                        <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid ">
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title fw-bold text-decoration-none text-dark">Judul Berita</h5>
                            <p class="card-title mb-2 text-muted">01 November 2021</p>
                            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, sed.</p>
                            <p class="text-danger fw-bold">Lihat Selengkapnya</p>
                        </div>
                    </div>
                </a>
            @endfor
            </div>
        </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>
</html>
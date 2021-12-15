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
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link rel="shortcut icon" href="{{url('img/logo_small.png')}}"  type="image/x-icon">
    <title>Foto</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    </>
    <!-- jumbotron -->
    <section class="container-fluid row px-5 pt-5 pb-3 m-0">
        <h1 class="p-0 fw-bold mb-3">Foto</h1>
        <div class="col-12 p-0">
            <p class="url"><span class="text-secondary">Si Mata Lia > Publikasi ></span> <span
                    class="text-danger fw-bold">Foto</span>
            </p>
        </div>
    </section>
    <!-- start galeri -->
    <section class="container-fluid px-0 d-flex flex-column">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('img/dgallery-1.jpg')}}"  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-3.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-4.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-5.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-6.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-7.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/dgallery-8.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="gallery d-flex flex-row flex-wrap container-fluid p-5 gap-3 justify-content-center">
            <img src="{{url('img/dgallery-1.jpg')}}" class="img-fluid img-gallery gallery-active" alt="">
            <img src="{{url('img/dgallery-2.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-3.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-4.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-5.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-6.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-7.jpg')}}" class="img-fluid img-gallery" alt="">
            <img src="{{url('img/dgallery-8.jpg')}}" class="img-fluid img-gallery" alt="">
        </div>
    </section>
    <!-- end galeri -->
    <!-- akhir jumbotron -->
    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>
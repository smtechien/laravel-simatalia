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
            <p class="url"><span class="text-secondary">Si Mata Lia > Profil Kecamatan ></span> <span
                    class="text-danger fw-bold">Deskripsi</span></p>
            <img class="img-fluid mb-4" src="{{url('img/image-deskripsi.png')}}" alt="image deskripsi">
            <div class="text-wrap">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac feugiat morbi a, velit mauris. Aliquet id
                    diam ultricies in. Tristique ornare imperdiet volutpat arcu etiam. Adipiscing tempus, dui parturient
                    enim porta elementum elementum. Morbi nunc sagittis egestas faucibus sit cras. Faucibus massa amet
                    risus dignissim arcu facilisis ultrices ullamcorper pellentesque. Sodales quam cursus malesuada eros
                    hendrerit ornare id. Potenti amet aenean id interdum porta sit purus vitae. Sit amet faucibus
                    volutpat commodo, vivamus mattis blandit.</p>
                <p>Fermentum pellentesque tortor, sed tempor id diam arcu ut. Viverra et morbi eget proin ultrices
                    nullam ut. Ut interdum neque placerat ut vitae dapibus fusce mauris etiam. Lacus, eget a leo,
                    pretium, et sit congue. Nisl non et amet fermentum. Praesent sed neque, enim, venenatis suspendisse
                    scelerisque lorem habitant. Accumsan, enim massa pharetra, facilisi ac aliquam. Vestibulum in ut
                    ipsum in pharetra duis. Turpis fusce sed nunc, sit morbi etiam donec. Posuere platea gravida turpis
                    sed phasellus blandit diam sagittis blandit. Elementum diam duis massa sit lorem ut. Semper
                    suspendisse lectus ipsum a ultricies sapien. Tellus enim porta tortor eget.</p>
                <p>Fermentum pellentesque tortor, sed tempor id diam arcu ut. Viverra et morbi eget proin ultrices
                    nullam ut. Ut interdum neque placerat ut vitae dapibus fusce mauris etiam. Lacus, eget a leo,
                    pretium, et sit congue. Nisl non et amet fermentum. Praesent sed neque, enim, venenatis suspendisse
                    scelerisque lorem habitant. Accumsan, enim massa pharetra, facilisi ac aliquam. Vestibulum in ut
                    ipsum in pharetra duis. Turpis fusce sed nunc, sit morbi etiam donec. Posuere platea gravida turpis
                    sed phasellus blandit diam sagittis blandit. </p>
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
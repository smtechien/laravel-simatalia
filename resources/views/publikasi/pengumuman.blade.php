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
    <title>Pengumuman</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    </>
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Pengumuman</h1>
        <div class="col-12 p-0">
            <p class="url pb-3"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/publikasi">Publikasi</a> > </span><span class="text-danger fw-bold">Pengumuman</span>
            </p>

            <div class="d-flex flex-row alert-primary gap-3 p-5">
                <div class="material-icons fs-2">info</div>
                <div class="">
                    <div class="title">
                        <h6>Pengumuman Jam Layanan</h6>
                        <p>Senin, 1 Januari 2021</p>
                    </div>
                    <div class="body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id consequat faucibus nisl. Sed
                        nibh vulputate commodo mi. Ante quam sapien urna commodo etiam. Ut ultricies diam aliquam, sed
                        ut a sit donec. Turpis ultricies urna, malesuada leo. Cursus viverra est lorem tempus tempor,
                        dolor aliquet nisl viverra. Metus non lectus consectetur non eu fames. Feugiat sed id integer
                        vel eleifend pretium. Pharetra nisi, aenean blandit dictum in.<br>
                        Id id quis ac, nunc in elit id at. Gravida ullamcorper odio sit faucibus fermentum tempus varius
                        est. Sed praesent sollicitudin vulputate arcu gravida nunc. Sollicitudin nibh fermentum lorem
                        nullam. Velit tortor etiam platea ultricies mi suspendisse. Elementum feugiat eu metus neque
                        congue non, facilisi enim. Convallis mauris eu morbi ipsum. Felis.
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
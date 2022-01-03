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
    <title>Pengurus Adat</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Pengurus Adat</h1>
        <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/pemerintahan">Pemerintahan</a> > </span><span class="text-danger fw-bold">Pengurus Adat</span></p>
            <hr>
            <h4 class="fw-bold mt-4 mb-3">Tanah Merah</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-6">Ketua</td>
                            <td class="col-6">Sahrin B</td>
                        </tr>
                        <tr>
                            <td>Wakil Ketua</td>
                            <td>Abdurahman</td>
                        </tr>
                        <tr>
                            <td>Sekretaris</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Anggota</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="fw-bold mt-4 mb-3">Sambungan</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-6">Ketua</td>
                            <td class="col-6">Badarudin</td>
                        </tr>
                        <tr>
                            <td>Wakil Ketua</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sekretaris</td>
                            <td>Hermansyah</td>
                        </tr>
                        <tr>
                            <td>Anggota</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="fw-bold mt-4 mb-3">Tengku Dacing</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-6">Ketua</td>
                            <td class="col-6">Amri Hj. AB.</td>
                        </tr>
                        <tr>
                            <td>Wakil Ketua</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sekretaris</td>
                            <td>Hanafiah</td>
                        </tr>
                        <tr>
                            <td>Anggota</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="fw-bold mt-4 mb-3">Tanah Merah Barat</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-6">Ketua</td>
                            <td class="col-6">Sahrin B</td>
                        </tr>
                        <tr>
                            <td>Wakil Ketua</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sekretaris</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Anggota</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="fw-bold mt-4 mb-3">Sambungan Selatan</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-6">Ketua</td>
                            <td class="col-6">Badarudin</td>
                        </tr>
                        <tr>
                            <td>Wakil Ketua</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sekretaris</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Anggota</td>
                            <td>AB. Rizal</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('side-berita')
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>
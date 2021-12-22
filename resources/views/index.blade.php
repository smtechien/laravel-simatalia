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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo_small.png" type="image/x-icon">
    <title>Simatalia</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        @include('navbar')
        <!-- akhir Navbar -->
    </header>
    
    <!-- start main-->
    <main>
        <!-- start intro -->
        <section id="bg-intro">
            <div
                class="container d-flex gap-4 flex-column text-white align-items-center justify-content-center h-100 px-5 text-center w-100">
                <img class="img-fluid" src="img/logo-big.png" alt="logo kecamatan tana lia">
                <h5>Selamat Datang di Website</h5>
                <h2 class="fw-bold">Kecamatan Tana Lia, Kab. Tana Tidung, <span class="d-block">Kalimantan Utara</span>
                </h2>
                <a class="no-radius btn btn-primary py-2 px-4" href="#">Jelajahi Tana Lia</a>
            </div>
        </section>
        <!-- end intro -->
        <!-- start keterangan -->
        <section class="container-fluid py-5 px-5 d-flex flex-column flex-lg-row gap-5  align-items-center mb-3">
            <img class="img-fluid img-ket" src="img/img-content-1.png" alt="gambar dukungan">
            <div class="text-wrap justify-md-text">
                <p>
                    Saat ini, teknologi informasi merupakan bagian yang tidak terpisahkan dari kehidupan kita. Semua
                    aspek kehidupan telah memanfaatkan revolusi teknologi. Tidak hanya perusahaan yang ingin memasarkan
                    produknya secara global dengan biaya yang efisien, tetapi juga pemerintahan, organisasi, partai
                    politik, yayasan, lembaga dan bahkan individu juga telah menggunakan internet untuk mendapatkan
                    kemudahan dalam memberikan layanan dan informasi, juga untuk kemudahan perluasan dan pengembangan
                    layanan usaha.
                </p>
                <p>
                    Website sesayaphilir.com ini kami hadirkan sebagai media informasi Pemerintah Kecamatan Sesayap
                    Hilir kepada masyarakat, juga sebagai sarana interaksi, komunikasi dan tranparansi publik sesuai
                    dengan Undang-Undang yang mengamanatkan keterbukaan informasi. Semoga dengan adanya website ini
                    dapat bermanfaat dan menjadi salah satu upaya peningkatan pelayanan kecamatan. Untuk itu, kritik,
                    saran dan masukan yang konstruktif, kreatif, dan inovatif sangat kami nantikan demi terwujudnya
                    program pemerintahan kecamatan yang terarah dan mengedepankan musyawarah dan mufakat
                </p>
            </div>
        </section>
        <!-- end keterangan -->
        <!-- start layanan -->
        <section class="px-2 px-lg-5 mb-3">
            <h1 class="text-center mb-4 fw-bolder">Layanan</h1>
            <div id="carouselCard" class="carousel" data-bs-ride="carousel">
                <div id="carouselInnerCard" class="owl-carousel carousel-inner align-items-center">
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">perm_identity</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">KTP Elektronik</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and
                                    make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">people</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Kartu Keluarga</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">mail_outline</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Surat Pindah</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and
                                    make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">mail</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Surat Pindah Datang</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">emoji_people</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Keterangan Tidak Mampu</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and
                                    make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">house</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Surat Domisili Usaha</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">miscellaneous_services</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Dispensasi Nikah</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card text-center px-1 px-lg-3 py-5">
                            <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                                <span class="material-icons fs-2 color-primary">folder</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Keterangan Waris</h6>
                                <p class="card-text text-muted fs-7">Some quick example text to build on the Judul
                                    Berita
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button role="button" id="arrowCardPrev" class="carousel-control-prev" data-bs-target="#carouselCard"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon color-gray" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button role="button" id="arrowCardNext" class="carousel-control-next" data-bs-target="#carouselCard"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon color-gray" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- end info -->
        <!-- start kepala daerah -->
        <section class="container-fluid py-5 px-5 d-flex flex-column">
            <h1 class="text-center mb-4 fw-bolder">Kepala Daerah</h1>
            <div class="d-flex flex-column flex-md-row gap-5">
                <div class="card text-center px-4">
                    <img class="img-fluid px-3 px-lg-5" src="img/bupati-tana-tidung-bcircle.png">
                    <h5 class="mt-4">John Doe</h5>
                    <p class="text-muted">Camat Tana Lia</p>
                </div>
                <div class="card text-center px-4">
                    <img class="img-fluid px-3 px-lg-5" src="img/bupati-tana-tidung-bcircle.png" alt="">
                    <h5 class="mt-4">IBRAHIM ALI, A.Md</h5>
                    <p class="text-muted">Bupati Tana Tidung</p>
                </div>
                <div class="card text-center px-4">
                    <img class="img-fluid px-3 px-lg-5" src="img/gubernur-kaltara-bcircle.png" alt="">
                    <h5 class="mt-4">ZAINAL ARIFIN P, S.H., M.Hum</h5>
                    <p class="text-muted">Gubernur Kalimantan Utara</p>
                </div>
            </div>
        </section>
        <!-- end kepala daerah -->
        <!-- start informasi -->
        <section class="container-fluid py-5 px-3 px-lg-5">
            <h1 class="text-center mb-4 fw-bolder">Informasi</h1>
            <div id="info-section"
                class="px-5 px-md-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 gap-5 justify-content-center">
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted ">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted ">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted ">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted ">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted ">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col card pad-40">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-subtitle mb-2 text-muted">01 November 2021</p>
                        <p class="card-text text-muted">Some quick example text to build on the Judul Berita and make up
                            the bulk
                            of the card's content.</p>
                        <a class="text-decoration-none text-primary fw-bolder" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end informasi -->
        <!-- start galeri -->
        <section class="container-fluid px-0 mt-3 d-flex flex-column">
            <h1 class="text-center mb-4 fw-bolder">Galeri</h1>
            <div id="carouselExampleIndicators" class="carousel slide carousel-gallery" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/dummy-gallery-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/dummy-gallery-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/dummy-gallery-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- end galeri -->
    </main>
    <!-- end main -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->

    
</body>

</html>
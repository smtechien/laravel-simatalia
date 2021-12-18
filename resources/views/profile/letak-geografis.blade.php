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

    <!-- jumbotron -->
    <section class="jumbotron-judul p-md-5">
      <h1>Letak Geografis</h1>
      <p class="url"><span class="text-secondary">Si Mata Lia > Profil Kecamatan ></span> <span class="text-danger fw-bold">Letak Geografis</span></p>
      <img class="img-fluid " src="{{url('img/img-geografis.png')}}" alt="logo kecamatan tana lia">
    </section>
    <!-- akhir jumbotron -->

    <!-- keterangan -->
    <section class="container-fluid py-5 px-2 p-md-5 d-flex flex-column flex-xl-row gap-5  align-items-center lokasi" id="lokasi-container">
      <div class="container-fluid-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.426297405392!2d117.59435161429315!3d3.716811650438211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x321446ffffffffff%3A0xd1351e223aaab941!2sKantor%20Kec.%20Tanalia!5e0!3m2!1sid!2sid!4v1636094139580!5m2!1sid!2sid" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" id="maps"></iframe>
      </div>
      <div class="text-wrap">
          <p>
          Berdasarkan topografinya Kecamatan Tana Lia, 50% merupakan wilayah datar sampai berombak dan 50% berombak sampai berbukit dan berada pada ketinggian 3,5 meter dari permukaan laut.
          </p>
          <p>
            Fermentum pellentesque tortor, sed tempor id diam arcu ut. Viverra et morbi eget proin ultrices nullam ut. Ut interdum neque placerat ut vitae dapibus fusce mauris etiam. Lacus, eget a leo, pretium, et sit congue. Nisl non et amet fermentum. Praesent sed neque, enim, venenatis suspendisse scelerisque lorem habitant. Accumsan, enim massa pharetra, facilisi ac aliquam. Vestibulum in ut ipsum in pharetra duis. Turpis fusce sed nunc, sit morbi etiam donec. Posuere platea gravida turpis sed phasellus blandit diam sagittis blandit. Elementum diam duis massa sit lorem ut. Semper suspendisse lectus ipsum a ultricies sapien. Tellus enim porta tortor eget.
          </p>
      </div>
  </section>
  <!-- akhir keterangan -->

  <!-- footer -->
  @include('footer')
  <!-- akhir footer -->
  </body>
</html>
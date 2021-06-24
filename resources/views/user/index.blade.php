<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>web-aengdake</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">AENGDAKE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#struktur">Struktur Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#event">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Profil Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">SELAMAT DATANG</div>
            <div class="masthead-heading text-uppercase">Website Informasi <br> Desa Aengdake</div>
        </div>
    </header>

    <section class="page-section" id="struktur">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Struktur</h2>
                <h3 class="section-subheading text-muted">Berikut Struktur Desa Aengdake</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <img src="assets/img/sd.jpeg" class="img-fluid" alt="Responsive image">
                </div>

            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="event">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Event</h2>
                <h3 class="section-subheading text-muted">Berikut Event Desa Aengdake</h3>
            </div>
            <div class="row">
                @foreach($events as $index => $event)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{$index+1}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('storage/event/'.$event->thumbnail)}}" style="height: 300px; widht: 300px;" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $event -> name}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Desa</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <img src="assets/img/profile.png" style="height: 500px; widht: 500px;" alt="Responsive image">

                    <h4 class="my-3">Desa Aengdake</h4>
                    <p class="text-muted">Aengdake adalah nama salah satu desa yang berada sekitar ± 5 km ke arah barat kantor Kecamatan Bluto Kabupaten Sumenep Provinsi Jawa Timur. Desa Aengdake berbatasan dengan Desa Aeng Baja Kenek Kecamatan Bluto di sebelah timur, Di sebelah Barat Pakandangan Sangrah, Desa Aengbaja Raja di sebelah utara, dan sebelah selatan berbatasan dengan selat Madura. Desa ini mempunyai empat dusun yakni :
                        <br> a. Dusun Tambiayu : Sebelah Barat
                        <br> b. Dusun Tanapote : Sebelah Timur
                        <br> c. Dusun Libiliyan : Sebelah Selatan
                        <br> d. Dusun Ponggul : Sebelah Utara
                        <br> Desa Aengdake ini berada pada daerah dengan posisi dataran tinggi dengan suhu rata-rata 27o C. Luas wilayah Desa Aengdake kurang lebih sekitar 3,37 km2. Hingga Tahun 2021, wilayah Desa Aengdake terdiri dari sembilan Rukun Warga (RW) dan sembilan belas Rukun Tetangga (RT). Letak Desa Aengdake berdasarkan orbitasi jarak ke Ibu Kota Kecamatan terdekat yaitu 3,3 Km. Sementara untuk jarak ke Ibu Kota Kabupaten terdekat adalah 34 Km. Di Desa Aengdake ini memiliki kantor desa yang terletak di timurnya posyandu aengdake.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    Copyright &copy; AengDake
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    @foreach($events as $index => $event)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$index+1}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><span><img src="assets/img/close-icon.svg" alt="Close modal" /></span></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">{{ $event-> name}}</h2>
                                <img class="img-fluid d-block mx-auto" src="{{asset('storage/event/'.$event->thumbnail)}}" alt="..." style="height: 300px; widht: 300px;" />
                                <p>{{ $event->desc}}</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
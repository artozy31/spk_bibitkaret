<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perhitungan TOPSIS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">SPK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#kriteria">Kriteria</a></li>
          <li><a class="nav-link scrollto" href="#alternatif">Alternatif</a></li>
          <li><a class="nav-link scrollto" href="#matriksnormalisasi">Matriks Ternormalisasi</a></li>
          <li><a class="nav-link scrollto" href="#bobotternormalisasi">Bobot Ternormalisasi</a></li>
          <li><a class="nav-link scrollto" href="#matriksideal">Nilai Matriks Ideal</a></li>
          <li><a class="nav-link scrollto" href="#jarak">Jarak Solusi</a></li>
          <li><a class="nav-link scrollto" href="#preferensi">Nilai Preferensi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Kriteria Section ======= -->
    <section id="kriteria" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'data_kriteria.php'
            ?>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        
        <div class="row mt-5">
        <h5>Nilai Variasi Kriteria</h5>
          <!-- bentuk daun -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Bentuk Daun</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>Oval</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Memanjang</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- bentuk payung -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Bentuk Payung</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>Setengah Lingkaran</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Tidak Setengah Lingkaran</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- posisi tangkai daun -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Posisi Tangkai Daun</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>Lurus</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Melengkung</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- panjang tangkai -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Panjang Tangkai</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>> 3cm</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>< 3cm</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- tulang daun -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Tulang Daun</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>Menyirip</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Tidak Menyirip</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- warna helai daun -->
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <table class="table table-bordered table-striped">
              <thead>
                <th width="75%">Warna Helai Daun</th>
                <th>nilai</th>
              </thead>
              <tbody>
                <tr>
                  <td>Hijau</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>Hijau Kekuningan</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Alternatif Section ======= -->
    <section id="alternatif" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'nilai_alternatif.php';
            ?>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'nilai_matriks.php';
            ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Matriks ternormalisasi Section ======= -->
    <section id="matriksnormalisasi" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'matriks_normalisasi.php';
            ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Matriks ternormalisasi Section ======= -->
    <section id="bobotternormalisasi" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'bobot_ternormalisasi.php';
            ?>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Matriks Ideal Section ======= -->
    <section id="matriksideal" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'matriks_ideal.php';
            ?>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Jarak Solusi Section ======= -->
    <section id="jarak" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'jarak_solusi.php';
            ?>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Jarak Solusi Section ======= -->
    <section id="preferensi" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <?php 
              include 'nilai_preferensi.php';
            ?>
          </div>
        </div>
        <div class="row">
        <div class="col-lg">
            <p>Kesimpulannya Berdasarkan hasil pengujian sistem bibit yang unggul adalah Bibit 1 dengan nilai preferensi 1. Hasil Akhir Aplikasi yang disesuaikan dengan perhitungan manual sesuai dengan formula TOPSIS maka diperoleh hasil yang sama, dan telah dikonfirmasi dengan Pakar yang mengetahui tentang pembibitan Karet terbaik dikonfirmasi bahwa Bibit 1 yang terbaik diantara alternatif yang ada.</p>
        </div>
      </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
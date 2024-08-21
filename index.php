<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPK TOPSIS</title>
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
  <!-- Link untuk membuat Rumus menggunakan MathJax-->
  <script>
    MathJax = {
      tex: {
        inlineMath: [
          ['$', '$'],
          ['\\(', '\\)']
        ]
      },
      svg: {
        fontCache: 'global'
      }
    };
  </script>
  <script type="text/javascript" src="path-to-MathJax/MathJax.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">SPK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#rumus">Rumus TOPSIS</a></li>
          <li><a class="nav-link scrollto" href="#studikasus">Studi Kasus</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>PEMILIHAN BIBIT KARET UNGGUL</h1>
          <h2>MENGGUNAKAN METODE TOPSIS</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-book-line"></i>
            <h3><a class="scrollto" href="#about">Apa itu TOPSIS?</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="srollto" href="#rumus">Rumus TOPSIS</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a class="scrollto" href="#studikasus">Studi Kasus</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calculator-line"></i>
            <h3><a href="perhitungan.php">Perhitungan</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-team-line"></i>
            <h3><a class="scrollto" href="#team">Team</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>TOPSIS</h2>
          <p>APA ITU TOPSIS ?</p>
        </div>

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <p>
              TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution) adalah metode analisis multi-kriteria yang digunakan untuk menentukan pilihan terbaik dari beberapa alternatif berdasarkan kriteria yang telah ditentukan. Metode ini menentukan alternatif terbaik dengan mencari solusi ideal positif dan negatif, dan menentukan jarak antara alternatif yang ditinjau dan kedua solusi ideal tersebut. Alternatif dengan jarak terdekat ke solusi ideal positif dianggap sebagai pilihan terbaik.
            </p>
            <p>
              Penyelesaian masalah dengan TOPSIS:
            </p>
            <ol>
              <li> Membuat matriks keputusan yang ternormalisasi.</li>
              <li> Membuat matriks keputusan yang ternormalisasi terbobot.</li>
              <li> Menentukan matriks solusi ideal positif & matriks solusi ideal negatif.</li>
              <li> Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif & matriks solusi ideal negatif.</li>
              <li> Menentukan nilai preferensi untuk setiap alternatif.</li>
            </ol>
            <p>
              Dari penyelesaian diatas, maka hasil akhirnya adalah nilai preferensi. Dalam studi kasus ini hasil yang diharapkan yaitu terpilihnya bibit karet yang unggul.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Rumus Portfolio ======= -->
      <section id="rumus" class="portfolio services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>TOPSIS</h2>
            <p>RUMUS TOPSIS</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-normalisasi">Normalisasi</li>
                <li data-filter=".filter-terbobot">Ternormalisasi Terbobot</li>
                <li data-filter=".filter-solusi">Solusi Ideal</li>
                <li data-filter=".filter-jarak">Jarak Solusi Ideal</li>
                <li data-filter=".filter-preferensi">Nilai Preferensi</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <!-- NORMALISASI -->
            <div class="col-lg col-md-6 portfolio-item filter-normalisasi">
              <div class="icon-box">
                <h4>Normalisasi</h4>
                <p>Normalisai dilakukan pada setiap atribut matriks tersebut. Normalisasi pada
                  setiap atribut matriks keputusan dilakukan dengan cara membandingkan
                  setiap atribut pada suatu alternatif dengan akar jumlah kuadrat setiap elemen
                  pada kriteria yang sama pada semua alternatif. Berikut adalah persamaan
                  untuk melakukan normalisai pada setiap atribut matriks keputusan</p>
                <div class="row" style="margin: 20px;">
                  <!-- Rumus normalisasi dengan MathJax -->
                  <!-- <h2>Rumus untuk Normalisasi = </h2> -->
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Normalisasi : $$ {r_{ij} = \frac{x_{ij}}{\sqrt{\sum_{i_{=1}}^m}x_{ij}^2}}$$
                  </div>
                  <div>
                    <ul>
                      <li>r = Atribut yang telah ternormalisasi</li>
                      <li>i = 1,2,...m</li>
                      <li>j = 1,2,...n</li>
                      <li>x = Alternatif</li>
                      <li>m = Banyak Siswa</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                  <!-- /.container-fluid -->
                </div>
                Maka matriks Normalisasi adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    r = \left(\begin{array}{c}
                    r_{1,1} & r_{1,2} & r_{1,3} & r_{...}& r_{1,j} & r_{1,n}\\
                    r_{2,1} & r_{2,2} & r_{2,3} & r_{...}& r_{2,j} & r_{2,n}\\
                    r_{1...} & r_{...} & r_{...} & r_{...}& r_{...} & r_{...}\\
                    r_{i,1} & r_{i,2} & r_{i,3} & r_{...}& r_{i,j} & r_{i,n}\\
                    r_{m,1} & r_{m,1} & r_{m,1} & r_{...}& r_{m,j} & r_{m,n}
                    \end{array}\right)
                    } $$
                  </div>
                </div>
              </div>
            </div>

            <!-- TERNORMALISASI Terbobot -->
            <div class="col-lg col-md-6 portfolio-item filter-terbobot">
              <div class="icon-box">
                <h4>Ternormalisasi Terbobot</h4>
                <p>Langkah selanjutnya adalah membuat matriks keputusan ternormalisasi
                  terbobot yang dilambangkan dengan y. Untuk mencari elemen matriks y
                  dilakukan dengan mengalikan elemen keputusan ternormalisasi (r) dengan elemen
                  pada vektor bobot peferensi (w). Banyaknya elemen pada vektor w sama dengan
                  banyaknya kriteria pada matriks r. Sama dengan langkah sebelumnya, matriks r
                  akan diubah menjadi matriks y dengan cara merubah satu persatu nilai atribut
                  pada matriks r dengan menggunakan persamaan berikut ini :
                </p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Ternormalisasi Terbobot : $$ {y_{ij} = w_{j}r_{ij}}$$
                  </div>
                  <div>
                    <ul>
                      <li>y = Matriks keputusan ternormalisasi terbobot</li>
                      <li>w = Bobot Kriteria</li>
                      <li>i = 1,2,...m</li>
                      <li>j = 1,2,...n</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>
                Maka matriks ternormalisasi terbobot adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    y = \left(\begin{array}{c}
                    y_{1,1} & y_{1,2} & y_{1,3} & y_{...}& y_{1,j} & y_{1,n}\\
                    y_{2,1} & y_{2,2} & y_{2,3} & y_{...}& y_{2,j} & y_{2,n}\\
                    y_{1...} & y_{...} & y_{...} & y_{...}& y_{...} & y_{...}\\
                    y_{i,1} & y_{i,2} & y_{i,3} & y_{...}& y_{i,j} & y_{i,n}\\
                    y_{m,1} & y_{m,1} & y_{m,1} & y_{...}& y_{m,j} & y_{m,n}
                    \end{array}\right)
                    } $$
                  </div>
                </div>
              </div>
            </div>

            <!-- solusi ideal-->
            <div class="col-lg col-md-6 portfolio-item filter-solusi">
              <div class="icon-box">
                <h4>Solusi Ideal Positif</h4>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                  maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                  terbesar pada setiap aspek penilaian dari matriks y. Berikut adalah formula untuk
                  mencari A+ :</p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Solusi Ideal Positif : $$ {A^{+}=(y_1^+),(y_2^+),(y_3^+),(y_4^+),(y_n^+)}$$
                  </div>
                  <div>
                    <ul>
                      <li>A+ = Matriks keputusan ternormalisasi terbobot</li>
                      <li>n = banyaknya kolom</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>
                Maka matriks Solusi Ideal Positif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    A^{+}=\left(\begin{array}{c}
                    y_1^+,y_2^+,y_3^+,y_4^+,y_n^+
                    \end{array}\right)
                    } $$
                  </div>
                </div>
                <h4>Solusi Ideal Negatif</h4>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                  maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                  20
                  terkecil pada setiap aspek penilaian dari matriks Y. Berikut adalah formula
                  untuk mencari A- :
                </p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Solusi Ideal Positif : $$ {A^{-}=(y_1^-),(y_2^-),(y_3^-),(y_4^-),(y_n^-)}$$
                  </div>
                  <div>
                    <ul>
                      <li>A- = Matriks keputusan ternormalisasi terbobot</li>
                      <li>n = banyaknya kolom</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>
                Maka matriks Solusi Ideal Positif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    A^{-}=\left(\begin{array}{c}
                    y_1^-,y_2^-,y_3^-,y_4^-,y_n^-
                    \end{array}\right)
                    } $$
                  </div>
                </div>
              </div>
            </div>

            <!-- Jarak solusi ideal-->
            <div class="col-lg col-md-6 portfolio-item filter-jarak">
              <div class="icon-box">
                <h4>Jarak Solusi Ideal Positif</h4>
                <p>Jarak terhadap solusi ideal positif yang dilambangkan dengan D
                  + merupakan jarak suatu alternatif terhadap solusi ideal positif. Hal ini berarti
                  jarak terhadap solusi ideal positif akan dicari untuk setiap siswa. Berikut adalah
                  formula untuk mencari D +:</p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Jarak Solusi Ideal Positif : $$ {D_I^+ = \sqrt{\sum_{j=1}^n}(y_{ij}-y_j^+)^2}$$
                  </div>
                  <div>
                    <ul>
                      <li>yj += nilai solusi ideal positif</li>
                      <li>Di+ = Jarak terhadap solusi ideal positif</li>
                      <li>n = banyaknya kolom</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>
                Maka matriks Jarak Terhadap Solusi Ideal Positif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    D_i^+=(D_1^+,D_2^+,D_3^+,D_4^+,D_n^+)
                    } $$
                  </div>
                </div>

                <h4>Jarak Solusi Ideal Negatif</h4>
                <p>Jarak terhadap solusi ideal negatif yang dilambangkan dengan D
                  -
                  merupakan jarak suatu alternatif terhadap solusi ideal negatif. Hal ini berarti jarak
                  terhadap solusi ideal negatif akan dicari untuk setiap siswa. Berikut adalah
                  formula untuk mencari D
                  -
                  :
                </p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Jarak Solusi Ideal Negatif : $$ {D_I^- = \sqrt{\sum_{j=1}^n}(y_{ij}-y_j^-)^2}$$
                  </div>
                  <div>
                    <ul>
                      <li>yj -= nilai solusi ideal positif</li>
                      <li>Di- = Jarak terhadap solusi ideal positif</li>
                      <li>n = banyaknya kolom</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>
                Maka matriks Jarak Terhadap Solusi Ideal Negatif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    D_i^-=(D_1^-,D_2^-,D_3^-,D_4^-,D_n^-)
                    } $$
                  </div>
                </div>
              </div>
            </div>

            <!-- Preferensi -->
            <div class="col-lg col-md-6 portfolio-item filter-preferensi">
              <div class="icon-box">
                <h4>Nilai Preferensi</h4>
                <p>Nilai preferensi adalah nilai yang akan menjadi penentu dalam menentukan
                  peringkat siswa. Nilai preferensi dilambangkan dengan V. Nilai V didapat dari
                  perbandingan antara jarak terhadap solusi ideal negatif dengan jumlah jarak
                  terhadap solusi ideal positif dan negatif.</p>
                <div class="row" style="margin: 20px;">
                  <div id="formula-normalisasi" style="overflow-x:auto;">
                    Rumus untuk Nilai Preferensi : $$ {V_{t}=\frac{D_i^-}{D_i^-+{D_i^+}}}$$
                  </div>
                  <div>
                    <ul>
                      <li>𝑉𝑡 = Nilai Preferensi</li>
                      <li>𝐷𝑖− = Jarak terhadap solusi ideal negatif.</li>
                      <li>𝐷𝑖 += Jarak terhadap solusi ideal positif.</li>
                    </ul>
                  </div>
                  <div style="padding-left: 20px;">
                  </div>
                </div>

                Maka matriks Preferensi adalah sebagai berikut :

                <div class="row" style="margin: 20px;">
                  <div class="column">
                    $$ {
                    V_{t} = (V_{1},V_{2},V_{3},V_{4},V_{n})
                    } $$
                  </div>
                </div>
              </div>
            </div>

          </div>

      </section><!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="studikasus" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>TOPSIS</h2>
            <p>STUDI KASUS</p>
          </div>

          <div class="row">
            <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
              <h4>Pemilihan Bibit Karet Unggul</h4>
              <p>
                Tanaman karet (Hevea brasiliensis) adalah salah satu komoditi pertanian yang memiliki peran penting dalam
                kegiatan ekonomi di Indonesia. Langkah awal yang baik dalam mengelola usaha pertanian karet adalah para petani
                harus menggunakan bibit karet yang berkualitas dan mampu menghasilkan lateks yang tinggi. Mengingat pentingnya
                bibit dalam menentukan perbaikan pembangunan perkebunan karet, maka usaha pembibitan harus dikelola dengan baik.
                Bibit karet berkualitas yang digunakan akan menghasilkan tanaman karet yang berkualitas pula.
                Sistem pendukung keputusan (SPK) sebagai salah satu pemanfaatan teknologi dapat menjadi solusi dalam masalah yang dihadapi petani karet.
              </p>
              <br>
              <p>
                Berdasarkan hasil wawancara kami dengan petani karet, maka didapatkan 7 kriteria dalam penentuan bibit karet yang unggul.
                Berikut data kriteria beserta bobotnya :
              </p>
              <br>
              <?php 
                include 'data_kriteria.php';
              ?>
              <br>
              <p>
                Pada studi kasus ini kami akan menentukan bibit pohon karet unggul menggunakan metode TOPSIS sesuai data kriteria diatas.
              </p>
              <p>Terdapat 7 sampel atau alternatif bibit yang akan kami beri peringkat referensi, data bibit tersebut adalah:</p>
              <br>
              <?php 
                include 'nilai_alternatif.php';
              ?>
            </div>
          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="text-center">
            <h3>Hasil Perhitungan</h3>
            <p> Hasil perhitungan kami menunjukkan bahwa Bibit 1 adalah rekomendasi terbaik dengan nilai preferensi 0.9718</p>
            <a class="cta-btn" href="perhitungan.php">Lihat Proses Perhitungan</a>
          </div>

        </div>
      </section><!-- End Cta Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Team</h2>
            <p>Kelompok 1</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>M Aldiansyah Ali</h4>
                  <span>2007411016</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Ahmad Nasir</h4>
                  <span>2007411007</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Glidsto Airihanan W</h4>
                  <span>2007411010</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/team/team-4.JPG" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>M Fahrul Rozy</h4>
                  <span>2007411021</span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Team Section -->

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
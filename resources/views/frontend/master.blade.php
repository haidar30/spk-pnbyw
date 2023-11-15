<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="">

  <title> E-EKP </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('frontend/images/hero-bg.png') }}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              E-EKP
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      E-EKP PN Byw
                    </h1>
                    
                    <p>
                      Elektronik - Evaluasi Kinerja Pegawai <br> 
                      Penerapan sistem evaluasi kinerja elektronik seperti E-EKP bertujuan untuk membantu efisiensi dan transparansi dalam proses evaluasi kinerja pegawai. Dengan pendekatan elektronik, evaluasi dapat dilakukan secara daring atau melalui platform digital, memungkinkan penyimpanan data yang lebih baik, akses yang mudah, dan pengelolaan yang lebih efisien.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('frontend/images/pn.jpeg') }}" alt="" width="" height="">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding" id="service">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Profit <span>E-EKP</span>
          </h2>
          <p>
            Keuntungan dari sistem seperti E-EKP mungkin melibatkan:
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Kemudahan Akses
                </h5>
                <p>
                  Pegawai dan penilai dapat mengakses sistem evaluasi kinerja secara mudah melalui platform online.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pemantauan Kinerja Real-Time
                </h5>
                <p>
                  Data kinerja dapat dipantau secara real-time, memungkinkan pemantauan yang lebih akurat dan respons cepat terhadap perubahan kinerja.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Penghematan Waktu dan Sumber Daya
                </h5>
                <p>
                  Proses evaluasi dapat menjadi lebih efisien, menghemat waktu dan sumber daya karena eliminasi kebutuhan untuk dokumen fisik.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Transparansi
                </h5>
                <p>
                  Sistem dapat meningkatkan transparansi dalam kriteria evaluasi dan hasil, memberikan pegawai pemahaman yang lebih baik tentang harapan dan perbaikan yang mungkin diperlukan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pelacakan Kemajuan dan Pengembangan
                </h5>
                <p>
                  Data yang tercatat dapat digunakan untuk melacak kemajuan pegawai dan mengidentifikasi area pengembangan untuk pelatihan atau dukungan tambahan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Riwayat Evaluasi yang Terdokumentasi
                </h5>
                <p>
                  Sistem elektronik memungkinkan penyimpanan riwayat evaluasi kinerja, yang dapat digunakan untuk referensi di masa depan atau keperluan administratif.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jalan Adi Sucipto No. 26 Banyuwangi – Jawa Timur
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Tlp. 0333-416706 Fax. 0333-424818 
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  pnbanyuwangi@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Pertanyaan dan Saran dapat dikirimkan melalui Pusat Pelayanan Informasi Pengadilan Negeri Banyuwangi
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 info_col ">
          <h4>
            Kirim Masukan
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Send
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="{{ asset('frontend/js/scroll.js') }}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
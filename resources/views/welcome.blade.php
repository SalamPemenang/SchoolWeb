<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang | SchoolWeb</title>
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

</head>

<body>

  <!-- Start Header Area -->
  <header id="header" style="background-color: rgba(55, 183, 198, 0.5);">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <strong><h4 class="text-white">SchoolWeb</h4></strong>
        </div>
        <nav id="nav-menu-container">
          @if (Route::has('login'))
          <ul class="nav-menu">
            @auth
            <li class="menu"><a href="{{route('home')}}">Home</a></li>
            @else
            <li class="menu"><a href="">Galeri</a></li>
            <li><a href="">Fasilitas</a></li>
            <li><a href="">Prestasi</a></li>
            <li class="menu-has-children"><a href="#">Informasi</a>
              <ul>
                <li><a href="">Pengumuman</a></li>
                <li><a href="">Berita</a></li>
              </ul>
            </li>
            <li><a href="#">Tentang Sekolah</a>
            </li>
            <li class="menu-has-children"><a href="#">Lainya</a>
              <ul>
                <li><a href="">Kontak</a></li>
                <li><a href="{{route('logCapt')}}">Login</a></li>
              </ul>
            </li>
          </ul>
          @endauth
        </nav><!-- #nav-menu-container -->
        @endif
      </div>
    </div>
  </header>
  <!-- End Header Area -->


  <!-- Start Banner Area -->
  <section class="home-banner-area relative">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-8 col-md-12">
          <h1 class="wow fadeIn" data-wow-duration="4s">Sekolah Menengah Pertama <br> Di Cianjur</h1>
          <p class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
          </p>
          <br><br><br>
          <h4 class="text-white">Top Ekstrakulikuler</h4>
          
          <div class="courses pt-20">
            <?php $count = 0; ?>
            @foreach($Eskul as $E)
            <?php if ($count == 7) break; ?>
            <a href="#" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">{{$E->nama}}</a>
            <?php $count++; ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="rocket-img">
      <img src="img/rocket.png" alt="">
    </div>
  </section>
  <!-- End Banner Area -->

  <section class="post-content-area section-gap bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1>Berita</h1>
            <hr>
            <p><b>Berita Terbaru Dan Terhangat Seputar Sekolah</b></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 posts-list">
          <?php $count = 0; ?>
          @foreach($b as $B)
          <?php if ($count == 3) break; ?>
          <div class="single-post row">
            <div class="col-lg-3  col-md-3 meta-details">
              <ul class="tags">
                <li><a href="#">Berita</a></li>
                <li><a href="#">Sekolah, </a></li>
                <li><a href="#">Terhangat</a></li>
                <li><a href="#">Terbaru</a></li>
              </ul>
              <div class="user-details row">
                <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$B->tgl}}</a> <span class="lnr lnr-calendar-full"></span></p>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 ">
              <div class="feature-img">
                <img class="img-fluid img-shade" src="image/berita/{{$B->foto}}" style="width: 700px;height: 300px;">
              </div>
              <a class="posts-title"><h3>{{$B->judul}}</h3></a>
              <p class="excert">
                {{$B->deskripsi}}
              </p>
              <a href="" class="primary-btn img-shade">View More</a>
            </div>
          </div>
          <?php $count++; ?>
          @endforeach
        </div>
        <div class="col-lg-4 sidebar-widgets">
          <div class="widget-wrap">
            <div class="single-sidebar-widget popular-post-widget">
              <h4 class="popular-title">Foto & Video Terbaru</h4>
                <div class="popular-post-list">
                <?php $count = 0; ?>
                @foreach($Galeri as $G)
                <?php if ($count == 2) break; ?>
                <div class="single-sidebar-widget popular-post-widget">
                    <div class="single-post-list d-flex flex-row align-items-center">
                      <div class="thumb">
                        <img class="img-fluid" src="image/galeri/{{$G->foto}}" style="width: 100%">
                      </div>
                    </div>
                      <div class="details">
                        <a href=""><h6>Dari Galeri</h6></a>
                        <p>{{$G->created_at}}</p>
                      </div>
                  </div>
                </div>
                <?php $count++; ?>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="feature-area section-gap-v2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1>Pengumuman</h1>
            <hr>
            <p><b>Pengumuman Terbaru Dan Terhangat Seputar Sekolah</b></p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center">
        <?php $count2 = 0; ?>
        @foreach($pengumuman as $p)
        <?php if ($count2 == 4) break; ?>
        <div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
          <div class="thumb d-flex justify-content-center">
            <img class="img-fluid" src="image/Pengumuman/{{$p->foto}}" width="220" alt="">
          </div>
          <div class="meta-text text-center">
            <h4 class="judul">{{$p->judul}}</h4>
            <p class="designation"></p>
            <div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
              <p class="desk">
                {{$p->deskripsi}}
              </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><button class="btn btn-outline-info">Lihat</button></a>
            </div>
            <br>
            <div class="text-right">
              {{$p->tgl}}
            </div>
          </div>
        </div>
        <?php $count2++; ?>
        @endforeach
        <div class="col-lg-12 col-md-12 col-sm-12 text-right">
          <br>
          <a href="#" ><button class="btn btn-outline-info">Lihat Semua pengumuman</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Footer Area -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 single-footer-widget">
          <br><br><br><br><br>
          <h1 style="font-family: Eras Bold Itc; color: white">School<b style="color: white">Web</b></h1>
        </div>
        <div class="col-lg-3 col-md-12 single-footer-widget">
          <h4>Kontak</h4>
          <ul>
            <li><a href="#" class="text-white">Telp : </a></li>
            <li><a href="#" class="text-white">Faximile : </a></li>
            <li><a href="#" class="text-white">E-mail : </a></li>
            <li><a href="#" class="text-white">Website : </a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 single-footer-widget">
          <h4>Maps</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3420.077169635026!2d107.219352!3d-6.804077!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb08b654531fb447!2sNurul+Islam+Cianjur+Vocational+High+School!5e1!3m2!1sen!2sid!4v1563114427750!5m2!1sen!2sid" width="100%" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
          <a class="text-white">Jl. Raya Bandung-Cianjur KM 09 Desa Selajambe Kecamatan Sukaluyu, Kabupaten Cianjur - Jawa Barat 43284</a>
        </div>

      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <script>document.write(new Date().getFullYear());</script> | Template & Powered By RPL SMAKNIS IT TIM
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-md-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-envelope-o"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- End Footer Area -->

    <!-- ####################### Start Scroll to Top Area ####################### -->
    <div id="back-top">
      <a title="Go to Top" href="#"></a>
    </div>
    <!-- ####################### End Scroll to Top Area ####################### -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('js/easing.min.js')}}"></script>
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
  </html>
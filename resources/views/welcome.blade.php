<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang | SchoolWeb</title>
  @include('admin.part.assets-head-wel')
</head>

<body>

  @include('admin.part.nav-wel')

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
          <a href="{{route('pengumuman-wel')}}" ><button class="btn btn-outline-info">Lihat Semua pengumuman</button></a>
        </div>
      </div>
    </div>
  </section>
  @include('admin.part.foot-wel')

    <!-- ####################### Start Scroll to Top Area ####################### -->
    <div id="back-top">
      <a title="Go to Top" href="#"></a>
    </div>
    <!-- ####################### End Scroll to Top Area ####################### -->
    @include('admin.part.assets-foot-wel')
  </body>
  </html>
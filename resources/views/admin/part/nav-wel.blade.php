<!-- Start Header Area -->
  <header id="header" style="background-color: rgba(55, 183, 198, 0.5);">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="/">
            <strong><h4 class="text-white">SchoolWeb</h4></strong>
          </a>
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
                <li><a href="{{route('pengumuman-wel')}}">Pengumuman</a></li>
                <li><a href="">Berita</a></li>
              </ul>
            </li>
            <li class="menu-has-children"><a href="#">Lainya</a>
              <ul>
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

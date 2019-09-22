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
            @foreach($Profile_Sekolah as $PS)
            <li><a href="#" class="text-white">Telp : {{$PS->no_hp}}</a></li>
            <li><a href="#" class="text-white">Faximile : {{$PS->faximile}}</a></li>
            <li><a href="#" class="text-white">E-mail : {{$PS->email}}</a></li>
            <li><a href="#" class="text-white">Website : {{$PS->website}}</a></li>
            @endforeach
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
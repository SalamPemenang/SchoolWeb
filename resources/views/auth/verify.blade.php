<!DOCTYPE html>
<html>
<head>
    <title>Verify email Kamu</title>
    @include('admin.part.assets-head')
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> ups! &nbsp;</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Verifikasi Email Anda</h3>

          <h4>
            {{ __('Tolong Cek Email Anda lalu Klik Link Verifikasi Untuk Memverifikasi Akun Ini') }}
              {{ __('Jika tidak ada link Verify') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik Di sini untuk mengirim ulang link') }}</a>.
          </h4>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <!-- /.input-group -->
    </form>
</div>
<!-- /.error-content -->
</div>
<!-- /.error-page -->
</section>
@if (session('resent'))
<div class="alert alert-success" role="alert">
    {{ __('A fresh verification link has been sent to your email address.') }}
</div>
@endif
@include('admin.part.assets-foot')
</body>
</html>
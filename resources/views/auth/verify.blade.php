<!DOCTYPE html>
<html>
<head>
  <title>Verify email Kamu</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @include('admin.part.assets-head')
</head>
<body>
  <br><br><br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3><i class="fa fa-warning text-yellow"></i> Verifikasi Email Anda</h3>

        <div class="card">
          <div class="card-header"><h4>{{ __('Silahkan Login') }}</h4></div>

          <div class="card-body">
            <strong>
              {{ __('Kami Mengirim Link aktivasi tolong cek di akun gmail anda') }}
              {{ __('Jika tidak ada link Verify') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik Di sini untuk mengirim ulang link') }}</a>.
            </strong>
            <br><br>
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>                       

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      &nbsp;&nbsp;&nbsp;&nbsp;{{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container">
    @if (session('resent'))
    <div class="alert alert-info" role="alert">
      {{ __('Link Verifikasi Baru Telah Dikirim Ke akun gmail anda') }}
    </div>
    @endif
  </div>

  @include('admin.part.assets-foot')
</body>
</html>
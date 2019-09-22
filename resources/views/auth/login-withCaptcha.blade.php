<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.part.assets-head')

</head>
<body>
  <br><br><br><br>
<div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br/>
      @endif
      <h2 class="text-center">Silahkan <strong>Login</strong></h2>
      <br><br>
      <form method="post" action="{{url('captcha')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Password">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
             <div class="captcha">
               <span>{!! captcha_img() !!}</span>
            <a href=""><button type="button" class="btn btn-info"><i class="fa fa-refresh" id="refresh"></i></button></a>
               </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha"></div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </div>
      </form>
    </div>

    @include('admin.part.assets-foot')
</body>
</html>
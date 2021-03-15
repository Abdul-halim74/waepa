<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WAEPA Bangladesh</title>

  <link href="{{ asset('frontend_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('frontend_assets/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/adminlte.min.css') }}">



</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      <a href="{{url('/')}}" class="h1"><b><img src="{{ asset('frontend_assets/img/logo.png') }}" width="100px" height="100px"></b></a>

    </div>
    <div class="card-body">
      @if($message = Session::get('status'))

        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color: #fff;"><span style="font-size: 18px;color:#fff;">✖</span></button>

            <strong>{{$message}}</strong>
        </div>
      @endif


      <p class="login-box-msg">Sign in to start your session</p>

      @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)

              <li>{{$error}}</li>

              @endforeach
            </ul>
        </div>


      @endif


      <form action="{{url('frontend_login_submit')}}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{url('member_registration')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

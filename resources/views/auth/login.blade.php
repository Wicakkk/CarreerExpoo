<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('/assets/img/logopp.png') }}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Extra details for Live View on GitHub Pages -->
    <title>Login | Career Expo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assetassets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-mini">

  <div class="section-image" filter-color="black" style="background-image: url('assets/img/bgpp.jpg')">
    <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                            <div class="container">
                                <div class="header-body text-center mb-7">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-md-9">
                                            <p class="text-lead text-light mt-3 mb-0">
                                                @include('alerts.migrations_check')
                                            </p>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ml-auto mr-auto">
                        <form role="form" method="POST" action="{{ route('login-action') }}">
                            @csrf
                            <div class="card card-login card-plain">
                                <div class="card-header ">
                                    <div class="logo-container">
                                        <img src="assets/img/logopp.png" alt="">
                                    </div>
                                    <div style="text-align: center; color:white">
                                        <h2><strong>Career Expo</strong></h2>
                                        <h6>Silahkan Masukkan Email dan Password</h6>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div
                                        class="input-group no-border form-control-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons users_circle-08"></i>
                                            </div>
                                        </span>
                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Email') }}" type="email" name="email" required
                                            autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <div
                                        class="input-group no-border form-control-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons objects_key-25"></i></i>
                                            </div>
                                        </div>
                                        <input placeholder="Password"
                                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" placeholder="{{ __('Password') }}" type="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="card-footer ">
                                    <button type = "submit"
                                        class="btn btn-primary btn-round btn-lg btn-block mb-3">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
        

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
</body>

</html>

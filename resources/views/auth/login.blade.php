

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Original URL: http://www.urbanui.com/serein/template/demo/vertical-default-light/pages/samples/login-2.html
Date Downloaded: 11/30/2018 1:56:42 PM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Serein Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="source2/www.urbanui.com/serein/template/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="source2/www.urbanui.com/serein/template/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="source2/www.urbanui.com/serein/template/vendors/css/vendor.bundle.addons.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="source2/www.urbanui.com/serein/template/css/vertical-layout-light/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="source2/www.urbanui.com/serein/template/images/favicon.png" />
  <base href="{{asset(' ')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="source/img/2DK.png" alt="logo" />
              </div>
              <h4>Welcome !</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group">
              
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username or Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                <div class="form-group">
                
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                      
                  </div>
                </div>
                
                <div class="my-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    {{ __('Login') }}
                                </button>

                </div>
                <!-- <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div> -->
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="source2/www.urbanui.com/serein/template/vendors/js/vendor.bundle.base.js"></script>
  <script src="source2/www.urbanui.com/serein/template/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="source2/www.urbanui.com/serein/template/js/off-canvas.js"></script>
  <script src="source2/www.urbanui.com/serein/template/js/hoverable-collapse.js"></script>
  <script src="source2/www.urbanui.com/serein/template/js/template.js"></script>
  <script src="source2/www.urbanui.com/serein/template/js/settings.js"></script>
  <script src="source2/www.urbanui.com/serein/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>



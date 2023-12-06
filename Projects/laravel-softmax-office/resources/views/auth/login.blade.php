<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Login</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/toastr/toatr.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
  </head>
  <body>
    <div class="main-wrapper login-body">
      <div class="login-wrapper">
        <div class="container">
          <div class="loginbox">
            <div class="login-left">
              <img class="img-fluid" src="{{asset('/')}}assets/img/login.png" alt="Logo">
            </div>
            <div class="login-right">
              <div class="login-right-wrap">
                <h1>Welcome to Preskool</h1>
                <p class="account-subtitle">Need an account? <a href="{{route('auth.register')}}">Sign Up</a>
                </p>
                <h2>Sign in</h2>
                <form action="{{route('auth.login.post')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Email <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" name="email"  type="email">
                    <span class="profile-views">
                      <i class="fas fa-user-circle"></i>
                    </span>
                  </div>
                  <div class="form-group">
                    <label>Password <span class="login-danger">*</span>
                    </label>
                    <input class="form-control pass-input" name="password" type="text">
                    <span class="profile-views feather-eye toggle-password"></span>
                  </div>
                  <div class="forgotpass">
                    <div class="remember-me">
                      <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <a href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                  </div>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/feather.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/toastr/toastr.min.js"></script>
    <script src="{{asset('/')}}assets/js/script.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }



        @if(Session::has('message'))
          var type="{{Session::get('type','info')}}"
          switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
              toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
              break;
          }
        @endif
  </script>
    @if(session('errors'))
      <script>
          let errors = @json(session('errors'));
          if (errors) {
              Object.keys(errors).forEach(key => {
                  toastr.error(errors[key][0]);
              });
          }
      </script>
    @endif

  </body>
</html>
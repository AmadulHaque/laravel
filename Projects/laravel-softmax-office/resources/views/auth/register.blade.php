<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Preskool - Register</title>
    <link rel="shortcut icon" href="{{asset('/')}}assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/feather/feather.css">
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
                <h1>Sign Up</h1>
                <p class="account-subtitle">Enter details to create your account</p>
                <form id="register"  action="{{route('auth.register.post')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label>Username <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" name="name" type="text">
                    <span class="profile-views">
                      <i class="fas fa-user-circle"></i>
                    </span>
                  </div>
                  <div class="form-group">
                    <label>Email <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" name="email" type="text">
                    <span class="profile-views">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                  <div class="form-group">
                    <label>Password <span class="login-danger">*</span>
                    </label>
                    <input class="form-control pass-input" name="password" type="text">
                    <span class="profile-views feather-eye toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <label>Confirm password <span class="login-danger">*</span>
                    </label>
                    <input class="form-control pass-confirm" name="password_confirmation" type="text">
                    <span class="profile-views feather-eye reg-toggle-password"></span>
                  </div>
                  <div class=" dont-have">Already Registered? <a href="{{route('auth.login')}}">Login</a>
                  </div>
                  <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                  </div>
                </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/feather.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/toastr/toastr.min.js"></script>
    <script src="{{asset('/')}}assets/js/script.js"></script>
    <script>
        $(document).ready(function(){
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

            $('#register').submit(function(e){
                e.preventDefault()
                let formData = new FormData($(this)[0]);
                let url = $(this).attr('action');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'post',
                    url:url,
                    data:formData,
                    contentType:false,
                    processData:false,
                    success: function(res){
                        if (res.status==200) {
                            toastr.success('Register Success')
                            window.location.href = res.url;
                        }else{
                            $.each(res.errors, function(key, item){
                                toastr.error(item[0])

                            })
                
                        }
                    },
                    error:function (response){
                    }
                });
            })
        })
    </script>
  </body>
</html>
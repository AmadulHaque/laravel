<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Blank Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{asset('/')}}assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/datatables/datatables.min.css">

    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">


    <script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/feather.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/select2/js/select2.min.js"></script>
    <script src="{{asset('/')}}assets/plugins/moment/moment.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

   </head>

  <body>
    <div class="main-wrapper">

        @include('layouts.header')
        @include('layouts.sidebar')

        <div id="main" class="page-wrapper">
            <div id="pjax-container" class="content container-fluid">
                <div id="app">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script class="script" src="{{asset('/')}}assets/js/script.js"></script>
    <script class="script" src="{{asset('/')}}assets/js/page.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.2/socket.io.min.js" integrity="sha512-Xm9qbB6Pu06k3PUwPj785dyTl6oHxgsv9nHp7ej7nCpAqGZT3OZpsELuCYX05DdonFpTlBpXMOxjavIAIUwr0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>

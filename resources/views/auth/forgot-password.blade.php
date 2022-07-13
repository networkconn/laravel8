@extends('layouts.user', [
    'class' => 'off-canvas-sidebar',
    'title' => 'Reset Password',
])
@section('head')
<link href="/css/material.css" rel="stylesheet" />
<link href="/css/demo.css" rel="stylesheet" />
<link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="/img/favicon.png">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="material-icons">dashboard</i> Silohon
                    </a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link">
                        <i class="material-icons">fingerprint</i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black"
        style="background-image: url('/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;"
        data-color="purple">
        <div class="container" style="height: auto;">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="/password/reset">
                        @csrf
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">
                                    <strong>Reset Password</strong>
                                </h4>
                            </div>
                            <div class="card-body ">
                                <div class="bmd-form-group mt-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </span>
                                        </div>
                                        <input type="email"
                                            name="email" id="email"
                                            class="form-control"
                                            placeholder="Isi Email Akun anda Disini" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">
                                    Send Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/core/jquery.min.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/core/popper.min.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/core/bootstrap-material-design.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/perfect-scrollbar.jquery.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/moment.min.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/sweetalert2.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/jquery.validate.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/jquery.bootstrap-wizard.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/bootstrap-selectpicker.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/bootstrap-datetimepicker.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/jquery.dataTables.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/bootstrap-tagsinput.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js">
</script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/fullcalendar.min.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/jquery-jvectormap.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/nouislider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/arrive.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/chartist.min.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/plugins/bootstrap-notify.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/material-dashboard.js?v=2.1.1"
    type="text/javascript"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/demo/demo.js"></script>
<script src="https://material-dashboard-laravel.creative-tim.com/material/js/settings.js"></script>
@endsection
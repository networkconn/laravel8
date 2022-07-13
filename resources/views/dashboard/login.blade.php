@extends('layouts.user', [
    'class' => 'off-canvas-sidebar',
    'title' => 'Login'
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
                    <a href="/register" class="nav-link">
                        <i class="material-icons">person_add</i> Register
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
            @if (session()->has('berhasil'))
            <center>
                <div class="col-md-8">
                    <div class="alert alert-success" role="alert">
                        {{ session('berhasil') }}
                    </div>
                </div>
            </center>
            @endif
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="/login">
                        @csrf
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">
                                    <strong>Login</strong>
                                </h4>
                                <div class="social-line">
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </span>
                                        </div>
                                        <input type="email"
                                            name="email" id="email"
                                            class="form-control" placeholder="Email..."
                                            autofocus value="{{ old('email') }}"
                                            required>
                                        @error('email')
                                        <p style="font-size: 12px; color:red;tex-align:center;">
                                            Login Filed
                                        </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="bmd-form-group mt-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password..." required>
                                    </div>
                                </div>
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">Lets Go</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <a href="/password/reset"
                                class="text-light">
                                <small>Forgot password?</small>
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="/register"
                                class="text-light">
                                <small>Create new account</small>
                            </a>
                        </div>
                    </div>
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
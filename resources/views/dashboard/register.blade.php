@extends('layouts.user', [
    'class' => 'off-canvas-sidebar',
    'title' => 'Register',
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
                    <a href="/user/login" class="nav-link">
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
            <center>
                <div class="col-md-8">
                    @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </center>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="/register/user">
                        @csrf
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">
                                    <strong>Register</strong>
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
                            <div class="card-body ">
                                <div class="bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">face</i>
                                            </span>
                                        </div>
                                        <input type="text"
                                            name="name" id="name"
                                            class="form-control"
                                            placeholder="Name..."
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                        <p style="font-size: 12px; color:red;tex-align:center;">
                                            Nama Terlalu Pendek
                                        </p>
                                        @enderror
                                    </div>
                                </div>
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
                                            placeholder="Email..."
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                        <p style="font-size: 12px; color:red;tex-align:center;">
                                            {{ $message }}
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
                                        <input class="form-check-input" type="checkbox" id="policy" name="policy" checked required>
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        I agree with the <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">Create
                                    account</button>
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
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap-material-design.min.js"></script>
<script src="/js/perfect-scrollbar.jquery.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/sweetalert2.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/jquery.bootstrap-wizard.js"></script>
<script src="/js/bootstrap-selectpicker.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/bootstrap-tagsinput.js"></script>
<script src="/js/jasny-bootstrap.min.js"></script>
<script src="/js/fullcalendar.min.js"></script>
<script src="/js/jquery-jvectormap.js"></script>
<script src="/js/nouislider.min.js"></script>
<script src="/js/core.js"></script>
<script src="/js/arrive.min.js"></script>
<script src="/js/chartist.min.js"></script>
<script src="/js/bootstrap-notify.js"></script>
<script src="/js/material-dashboard.js"></script>
<script src="/js/demo.js"></script>
<script src="/js/settings.js"></script>
@endsection
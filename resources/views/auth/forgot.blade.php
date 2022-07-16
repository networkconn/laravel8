@extends('layouts.user', [
    'class' => 'off-canvas-sidebar',
    'title' => 'Forgot Password'
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
                    <a href="/register/user" class="nav-link">
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
            @if (session()->has('status'))
            <center>
                <div class="col-md-8">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </center>
            @endif
            @error('email')
            <center>
                <div class="col-md-8">
                    <div class="alert alert-danger" role="alert">
                        {{ session('email') }}
                    </div>
                </div>
            </center>
            @enderror
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="/password/forgot">
                        @csrf
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">
                                    <strong>Forgot Password</strong>
                                </h4>
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
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">Send Link</button>
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
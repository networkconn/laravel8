@extends('layouts.dash', [
    'title' => 'Dashboards'
])
@section('head')
<link href="/css/material.css" rel="stylesheet" />
<link href="/css/demo.css" rel="stylesheet" />
@endsection

@section('header')
<div class="navbar-brand">Welcome Back 
    <span style="font-weight: bold;color:#167516;">
        {{ auth()->user()->name }} <i class="fa fa-fire" aria-hidden="true"></i>
    </span>
</div>
@endsection

@section('content')
<div class="container-fluid">
    @if (session()->has('LisensiBerhasil'))
    <center>
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                {{ session('LisensiBerhasil') }}
            </div>
        </div>
    </center>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                    </div>
                    <p class="card-category">Tulis Ulang Artikel!!</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#">
                            Use Tools
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-spinner" aria-hidden="true"></i>
                    </div>
                    <p class="card-category">Scrape Konten Hugo!!</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#">
                            Use Tools
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <p class="card-category">Riset Kata Kunci Blog</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#">
                            Use Tools
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <p class="card-category">Domain Checker</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#">
                            Use Tools
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @include('layouts.userprof')
        </div>
        <div class="col-md-4">
            @if(auth()->user()->is_admin)
            @include('layouts.tabelUser')
            @endif
        </div>
    </div>
</div>
@endsection
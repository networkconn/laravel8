@extends('dashboard.main', [
    'title' => 'Your Profile'
])
@section('asset')
<link rel="stylesheet" href="/css/prof.css">
@endsection
@section('content')
@if (session()->has('pesan'))
<center>
    <div class="col-md-8">
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    </div>
</center>
@endif
<div class="container-fluid">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        @if (Request::user()->image )
                        <img src="{{ asset('storage/' . Request::user()->image) }}" alt="{{ Request::user()->name }}"
                            class="rounded-circle img-fluid" style="width: 150px; height:150px; object-fit:cover;">
                        @else
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px; height:150px; object-fit:cover;">
                        @endif
                        <h5 class="my-3">{{ auth()->user()->name }}</h5>
                        <p class="text-muted mb-1">{{ auth()->user()->pekerjaan }}</p>
                        <p class="text-muted mb-4">{{ auth()->user()->alamat }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="/profile/edit">
                                <button type="button" class="btn btn-sm btn-warning">Edit Profile</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-globe text-warning" aria-hidden="true"></i>
                                <p class="mb-0">{{ auth()->user()->website }}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-github text-dark" aria-hidden="true"></i>
                                <p class="mb-0">{{ auth()->user()->github }}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-twitter" style="color: #55acee;"></i>
                                <p class="mb-0">{{ auth()->user()->twitter }}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-instagram" style="color: #ac2bac;" aria-hidden="true"></i>
                                <p class="mb-0">{{ auth()->user()->instagram }}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-facebook-square" style="color: #3b5998;" aria-hidden="true"></i>
                                <p class="mb-0">{{ auth()->user()->facebook }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ auth()->user()->phone }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ auth()->user()->mobile }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ auth()->user()->alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                        </p>
                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                        </p>
                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
</div>
@endsection
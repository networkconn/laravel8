@extends('dashboard.main', [
    'headClass' => 'addUser',
    'title' => 'Add User Baru',
    'classBody' => 'addUser',
])
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-success text-center">
            Tambah User Baru
        </div>
        <div class="card-body">
            <form action="/manageUser/add" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="mt-4" for="name">Nama Lengkap:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name')}}" required>
                    <label class="mt-4" for="email">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email')}}" required>
                    <label class="my-4" for="password">Password:</label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
                <div class="col-md-6">
                    <label class="mt-3" for="is_admin">Role:</label>
                    <select name="is_admin" id="is_admin" class="form-control">
                        <option value="1">Administrator</option>
                        <option value="0" selected>Pengguna</option>
                    </select>
                    <label class="mt-4" for="website">Alamat Website:</label>
                    <input class="form-control" type="text" name="website" id="website" value="{{ old('website') }}">
                </div>
            </div>
            <input type="submit" class="btn btn-sm btn-primary mt-5" value="Add User">
            </form>
        </div>
    </div>
</div>
@endsection
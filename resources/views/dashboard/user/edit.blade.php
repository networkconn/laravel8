@extends('dashboard.main', [
    'headClass' => 'UserEdit',
    'title' => 'Management User Untuk Role yang digunakan',
    'classBody' => 'UserEdit',
])
@section('content')
<div class="container-fluid">
    <div class="card">
        <form class="card-body" action="/manageUser/edit/{{$user->id}}" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nama User:</label>
                    <h4>{{$user->name}}</h4>
                    <label for="email">Email:</label>
                    <h4>{{$user->email}}</h4>
                    <label for="is_admin">Role:</label>
                    <select class="form-control" name="is_admin" id="is_admin">
                        <option value="0">User</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="password">Lisensi</label>
                    <h5>{{$user->password}}</h5>
                    <label class="mt-4" for="is_tokes">Cetak Lisensi</label>
                    <input class="form-control" type="text" name="is_tokes" id="is_tokes" value="{{ old('is_tokes', $user->is_tokes )}}">
                </div>
            </div>
            <button class="mt-4 btn btn-sm btn-dark" type="submit">Save Setting</button>
        </form>
    </div>
</div>
@endsection
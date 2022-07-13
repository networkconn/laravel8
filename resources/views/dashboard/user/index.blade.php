@extends('dashboard.main', [
    'headClas' => 'Manage',
    'title' => 'Tambah, Hapus dan Edit Role User',
    'classBody' => 'classBody',
])
@section('content')
<div class="container-fluid">
    @if (session()->has('GagalHapus'))
    <center>
        <div class="col-md-8">
            <div class="alert alert-danger" role="alert">
                {{ session('GagalHapus') }}
            </div>
        </div>
    </center>
    @endif
    @if (session()->has('BerasilHapus'))
    <center>
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                {{ session('BerasilHapus') }}
            </div>
        </div>
    </center>
    @endif
    @if (session()->has('Adduser'))
    <center>
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                {{ session('Adduser') }}
            </div>
        </div>
    </center>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nama User</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <th scope="row">{{ $user->name }}</th>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->is_admin === 1)
                        <p class="text-success">Administrator</p>
                    @else
                        <p>User</p>
                    @endif
                </td>
                <td>
                    @if($user->is_admin === 1)
                    Admin Can't Edit
                    @else
                    <a href="/manageUser/edit/{{$user->id}}"><button class="btn btn-sm btn-warning">Edit</button></a>
                    <form action="/manageUser/delete/{{$user->id}}"
                        class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger ml-1"
                            onclick="return confirm('Are you sure?')" type="submit">
                            Delete
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/manageUser/add">
        <button class="btn btn-primary">Add User</button>
    </a>
</div>
@endsection
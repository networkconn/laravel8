@extends('dashboard.main', [
    'title' => 'Edit Profile',
])
@section('content')
<div class="container-fluid">
    <div class="card">
        <form action="/profile/edit" method="post"
            enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row p-4">
            <div class="col-md-6">
                <h4>Basic Info</h4>
                <label for="name">Nama:</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', auth()->user()->name )}}">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ old('email', auth()->user()->email )}}">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="image">Profile:</label>
                <input class="form-control" type="file" name="image" id="image">
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="email">Pekerjaan:</label>
                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan', auth()->user()->pekerjaan )}}">
                @error('pekerjaan')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="alamat">Alamat:</label>
                <input class="form-control" type="text" name="alamat" id="alamat" value="{{ old('alamat', auth()->user()->alamat )}}">
                @error('alamat')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="tentang">Tentang:</label>
                <textarea class="form-control" name="tentang" id="tentang" rows="10">{{ old('tentang', auth()->user()->tentang )}}</textarea>
                @error('tentang')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6">
                <h4>Kontak Info</h4>
                <label for="phone">No Hp:</label>
                <input class="form-control" type="number" name="phone" id="phone" value="{{ old('phone', auth()->user()->phone )}}">
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="mobile">WhatsApp:</label>
                <input class="form-control" type="number" name="mobile" id="mobile" value="{{ old('mobile', auth()->user()->mobile )}}">
                @error('mobile')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="website">Website:</label>
                <input class="form-control" type="text" name="website" id="website" value="{{ old('website', auth()->user()->website )}}">
                @error('website')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="github">Github:</label>
                <input class="form-control" type="text" name="github" id="github" value="{{ old('github', auth()->user()->github )}}">
                @error('github')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="twitter">Twitter:</label>
                <input class="form-control" type="text" name="twitter" id="twitter" value="{{ old('twitter', auth()->user()->twitter )}}">
                @error('twitter')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="instagram">Instagram:</label>
                <input class="form-control" type="text" name="instagram" id="instagram" value="{{ old('instagram', auth()->user()->instagram )}}">
                @error('instagram')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <label class="mt-4" for="facebook">Facebook:</label>
                <input class="form-control" type="text" name="facebook" id="facebook" value="{{ old('facebook', auth()->user()->facebook )}}">
                @error('facebook')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-success mt-5 ml-2" type="submit">Save</button>
        </div>
        </form>
    </div>
</div>
@endsection
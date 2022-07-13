@extends('dashboard.main', [
    'headClas' => 'w-mod-js',
    'title' => 'Cek Kesulitan keyword di mesin pencari',
    'classBody' => 'notClass'
])
@section('content')
<div class="container-fluid">
    <iframe src="https://artikelmagic.xyz/keyword-difficulty/"
        width="100%" style="min-height: 500px" scrolling="no"
        id="ws-framed-page"
        frameborder="0">
    </iframe>
</div>
@endsection
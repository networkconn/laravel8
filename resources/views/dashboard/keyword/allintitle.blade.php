@extends('dashboard.main', [
    'headClas' => 'wp-toolbar',
    'title' => 'Cek Allintitle keyword',
    'classBody' => 'uiDashboard'
])
@section('content')
<div class="container-fluid">
    <iframe src="https://toolkeyword.artikelmagic.xyz/artikelmagic/"
        width="100%" scrolling="no"
        style="min-height:800px;" id="ws-framed-page"
        frameborder="0">
    </iframe>
</div>
@endsection
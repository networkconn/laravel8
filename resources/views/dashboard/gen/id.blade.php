@extends('dashboard.main', [
    'headClas' => 'wp-toolbar',
    'title' => 'Generate Content Indo',
    'classBody' => 'NewGen'
])
@section('content')
@if (auth()->user()->is_admin)
<iframe src="https://indogenerator.artikelmagic.xyz/"
width="100%" style="min-height: 1100px" frameborder="0">
</iframe>
@else
<div class="lisenseParse">
    <form method="post" class="lisenseInput text-center">
        <h4 class="text-center">Hanya Untuk User Tertentu :)</h4>
    </form>
</div>
@endif
@endsection
@extends('dashboard.main', [
    'headClas' => 'wp-toolbar',
    'title' => 'Tools Riset Keyword For Blog',
    'classBody' => 'IsssmSh',
])
@section('content')
<div class="container-fluid">
<iframe width="100%" height="auto" allowtransparency="true" frameborder="0" id="edb572" scrolling="no" src="https://artikelmagic.xyz/seostudio/embed.php?id=keyword-research&h=0&si=0&r=edb572&site="></iframe>
<script type="text/javascript">
    (function(id) {
        var eventMethod = (window.addEventListener ? "addEventListener" : "attachEvent"), lh = -1;
        window[eventMethod](eventMethod == "attachEvent" ? "onmessage" : "message", function(e) {
        if (e.data.indexOf(id + ':') != 0) return; var h = parseInt(e.data.substring(id.length + 1), 10);
        if (lh != h) document.getElementById(id).style.height = h + 'px'; lh = h;
        }, false);
    })("edb572");
</script>
</div>
@endsection
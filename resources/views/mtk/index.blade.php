<style>body {zoom:2;} form {font-family:monospace;}</style>

Matematika.<br/>

@yield('content')

@if(!isset($di_index))
	@include('mtk._kembali')
@endif

<script>function byid(id_name) { return document.getElementById(id_name); }</script>
@stack('web.script')
@extends('errors::layout')

@section('title', 'Halaman atau Link Rusak!')

@section('message')
<div class="title">
	Error 404 : Halaman tidak ditemukan
</div>
<div class="title">
	<img src="{{ asset('img/404.gif') }}" width="200" alt="">
</div>
	<p>Aww! sepertinya kamu tersesat!, klik <a href="/">link ini</a> untuk kembali</p>
@endsection

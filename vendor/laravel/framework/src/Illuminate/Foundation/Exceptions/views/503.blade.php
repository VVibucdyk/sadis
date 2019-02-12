@extends('errors::layout')

@section('title', 'Service Unavailable')

@section('message')
<div class="title">
	Maafin ya, aku lagi cape :'(
</div>
<div class="title">
	<img src="{{ asset('img/503.jpg') }}" width="200" alt="">
</div>
<div class="title">
	<br>
	Nanti aku balik lagi kok ! :D
</div>
@endsection

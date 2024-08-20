@extends('layouts/template')

@section('content')
	<h1>{{ $artwork->primary_title }}</h1>

	<img src="{{ asset('img/artworks/') }}/{{$artwork->image_path}}" alt="" />

	<p>{!! $artwork->credit_line !!}</p>

	<p><a href="{{ $artwork->institution_link }}" target="_blank">{{ $artwork->home_institution }}</a></p>

@endsection
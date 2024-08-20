@extends('layouts/template')

@section('content')
	<h2>{{ $author->display_name }}</h2>
	<h3>{{ $author->institution_name }}</h3>

@endsection
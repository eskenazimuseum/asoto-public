@extends('layouts/template')

@section('content')
	<h2>Contributing Authors</h2>

	@foreach ($authors as $author)
		<h3><a href="/authors/{{ $author->id }}">{{ $author->display_name }}</a></h3>
	@endforeach
@endsection
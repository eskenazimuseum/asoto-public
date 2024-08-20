@extends('layouts/template')

@section('content')
	<h2 style="border-bottom:1px solid var(--black);">Essays</h2>

	@foreach ($essays as $essay)
		<h3 class="search-results"><a href="/space-of-their-own/essays/{{ $essay->id }}">{{ $essay->title }}<br/><i>{{ $essay->subtitle }}</i></a></h3>
		<p>{{ $essay->author->display_name }}&nbsp;&nbsp;|&nbsp;&nbsp;{{ $essay->author->institution_name }}</p>
		<p>{{ $essay->preview }}</p>
	@endforeach
@endsection
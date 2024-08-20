@extends('layouts/template')

@section('content')
	<h2>Explore Artists</h2>

	@foreach ($artistsAlphabetical as $alphabet => $artists)
		<div class="search-alphabetic-header">
			<h3 class="">{{ $alphabet }}</h3>
		</div>

		@foreach ($artists as $artist)
			<p class="search-results">
				<b><a href="/space-of-their-own/artists/{{ $artist->id }}">{{ $artist->name }}</a></b> ({{ $artist->display_dates }})
				<br/>
				{{ $artist->active_locations }}
			</p>
		@endforeach
	@endforeach
@endsection
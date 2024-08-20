@extends('layouts/template')

@section('content')
	<h2>Explore Artworks</h2>

	@foreach ($artworksAlphabetical as $alphabet => $artworks)
		<div class="search-alphabetic-header">
			<h3 class="">{{ $alphabet }}</h3>
		</div>

		<div class="results">
			@foreach ($artworks as $artwork)
				<div class="result-row">
					@if($artwork->image_path != '' && $artwork->image_path != NULL)
						<img style="max-width: 100px; padding-right: 10px; display: inline-block;" id="{{$artwork->image_path}}" src="{{ asset('img/artworks/') }}/{{$artwork->image_path}}" alt="{{ $artwork->alt_text }}"/><br/>
					@endif
					<b>{{ $artwork->primary_title }}</b>, 
					<a href="/space-of-their-own/artists/{{ $artwork->artist->id }}">{{ $artwork->artist->name }}</a> ({{ $artwork->artist->display_dates }})
				</div>
			@endforeach
		</div>
	@endforeach
@endsection
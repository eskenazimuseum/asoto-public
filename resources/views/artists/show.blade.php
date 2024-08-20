@extends('layouts/template')

@section('content')
	
	<div class="page-title">
		<h1>{{ $artist->name }}</h1>
		<div class="life-dates">{{ $artist->life_dates }}</div>
	</div>
	
	<div class="two-thirds left">
		<p>
			<b>Active in:</b> {{ $artist->active_locations }}
			<br/>
			@if($artist->alternate_names)
				<b>Alternate names:</b> {{ $artist->alternate_names }}
			@endif
		</p>

		<h2>Biography</h2>
		<p>{!! $artist->biography !!}</p>

		<h2>Selected Works</h2>
		<p>
			@foreach ($artist->artworks as $artwork)
				@if ($artwork->featured == true)
					<div class="featured-artwork">
						<a href="{{ asset('img/artworks/') }}/{{$artwork->image_path}}" data-featherlight="image"><img id="{{$artwork->image_path}}" src="{{ asset('img/artworks/') }}/{{$artwork->image_path}}" alt="{{ $artwork->alt_text }}"/></a>
						<br/>
						<p>{!! $artwork->credit_line !!}</p>
					</div>
				@endif
			@endforeach
		</p>
	</div>

	<div class="one-third right">
		<div class="callout-box-rose">
			<h3>Continue Exploring</h3>
			<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}/timeline">View artist timeline</a>
			<br/>
			<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}/works">Selected works</a>
			{{-- <br/>
			<a class="button-dark" href="#">Articles & Essays</a> --}}
		</div>

		<div style="clear:both;">&nbsp;</div>

		<div class="callout-box-white">
			<h3>Circle</h3>
			@foreach($relationships as $relationship)
				<p>
					<span style="font-weight: bold;font-style: italic;font-size:12px;font-variant: small-caps;">{{ $relationship->relationship_type }}</span><br/>
					@if($relationship->related_id != '' && $relationship->related_id != NULL)
						<a href="/space-of-their-own/artists/{{ $relationship->related_id }}">{{ $relationship->display_name }}</a>
					@else
						{{ $relationship->display_name }}
					@endif
				</p>
			@endforeach
		</div>
	</div>

	<div class="bibliography collapsable">
		<h2>Bibliography</h2>
		<p>{!! $artist->bibliography !!}</p>
	</div>
	
	<div class="spacer"></div>

	@if ($artist->entry_notes != '' && $artist->entry_notes != NULL)
		<div class="contributors callout-box-white" style="text-align: left; padding-left: 10px; padding-right: 10px;">
			<h3>Entry Notes</h3>
			<p>{!! $artist->entry_notes !!}</p>
		</div>
		<div class="spacer"></div>
	@endif
@endsection
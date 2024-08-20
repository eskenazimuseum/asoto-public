@extends('layouts/template')

@section('content')

<h1>{{ $artist->name }}</h1>
<h2>Selected Works</h2>

<div class="two-thirds left">
	@foreach($artworks as $artwork)
		<div class="artwork">
			@if ($artwork->image_path != '' && $artwork->image_path != NULL)
				<a href="{{ asset('img/artworks/') }}/{{$artwork->image_path}}" data-featherlight="image"><img src="{{ asset('img/artworks/') }}/{{ $artwork->image_path }}" alt="{{ $artwork->alt_text }}"/></a>
			@endif
			
			<h3>
				{{ $artwork->primary_title }}
				@if ($artwork->date != '' && $artwork->date != NULL)
				@endif
			</h3>
			<p>
				@if ($artwork->date != '' && $artwork->date != NULL)
					{{ $artwork->date }}
				@endif
				@if ($artwork->alternate_titles != '' && $artwork->alternate_titles != NULL)
					<br/><b>Alternate titles:</b> <i>{{ $artwork->alternate_titles }}</i>
				@endif

				@if ($artwork->credit_line != '' && $artwork->credit_line != NULL)
					<br/>
					{!! $artwork->credit_line !!}
				@endif

				@if (($artwork->institution_link != '' && $artwork->institution_link != NULL) && ($artwork->home_institution != '' && $artwork->home_institution != NULL))
					<br/>
					<a href="{{ $artwork->institution_link }}" target="_blank">{{ $artwork->home_institution }}</a>
				@elseif (($artwork->institution_link == '' || $artwork->institution_link == NULL) && ($artwork->home_institution != '' && $artwork->home_institution != NULL))
					<br/>
					{{ $artwork->home_institution }}
				@elseif (($artwork->institution_link != '' && $artwork->institution_link != NULL) && ($artwork->home_institution == '' || $artwork->home_institution == NULL))
					<br/>
					<a href="{{ $artwork->institution_link }}" target="_blank">{{ $artwork->institution_link }}</a>
				@endif

			</p>
		</div>
	@endforeach
</div>

<div class="one-third right">
	<div class="callout-box-rose">
		<h3>Continue Exploring</h3>
		<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}">View artist biography</a>
		<br/>
		<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}/timeline">View artist timeline</a>
{{-- 		<br/>
		<a class="button-dark" href="#">Articles & Essays</a> --}}
	</div>
</div>

<div class="spacer"></div>

@endsection
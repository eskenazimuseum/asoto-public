@extends('layouts/template')

@section('content')

<h1>{{ $artist->name }}</h1>
<h2>Timeline</h2>

<div class="two-thirds left" id="timeline-content">
	<ul class="timeline">
		@foreach($timelines as $timeline)
			<li class="event" data-date="{{ $timeline->date }}">
				<h3>{!! $timeline->title !!}</h3>
				@if($timeline->text != '' && $timeline->text != NULL)
					<p>{!! $timeline->text !!}</p>
				@endif
			</li>
		@endforeach
	</ul>
</div>

<div class="one-third right">
	<div class="callout-box-rose">
		<h3>Continue Exploring</h3>
		<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}">View artist biography</a>
		<br/>
		<a class="button-dark" href="/space-of-their-own/artists/{{ $artist->id }}/works">Selected works</a>
{{-- 		<br/>
		<a class="button-dark" href="#">Articles & Essays</a> --}}
	</div>
</div>

<div class="spacer"></div>

@endsection
@extends('layouts/template')

@section('content')
	<h2>{{ $essay->title }}</h2>
	<h3>{{ $essay->subtitle }}</h3>
	
	<div class="two-thirds left" id="essay-body">
		{!! $essay->body !!}
	</div>

	<div class="one-third right">
		<div class="callout-box-rose">
			<img class="profile-image" src="{{ asset('img/authors/') }}/{{$essay->author->image_path}}" alt="" />
			<h3>{{ $essay->author->display_name }}</h3>
			<p>{{ $essay->author->institution_name }}</p>
		</div>
		<div class="spacer"></div>
		<div class="callout-box-white">
			<h3>How to Cite</h3>
			<div style="text-align:left; padding:0 10px">
				<p>
					<b>MLA</b>
				</p> 
				{!! $essay->cite_mla !!}
				
				<p>
					<b>Chicago</b>
				</p>
				{!! $essay->cite_chicago !!}
			</div>
		</div>
	</div>

	@if ($essay->bibliography != '' && $essay->bibliography != NULL)
		<div class="bibliography collapsable">
			<h2>Bibliography</h2>
			<p>{!! $essay->bibliography !!}</p>
		</div>
	@else
		<div class="spacer">&nbsp;</div>
	@endif

	
@endsection
@extends('layouts/template')

@section('content')
	<h2>Add New Artist Timeline Entry</h2>

	<form action="/timelines" method="POST" enctype="multipart/form-data">
		@csrf

		<label for="artist">Artist</label>
		<select name="artist" id="artist">
			<option value="">Choose an artist</option>
			@foreach ($artists as $artist)
		        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
		    @endforeach
		</select>
		<br/>
		
		<label for="order">order</label>
		<input name="order" id="order" type="text">
		<br/>
		
		<label for="date">Date</label>
		<input name="date" id="date" type="text">
		<br/>
		
		<label for="text">Text</label>
		<input name="text" id="text" type="text">
		<br/>
		
		<input type="hidden" id="creator" name="creator" value="tuckercc">

		<button type="submit">Create artist timeline entry</button>
	</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
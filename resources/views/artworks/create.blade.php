@extends('layouts/template')

@section('content')
	<h2>Add New Artwork</h2>

	<form action="/artworks" method="POST" enctype="multipart/form-data">
		@csrf

		<label for="primary_title">Primary Title</label>
		<input name="primary_title" id="primary_title" type="text">
		<br/>
		
		<label for="alternate_titles">Alternate Titles</label>
		<input name="alternate_titles" id="alternate_titles" type="text">
		<br/>

		<label for="artist_id">Artist</label>
		<select name="artist_id" id="artist_id">
			<option value="">Select artist</option>
			@foreach ($artists as $artist)
		        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
		    @endforeach
		</select>
		<br/>
		
		<label for="credit_line">Credit Line</label>
		<input name="credit_line" id="credit_line" type="text">
		<br/>
		
		<label for="home_institution">Home Institution</label>
		<input name="home_institution" id="home_institution" type="text">
		<br/>
		
		<label for="institution_link">Institution Link</label>
		<input name="institution_link" id="institution_link" type="text">
		<br/>

		<label for="image_path">Artwork Image</label>
		<input name="image_path" id="image_path" type="file" accept="image/png, image/jpeg">
		<br/>
		
		<input type="hidden" id="creator" name="creator" value="tuckercc">

		<button type="submit">Create artwork record</button>
	</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
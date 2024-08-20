@extends('layouts/template')

@section('content')
	<h2>Add New Artist</h2>

	<form action="/artists" method="POST" enctype="multipart/form-data">
		@csrf

		<label for="name">Artist Name</label>
		<input name="name" id="name" type="text">
		<br/>
		
		<label for="alternate_names">Alternate Names</label>
		<input name="alternate_names" id="alternate_names" type="text">
		<br/>
		
		<label for="life_dates">Life Dates</label>
		<input name="life_dates" id="life_dates" type="text">
		<br/>
		
		<label for="active_locations">Active Locations</label>
		<input name="active_locations" id="active_locations" type="text">
		<br/>
		
		<label for="media_used">Media Used</label>
		<input name="media_used" id="media_used" type="text">
		<br/>

		<label for="artist_image">Artist Image</label>
		<input name="artist_image" id="artist_image" type="file" accept="image/png, image/jpeg">
		<br/>
		
		<label for="biography">Biography</label>
		<textarea name="biography" id="biography" class="ckeditor form-control"></textarea>
		<br/>
		
		<label id="bibliography">Bibliography</label>
		<textarea name="bibliography" id="bibliography" class="ckeditor form-control"></textarea>
		<br/>
		
		<input type="hidden" id="creator" name="creator" value="tuckercc">

		<button type="submit">Create artist record</button>
	</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
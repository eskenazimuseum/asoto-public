@extends('layouts/template')

@section('content')
	<h2>Create New Author</h2>

	<form action="/authors" method="POST" enctype="multipart/form-data">
		@csrf

		<label for="first_name">First Name</label>
		<input name="first_name" id="first_name" type="text">
		<br/>
		
		<label for="last_name">Last Name</label>
		<input name="last_name" id="last_name" type="text">
		<br/>
		
		<label for="display_name">Display Name</label>
		<input name="display_name" id="display_name" type="text">
		<br/>
		
		<label for="institution_name">Institution Name</label>
		<input name="institution_name" id="institution_name" type="text">
		<br/>
		
		<label for="image_path">Author Image</label>
		<input name="image_path" id="image_path" type="file" accept="image/png, image/jpeg">
		
		<input type="hidden" id="creator" name="creator" value="tuckercc">

		<button type="submit">Create Author</button>
	</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
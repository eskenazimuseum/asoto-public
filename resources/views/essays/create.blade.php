@extends('layouts/template')

@section('content')
	<h2>Create New Essay</h2>

	<form action="{{ route('essays.store') }}" method="POST" enctype="multipart/form-data">
		@csrf

		<label for="author">Author</label>
		<select name="author" id="author">
			<option value="">Select author</option>
			@foreach ($authors as $author)
		        <option value="{{ $author->id }}">{{ $author->display_name }}</option>
		    @endforeach
		</select>
		<br/>

		<label for="title">Title</label>
		<input name="title" id="title" type="text">
		<br/>
		
		<label for="subtitle">Subtitle</label>
		<input name="subtitle" id="subtitle" type="text" class="form-control">
		<br/>
		
		<label for="preview">Short Description / Summary</label>
		<textarea name="preview" id="preview" class="form-control"></textarea>
		<br/>
		
		<label for="cite_mla">MLA Citation</label>
		<textarea type="text" name="cite_mla" id="cite_mla" class="form-control"></textarea>
		<br/>
		
		<label for="cite_chicago">Chicago Citation</label>
		<textarea name="cite_chicago" id="cite_chicago" class="form-control"></textarea>
		<br/>
		
		<label for="body">Essay Content</label>
		<textarea name="body" id="body" class="form-control"></textarea>
		<br/>
		
		<label for="bibliography">Bibliography</label>
		<textarea name="bibliography" id="bibliography" class="form-control"></textarea>
		<br/>
		
		<input type="hidden" id="creator" name="creator" value="tuckercc">

		<button type="submit">Publish essay</button>
	</form>

		  <script type="text/javascript">
			ClassicEditor
				.create( document.querySelector( '#preview' ) )
				.catch( handleError );

			ClassicEditor
				.create( document.querySelector( '#cite_mla' ) )
				.catch( handleError );

			ClassicEditor
				.create( document.querySelector( '#cite_chicago' ) )
				.catch( handleError );

			ClassicEditor
				.create( document.querySelector( '#body' ) )
				.catch( handleError );

			ClassicEditor
				.create( document.querySelector( '#bibliography' ) )
				.catch( handleError );

			function handleError( error ) {
				console.error( error );
			}
		</script>

@endsection
@extends('partials.master')
@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<h1>Add Song</h1>
		<hr>
		<form method="POST" action="/submitSong">
			{{csrf_field()}}

			<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" id="title" name="title">
			</div>

			<div class="form-group">
			    <label for="artist">Artist</label>
			    <input type="text" class="form-control" id="artist" name="artist">
			</div>

			<div class="form-group">
				<label for="lyrics">Lyrics:</label>
				<textarea class="form-control" rows="5" id="lyrics" name="lyrics"></textarea>
			</div>

			<button class="btn btn-success">Submit</button>
		</form>
	</div>
</div>
@endsection
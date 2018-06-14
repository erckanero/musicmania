<!--//////////////////// ADD NEW CONTENT \\\\\\\\\\\\\\\\\\\\-->
<div id="addNewContent" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Song</h4>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<form method="POST" action="{{ route('song.store') }}">
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

						<div class="submitBtnDiv">
							<button class="btn btn-success submitBtn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<!--//////////////////// EDIT CONTENT \\\\\\\\\\\\\\\\\\\\-->
		<div id="editContent" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Song</h4>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
							<form method="POST" action="" id="editForm">
							{{ method_field('PUT') }}
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

								<div class="submitBtnDiv">
									<button class="btn btn-success submitBtn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!--//////////////////// DELETE CONTENT \\\\\\\\\\\\\\\\\\\\-->
		<div id="deleteContent" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Delete Song</h4>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
							<form method="POST" action="" id="deleteForm">
							{{ method_field('DELETE') }}
								{{csrf_field()}}

								<div class="submitBtnDiv">
								<h2 class="center">Are you sure you want to delete?</h2>
									<button class="btn btn-warning submitBtn"> Yes </button>
									<button type="button" class="btn btn-default submitBtn" data-dismiss="modal"> No </button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
@extends('partials.master')
	@section('content')

	        <div class="container-fluid">
	            <!-- Page Heading -->
	            <div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">
	                        MusicMania <small>List of Songs </small>
	                    </h1>
	                        <button type="button" class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#addNewContent"> Add New Content </button>
	                    <ol class="breadcrumb">
	                        <li class="active">
	                            <i class="fa fa-dashboard"></i> Dashboard
	                        </li>
	                    </ol>

	                    <div class="row">
	                        <div class="col-lg-10 col-lg-offset-1">
	                            <div class="table-responsive">
	                                <table class="table table-bordered table-hover" id="example1">
	                                    <thead>
	                                        <tr>
	                                            <th>Title</th>
	                                            <th>Artist</th>
	                                            <th>Date Created</th>
	                                            <th>Action</th>
	                                        </tr>
	                                    </thead>

	                                    <tbody>
	                                    @foreach($songs as $song)
	                                        <tr>
	                                            <td><a href="{{ route('song.show', ['id' => $song->id]) }}">{{ $song->title }}</a></td>
	                                            <td>{{ $song->artist }}</td>
	                                            <td>{{ $song->created_at->toDateString() }}</td>
	                                            <td class="text-center">
	                                            	<button type="button" class="btn btn-primary editContent"
	                                            		data-toggle="modal" 
	                                            		data-target="#editContent"
	                                            		data-id="{{ $song->id }}"
	                                            		data-title="{{ $song->title }}"
	                                            		data-artist="{{ $song->artist }}"
	                                            		data-lyrics="{{ $song->lyrics }}"> <i class="fa fa-edit"></i> </button>

	                                            	<button type="button" class="btn btn-danger deleteContent"
	                                            		data-toggle="modal" 
	                                            		data-target="#deleteContent"
	                                            		data-id="{{ $song->id }}"> <i class="fa fa-trash"></i> </button>
	                                            </td>
	                                        </tr>
	                                    @endforeach
	                                       
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	      
	                    </div>
	                </div>
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.container-fluid -->

		@include('partials.modal')
		
		<script>

			$(document).on("click", ".editContent", function () {

			    var id = $(this).data('id');
				$('#editForm').submit(function(){
				    this.action = '/song/' + id;
				    return true;
				  });

			     var title = $(this).data('title');
			     $(".modal-content #title").val( title );

			     var artist = $(this).data('artist');
			     $(".modal-content #artist").val( artist );

			     var lyrics = $(this).data('lyrics');
			     $(".modal-content #lyrics").val( lyrics );
			});

			$(document).on("click", ".deleteContent", function () {

			    var id = $(this).data('id');
				$('#deleteForm').submit(function(){
				    this.action = '/song/' + id;
				    return true;
				  });
			});

		  $(function () {
		    $("#example1").DataTable();
		    $('#example2').DataTable({
		      "paging": true,
		      "lengthChange": false,
		      "searching": false,
		      "ordering": true,
		      "info": true,
		      "autoWidth": false
		    });
		  });
		  

		</script>

	@endsection
@extends('partials.master')
	@section('content')
		<div class="container-fluid">
            <div class="row">
	            <div class="col-lg-12">
	            	<ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> <a href="/dashboard">Dashboard</a> / {{ $song->title }}
                        </li>
	                </ol>
	                <p class="back">
	                	<a href="/dashboard"> <i class="fa fa-angle-double-left"></i> Back </a>
	                </p>
	            	<h1>{{$song->title}}</h1>
	            	<small>by: {{$song->artist}} | posted on: {{ $song->created_at->toDateString() }}</small>
	            	<hr>
	            	<p class="lyrics">{{$song->lyrics}}</p>
	            </div>
	        </div>
	    </div>

	@endsection
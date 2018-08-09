@extends('layouts.app')

@section('content')

	@include('admin.include.error')

	<div class="panel panel-default">

		<div class="panel-heading">
			Create a new post
		</div>

		<div class="panel-body">
			<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="category">Select Category</label>
					<select name="category_id" id="category" class="form-control">

						@foreach($categories as $category)

							<option value="{{$category->id}}" >{{$category->name}}</option>

						@endforeach

					</select>
				</div>

				<div class="form-group">
					<label for="fcontent">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-success">
							Store post
						</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>

@stop()

@section('styles')

	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

@stop

@section('scripts')

	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

	<script>
		$(document).ready(function() {
		$('#content').summernote();
		});
	</script>

@stop
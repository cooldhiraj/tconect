@extends('layouts.app')



@section('content')

	@include('admin.include.error')

	<div class="panel panel-default">

		<div class="panel-heading">
			My profile
		</div>

		<div class="panel-body">
			<form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="title" value="{{$user->name}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="featured" value="{{$user->email}}" class="form-control">
				</div>

                <div class="form-group">
					<label for="new_password">New password</label>
					<input type="password" name="featured" class="form-control">
				</div>

                <div class="form-group">
					<label for="new_avatar">Upload new Avatar</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="about">About You</label>
					<textarea name="about_you" id="about" cols="5" rows="5" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-success">
							Update profile
						</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>

@stop()
@extends('layouts.app')



@section('content')

	@include('admin.include.error')

	<div class="panel panel-default">

		<div class="panel-heading">
			Create a new category
		</div>

		<div class="panel-body">
			<form action="{{route('category.store')}}" method="POST" >
				{{csrf_field()}}

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-success">
							Store category
						</button>
					</div>
				</div>

			</form>
		</div>
		
	</div>

@stop()
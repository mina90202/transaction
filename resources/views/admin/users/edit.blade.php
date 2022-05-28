@extends('admin-layout.master')
@section('title', 'Update Role')
@section('content')

	<div class="card">
		@include('admin-layout.errors')
			<form action="{{route('roles.update', $role->id)}}" method="POST" enctype='multipart/form-data'>
				  {{csrf_field()}}
				    @method('PUT')
								<div class="card-header">

									<h5 class="card-title mb-0">Update the Denomination  {{$role->name}}</h5>
								</div>
								<div class="card-body">
									<label>Name:</label>
										<input value="{{$role->name}}" type="text" class="form-control" placeholder="" name="name" style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('name'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('name') }}
                          </p>
                          @endif
								</div>

								<button class="btn btn-success" type="submit" > Update the Role
            </button>
</form>

							</div>
@endsection
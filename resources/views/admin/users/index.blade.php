@extends('admin-layout.master')
@section('title', 'Users')
@section('content')

	<div class="card">
			<div class="row">
							<div class="col-12 col-lg-12 col-xxl-9 d-flex">
								<div class="card flex-fill">
									<div class="card-header">

@include('admin-layout.errors')

										<h5 class="card-title mb-0">Users</h5>
									</div>

													<a href="{{route('users.create')}}" class="btn btn-success" type="submit" > Add new User </a>
          
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th class="d-none d-md-table-cell">Users name</th>
												<th class="d-none d-md-table-cell">Actions</th>
		
											</tr>
										</thead>
										<tbody>
											@foreach($users as $user)
												<tr>
												<td>{{$user->name}}</td>
												<td class="d-none d-md-table-cell">
													<a type="button" class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Update</a>
													 <form action="{{ route('users.destroy',[$user->id]) }}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit"  name="del_inbox_submit" class="btn btn-danger"> Delete <i class="fa fa-trash-o"></i></button>
                    </form>

												</td>
											</tr>
											@endforeach


										</tbody>
									</table>
								</div>
							</div>
			
						</div>

							</div>
@endsection
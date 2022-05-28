@extends('admin-layout.master')
@section('title', 'Transaction ')
@section('content')

	<div class="card">
		@include('admin-layout.errors')
			<div class="row">
							<div class="col-12 col-lg-12 col-xxl-9 d-flex" style="margin: auto; margin-top: 50px">
								<div class="card flex-fill">
									<div class="card-header">



										<h5 class="card-title mb-0">Transaction Logs</h5>
									</div>

													<a href="{{route('transactions.create')}}" class="btn btn-success" type="submit" > Add new record 
            </a>
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th>Customer No</th>
												<th>Customer Name</th>
												<th class="d-none d-xl-table-cell">Account Number</th>
												<th class="d-none d-xl-table-cell">Facility Type</th>
												<th class="d-none d-xl-table-cell">Legal Form </th>
												<th class="d-none d-md-table-cell">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach($transactions as $transaction)
											<tr>
												<td>{{$transaction->customer_no}}</td>
												<td class="d-none d-xl-table-cell">{{$transaction->account_name}}</td>
												<td class="d-none d-xl-table-cell">{{$transaction->account_no}}</td>
												<td class="d-none d-xl-table-cell">{{$transaction->facility_type}}</td>
												<td class="d-none d-xl-table-cell">{{$transaction->legal_form}}</td>
												<td class="d-none d-md-table-cell" style="display:  flex !important">
													<a type="button" style="margin-right: 10px" class="btn btn-primary" href="{{route('transactions.edit', $transaction->id)}}"> <i class="fa fa-edit"></i></a>
													 <form action="{{ route('transactions.destroy',[$transaction->id]) }}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit"  name="del_inbox_submit" class="btn btn-danger">  <i class="fa fa-trash-o"></i></button>
                    </form>

												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
<br>
									   {{ $transactions->links() }}
								</div>
							</div>
			
						</div>

							</div>
@endsection
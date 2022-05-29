@extends('admin-layout.master')
@section('title', 'Monthly Reports')
@section('content')



<main class="content" style="padding: 0">


	<div class="col-12">
	<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Search Here... </h5>
								</div>

										<div class="card-body">
									<label>Date from... </label>
									<form action="{{url('/monthly/{$date}')}}" method="GET">
									<input value="" type="date" class=" form-control"  required name="date_from" style="border:{{ $errors->has('date') ? '1px solid #fc6a55' : ''}}">
									 
									 <br>
                          	<label>Date To... </label>

									<input value="" type="date" class=" form-control"  required name="date_to" style="border:{{ $errors->has('date') ? '1px solid #fc6a55' : ''}}">
								
                          <br>

                           <select  class="form-control" required name="filter" required>
                          	<option value="">Choose the option</option>
                          	<option value="Supplier">Supplier</option>
                          	<option value="Buyer">Buyer</option>
                          </select>
								</div>

										 
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit"  name="del_inbox_submit" class="btn btn-success"> Search <i class="fa fa-search-o"></i></button>
                    </form>
								
								<div class="card-body">
									<div>
										<label class="form-check">
		

          </label>
								
										
									</div>
						
								</div>
							</div>

							 </div>


				</main>





@endsection
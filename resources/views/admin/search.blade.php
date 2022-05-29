@extends('admin-layout.master')
@section('title', 'Search Results')
@section('content')



<main class="content" style="padding: 0">


	<div class="col-12">
	<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Search Here... </h5>
								</div>

										<div class="card-body">
									<label>Search... </label>
									<form action="{{url('/getdata/{$record}')}}" method="GET">
									<input value="{{old('date')}}" type="text" class=" form-control" placeholder="" required name="record" style="border:{{ $errors->has('date') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('date'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('date') }}
                          </p>
                          @endif
                          <br>
                           <select  class="form-control" required name="filter" required>
                          	<option value="">Choose the option</option>
                          	<option value="cs_no">Customer No</option>
                          	<option value="s_code">Supplier Code</option>
                          	<option value="b_code">Buyer Code</option>
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



					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">
							
							<div class="col-4 d-none d-sm-block">
								<h3><strong>{{$trans->count()}} records found for'{{$search}}' </strong></h3>
							</div>

							<div class="col-2 d-none d-sm-block"></div>

					

						</div>

@forelse($trans as $tran)

<div class="row">
        
         
	<div class="col-12">
	<div class="">
								<div class="">

									<div class="form-check" style="display:flex; justify-content: center">
                   
                  
                   <div class="card" style="flex-grow: 1">

                   	<div class="card-body">
									   <i class="align-middle" data-feather="credit-card"></i> Customer No : {{$tran->customer_no}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Account Name :  {{$tran->account_name}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Account No : {{$tran->account_no}}   <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Facility Type : {{$tran->facility_type}} <Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Legal Form : {{$tran->legal_form}} <Br><Br>
        </div>
        </div>
     
     @if($tran->s_b == 'Supplier')
         <div class="card" style="margin-left: 20px; flex-grow:1">
                   	<div class="card-body">
           	<h6 style="margin-bottom: 20px;">Supplier data:</h6>
  <i class="align-middle" data-feather="git-merge"></i> S/B Code : {{$tran->s_b_code}}<Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i> Amount : {{$tran->amount}}<Br><Br>
           <i class="align-middle" data-feather="clock"></i> Date of Transaction : {{$tran->date_trs}}<Br><Br>

            <i class="align-middle" data-feather="git-merge"></i> Type of S/B : {{$tran->type_sb}}<Br><Br>
</div>
         </div>

@endif

 @if($tran->s_b == 'Buyer')

  <div class="card" style="margin-left: 20px; flex-grow:1">
                   	<div class="card-body">
           	<h6 style="margin-bottom: 20px;">Buyer data:</h6>
  <i class="align-middle" data-feather="git-merge"></i> S/B Code : {{$tran->s_b_code}}<Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i> Amount : {{$tran->amount}}<Br><Br>
           <i class="align-middle" data-feather="clock"></i> Date of Transaction : {{$tran->date_trs}}<Br><Br>

           <i class="align-middle" data-feather="git-merge"></i> Maturity Date : {{$tran->maturity_date}}<Br><Br>
           <i class="align-middle" data-feather="git-merge"></i> Tenor : {{$tran->tenor}}<Br><Br>
           <i class="align-middle" data-feather="git-merge"></i> Drawdown Amount : {{$tran->drawdown_amount}}<Br><Br>
</div>
         </div>

         @endif
    								
									</div>



									@empty

										<div class="card-header">
									<h5 class="card-title mb-0">Ops..! No Results Found</h5>
								</div>
						
						@endforelse 

								</div>
							</div>
 
							 </div>



				</main>





@endsection
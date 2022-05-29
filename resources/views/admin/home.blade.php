@extends('admin-layout.master')
@section('title', 'Home Page')
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


								


							
							</div>

							 </div>



					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">
							
							<div class="col-4 d-none d-sm-block">
								<h3><strong>Transaction Log </strong></h3>
							</div>

							<div class="col-2 d-none d-sm-block"></div>

					

						</div>

@foreach($transactions as $tran)

<div class="row">
        
         
	<div class="col-12">
	<div class="">
								<div class="">

									<div class="form-check" style="display:flex; justify-content: center">
                   
                   
                   <div class="card" style="flex-grow: 1">

                   	<div class="card-body">

                   		<div style="margin-bottom: 20px; display: flex;">
                   			<h6 style="margin-right: 60px">Customer data:</h6> 
                   			<i class="align-middle" data-feather="clock"></i> <span>{{$tran->created_at->diffForHumans()}}</span>
                   		</div>

									   <i class="align-middle" data-feather="credit-card"></i> Customer No : {{$tran->customer_no}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Account Name :  {{$tran->account_name}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Account No : {{$tran->account_no}}   <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Facility Type : {{$tran->facility_type}} <Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Legal Form : {{$tran->legal_form}} <Br><Br>
           <i class="align-middle" data-feather="clock"></i> Date of Transaction : {{$tran->date_trs}}<Br><Br>

        </div>
        </div>

           
         <div class="card" style="margin-left: 20px; flex-grow:1">
                   	<div class="card-body">
           	<h6 style="margin-bottom: 20px;">Email data:</h6>
           <i class="align-middle" data-feather="clock"></i> Date of Transaction : {{$tran->date_trs}}<Br><Br>
            <i class="align-middle" data-feather="edit-2"></i> Sent By : {{$tran->sender}}<Br><Br>
           <i class="align-middle" data-feather="edit-2"></i> Reply By : {{$tran->officer}}<Br><Br>
           <i class="align-middle" data-feather="clock"></i> Sent time : {{$tran->sent_time}} <Br><Br>
           <i class="align-middle" data-feather="clock"></i> Reply Time : {{$tran->reply_time}}<Br><Br>
           <i class="align-middle" data-feather="clock"></i> Avg Time : {{$tran->avgtime }} mins<Br><Br>
</div>
         </div>


<div class="card" style="margin-left:20px; flex-grow: 1;">
                   	<div class="card-body">
           	<h6 style="margin-bottom: 20px;">Supplier/Buyer data:</h6>
           <i class="align-middle" data-feather="git-merge"></i> S/B : {{$tran->s_b}}<Br><Br>

@if($tran->maturity_date && $tran->tenor && $tran->drawdown_amount !== null)
        <i class="align-middle" data-feather="git-merge"></i> Maturity Date : {{$tran->maturity_date}}<Br><Br>
           <i class="align-middle" data-feather="git-merge"></i> Tenor : {{$tran->tenor}}<Br><Br>
           <i class="align-middle" data-feather="git-merge"></i> Drawdown Amount : {{$tran->drawdown_amount}}<Br><Br>
 @endif
           <i class="align-middle" data-feather="git-merge"></i> S/B Code : {{$tran->s_b_code}}<Br><Br>
           <i class="align-middle" data-feather="git-merge"></i> CR of S/B : {{$tran->cr_s_b}}<Br><Br>
            <i class="align-middle" data-feather="git-merge"></i> Type of S/B : {{$tran->type_sb}}<Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i> Amount : {{$tran->amount}}<Br><Br>


         </div>
</div>


         <div class="card" style="margin-left: 20px; flex-grow: 1;">
                   	<div class="card-body">
           	<h6 style="margin-bottom: 20px;">Other data:</h6>

           <i class="align-middle" data-feather="edit-2"></i> Rule Hitted : {{$tran->rule_hitted ? $tran->rule_hitted : 'Clear' }}<Br><Br>
           <i class="align-middle" data-feather="edit-2"></i> Junstification : {{$tran->justification}}<Br><Br>
           <i class="align-middle" data-feather="edit-2"></i> Disbursement type : {{$tran->disbursement_type}}<Br><Br>
           <!-- <i class="align-middle" data-feather=" trending-up"></i> Status :  -->
   <!-- <span class="badge bg-danger me-1 my-1">Not Settle</span>  <span class="badge bg-success me-1 my-1">Settle</span> -->
            <Br><Br>
          </div>
</div>

         
								
										
									</div>
						
						@endforeach

								</div>
							</div>
{{ $transactions->links() }}
							 </div>



				</main>





@endsection
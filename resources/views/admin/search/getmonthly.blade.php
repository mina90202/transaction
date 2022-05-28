@extends('admin-layout.master')
@section('title', 'Search Results')
@section('content')



<main class="content" style="padding: 0">


	<div class="col-12">
	<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">The Report </h5>
								</div>

													
								<div class="card-body">
									<div>
 <h6>The report now is available ! </h6>
										<label class="form-check">
										
		

          </label>
								
										
									</div>
						
								</div>
							</div>

							 </div>



					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">
							
			
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
									   <i class="align-middle" data-feather="credit-card"></i> Total Number of transactions : {{$count}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i>  :  Total Amounts {{$sum}}<Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Average Time : {{$avg}}   <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Total Hitted : {{$total_hitted}} <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Total Amount Hitted: {{$total_amount_hitted}} <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Total Clear : {{$total_clear}} <Br><Br>
           <i class="align-middle" data-feather="credit-card"></i> Total Amount Clear : {{$total_amount_clear}} <Br><Br>
        </div>
        </div>
     
   
    								
									</div>



									@empty

										<div class="card-header">
									<h5 class="card-title mb-0">Ops..! No Results Found</h5>
								</div>
						
						@endforelse 

								</div>
								{{ $trans->links() }}
							</div>

							 </div>



				</main>





@endsection
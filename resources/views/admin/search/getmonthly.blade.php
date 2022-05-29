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
 <h6>The reports now are available from {{$search_date}} </h6>
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

@if($count > 0)

<div class="row">
       
         
	<div class="col-12">

			<div class="col-xl-6 col-xxl-7">
								<div class="card flex-fill w-100">
									<div class="card-header">

										<h5 class="card-title mb-0">Recent Movement</h5>
									</div>
									<div class="card-body py-3">
										<div class="chart chart-sm">
											<canvas id="chartjs-dashboard-line"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>

	<div class="">
								<div class="">

									<div class="form-check" style="display:flex; justify-content: center">
                  
                  
                   <div class="card" style="flex-grow: 1">

                   	<div class="card-body">
									   <i class="align-middle" data-feather="credit-card"></i> Total Number of transactions : {{$count}}<Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i>  :  Total Amounts {{$sum}}<Br><Br>
           <i class="align-middle" data-feather="clock"></i> Average Time : {{$avg}}   <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Total Hitted : {{$total_hitted}} <Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i> Total Amount Hitted: {{$total_amount_hitted}} <Br><Br>
           <i class="align-middle" data-feather="menu"></i> Total Clear : {{$total_clear}} <Br><Br>
           <i class="align-middle" data-feather="dollar-sign"></i> Total Amount Clear : {{$total_amount_clear}} <Br><Br>
        </div>
        </div>
     
  
									</div>



									@else

										<div class="card-header">
									<h5 class="card-title mb-0">Ops..! No Results Found</h5>
								</div>
						
						@endif 

								</div>
								
							</div>

							 </div>



				</main>


	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["T.Trans", "T.Amount", "Avg Time", "Total Hitted", "T.amount Hitted", "Total Clear", "T.Amount.Clear"],
					datasets: [{
						label: "Record",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							{{$count}},
							{{$sum}},
							{{$avg}},
							{{$total_hitted}},
							{{$total_amount_hitted}},
							{{$total_clear}},
							{{$total_amount_clear}},							
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},

					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>



@endsection
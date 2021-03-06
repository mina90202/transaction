<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('img/icons/icon-48x48.png')}}" />

	<title>Transactions Log - @yield('title')</title>

	<link href="{{asset('admin/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>


</head>

<body>
	<div class="wrapper">
	@include('admin-layout.nav')

			<div class="main">
				<nav class="navbar navbar-expand navbar-light navbar-bg">
					<a class="sidebar-toggle d-flex">
	          <i class="hamburger align-self-center"></i>
	        </a>

					@include('admin-layout.dropdown')

				<main class="content">
					<div class="container-fluid p-0">


@yield('content')


					</div>
				</main>

			@include('admin-layout.footer')
		</div>
	</div>

	<script src="{{asset('admin/js/app.js')}}"></script>


	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				}
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
			});

		});
	</script>
    <script type="text/javascript">
    	function toggleForms (event) {
    		const triggerID = event.target.id;
    		const avaForms = ['form__req_a_shipment', 'form__send_a_shipment'];
    		const selectedForm = document.getElementById('form__' + triggerID);
    		for (const id of avaForms) {
    			const f = document.getElementById(id);
    			f.style.display = 'none';
    		}
    		selectedForm.style.display = 'block';
    	}
    </script>
    <script type="text/javascript">
       $(document).ready(function () {

			  $('#exampleModal').modal('hide');
			  let show = false;
			  let showArr = false;
			  $(document).on('input', '.number-separator', function (e) {
			    if (/^[0-9.,]+$/.test($(this).val())) {
			      $(this).val(
			        parseFloat($(this).val().replace(/,/g, '')).toLocaleString('en')
			      );
			    } else {
			      $(this).val(
			        $(this)
			          .val()
			          .substring(0, $(this).val().length - 1)
			      );
			    }
			  });

          const showModal = document.querySelectorAll('.showModal');
          for (const el of showModal) {

          	el.addEventListener('click', function () {

			  	show = !show;
			  		if (show) {
			  	 	 $('#exampleModal').modal('show')
			  	 	} else {
			  	 		 $('#exampleModal').modal('hide')
			  	 	}		
			  	});
          }

          const showModalarrived = document.querySelectorAll('.showModalarrived');

         for (const el of showModalarrived) {

          	el.addEventListener('click', function () {

			  	showArr = !showArr;
			  		if (showArr) {
			  	 	 $('#exampleModalArr').modal('show')
			  	 	} else {
			  	 		 $('#exampleModalArr').modal('hide')
			  	 	}		
			  	});
          }
	
			});





    </script>

</body>

</html>
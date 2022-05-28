	<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{url('/')}}">
          <span class="align-middle" style="margin-left: 20px" >Transaction System</span>
          <br><br>
          <img src="https://www.cibeg.com/-/media/feature/navigation/footer/logo-white.svg" style="margin-left: 20px" class="" height="50px"  width="100px" alt="CIB image" />
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Quick links
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="{{route('transactions.index')}}">
              <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Add new Transaction</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">System Users</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="file"></i> <span class="align-middle">Monthly Reports</span>
            </a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{url('monthly')}}">Monthly </a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Year to date</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Interactive</a></li>
						</ul>
					</li>

				</ul>

			</div>
		</nav>
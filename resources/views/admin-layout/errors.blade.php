@if(Session::has('record'))
<div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <div class="alert-message">
                        <strong>Done!</strong> {{Session::get('record')}}
                      </div>
  </div>
@endif




@if(Session::has('delete'))
<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <div class="alert-message">
                        <strong>Done!</strong> {{Session::get('delete')}}
                      </div>
  </div>
@endif


@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <div class="alert-message">
                        <strong>Ops!</strong> {{Session::get('error')}}
                      </div>
  </div>
@endif


@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <div class="alert-message">
                        <strong>Done!</strong> {{Session::get('success')}}
                      </div>
  </div>
@endif
@extends('admin-layout.master')
@section('title', 'Transactions Log - Edit')
@section('content')

	<div class="card">
		  @include('admin-layout.errors')

			<form action="{{route('transactions.update', $transaction->id)}}" method="POST" enctype='multipart/form-data' class="d-none d-sm-inline-block">
				  {{csrf_field()}}
				   @method('PUT')
								<div class="card-header">

									<h5 class="card-title mb-0">Update a record</h5>
								</div>
								<div class="card-body">
									<label>	Customer No:</label>
									<input value="{{$transaction->customer_no}}" type="text" minlength="10" maxlength="10" class="form-control" name="customer_no" style="border:{{ $errors->has('customer_no') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('customer_no'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('customer_no') }}
                          </p>
                          @endif

								</div>

								<div class="card-body">
									<label>Customer Name:</label>
									<input value="{{$transaction->account_name}}" type="text" class="form-control" name="account_name" style="border:{{ $errors->has('account_name') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('account_name'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('account_name') }}
                          </p>
                          @endif
								</div>



							
								<div class="card-body">
									<label>Account No :</label>
									<input value="{{$transaction->account_no}}" type="text" maxlength="12" minlength="12" class=" form-control" name="account_no" style="border:{{ $errors->has('account_no') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('account_no'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('account_no') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label>Facility Type :</label>
											<select  class="form-control" required name="facility_type">
										<option value="{{$transaction->facility_type}}" >{{$transaction->facility_type}}</option>
										<option value="RBF">RBF</option>
										<option value="SBL">SBL</option>
										<option value="GL">GL</option>
										<option value="Flash Cash">Flash Cash</option>
									</select>

									 @if($errors->has('facility_type'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('facility_type') }}
                          </p>
                          @endif
								</div>

							
								<div class="card-body">
									<label>Legal Form :</label>
									
											<select  class="form-control" required name="legal_form">
										<option value="{{$transaction->legal_form}}">{{$transaction->legal_form}}</option>
										<option value="Closed Stock Co.">Closed Stock Co.</option>
										<option value="General Patrnership">General Patrnership</option>
										<option value="Joint Liability Co.">Joint Liability Co.</option>
										<option value="Joint Stock Co.">Joint Stock Co.</option>
										<option value="Limited Liability">Limited Liability </option>
										<option value="Limited PartnerShip">Limited PartnerShip </option>
										<option value="Open Stock Co.">Open Stock Co. </option>
										<option value="Partnership">Partnership </option>
										<option value="Simple Partnership">Simple Partnership </option>
										<option value="Sole Proprietorship">Sole Proprietorship </option>
									</select>
									 @if($errors->has('legal_form'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('legal_form') }}
                          </p>
                          @endif
								</div>

									
								<div class="card-body">
									<label> Supplier / Buyer :</label>
									<select  class="form-control" required name="s_b">
										<option value="{{$transaction->s_b}}" >{{$transaction->s_b}}</option>
										<option value="Supplier">Supplier</option>
										<option value="Buyer">Buyer</option>

									</select>
									 @if($errors->has('s_b'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('s_b') }}
                          </p>
                          @endif
								</div>


		<div class="card-body">
									<label>Supplier / Buyer Name :</label>
									<input value="{{$transaction->s_b_name}}" type="text" class=" form-control" name="s_b_name" style="border:{{ $errors->has('s_b_name') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('s_b_name'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('s_b_name') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label>Tenor :</label>
									<input value="{{$transaction->tenor}}" type="text" class=" form-control" placeholder="" name="tenor" style="border:{{ $errors->has('tenor') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('tenor'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('tenor') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Maturity Date :</label>
									<input value="{{$transaction->maturity_date}}" type="date" class=" form-control" name="maturity_date" style="border:{{ $errors->has('maturity_date') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('maturity_date'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('maturity_date') }}
                          </p>
                          @endif
								</div>
					

								<div class="card-body">
									<label>DrowDown Amount :</label>
									<input value="{{$transaction->drawdown_amount}}" type="text" class=" form-control" name="drawdown_amount" style="border:{{ $errors->has('drawdown_amount') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('drawdown_amount'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('drawdown_amount') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>S/B Code :</label>
									<input value="{{$transaction->s_b_code}}" type="text" class=" form-control" name="s_b_code" style="border:{{ $errors->has('s_b_code') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('s_b_code'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('s_b_code') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>S/B CR :</label>
									<input value="{{$transaction->cr_s_b}}" type="text" class=" form-control" name="cr_s_b" style="border:{{ $errors->has('cr_s_b') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('cr_s_b'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('cr_s_b') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label> B/S Category :</label>
										<select  class="form-control" required name="type_sb">
										<option value="{{$transaction->type_sb}}">{{$transaction->type_sb}}</option>
										<option value="Corporate">Corporate</option>
										<option value="EGR">EGR</option>
										<option value="Governmental">Governmental</option>
										<option value="Military">Military</option>
										<option value="Overseas">Overseas</option>
										<option value="Well-Known">Well-Known</option>
										<option value="Others">Others</option>
									</select>

									 @if($errors->has('type_sb'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('type_sb') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Amount :</label>
									<input value="{{$transaction->amount}}" type="text" class=" form-control" name="amount" style="border:{{ $errors->has('amount') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('amount'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('amount') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Date of Transaction :</label>
									<input value="{{$transaction->date_trs}}" type="date" class=" form-control" name="date_trs" style="border:{{ $errors->has('date_trs') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('date_trs'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('date_trs') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label>Sent Time :</label>
									<input value="{{$transaction->sent_time}}" type="time" class=" form-control" step="1"  name="sent_time" style="border:{{ $errors->has('sent_time') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('sent_time'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('sent_time') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label>Reply time :</label>
									<input value="{{$transaction->reply_time}}" type="time" class=" form-control" step="1"  name="reply_time" style="border:{{ $errors->has('reply_time') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('reply_time'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('reply_time') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Sent By :</label>
									<input value="{{$transaction->sender}}" type="text" class=" form-control" name="sender" style="border:{{ $errors->has('sender') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('sender'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('sender') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Reply By :</label>
									<select  class="form-control" required name="officer">
										<option value="{{$transaction->officer}}">{{$transaction->customer_no}}</option>
										<option value="Alfred Mohsen">Alfred Mohsen</option>
										<option value="Ahmed Desouky">Ahmed Desouky</option>
										<option value="Ahmed Hekal">Ahmed Hekal</option>
										<option value="Begad Eleish">Begad Eleish</option>
										<option value="Bishoy">Bishoy</option>
										<option value="Mohamed Salah">Mohamed Salah</option>
										<option value="Nouran">Nouran</option>

									</select>
                      
                      @if($errors->has('officer'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('officer') }}
                          </p>
                          @endif   
								</div>


								<div class="card-body">
									<label>Rule Hitted :</label>
									<input value="{{$transaction->rule_hitted}}" type="text" class=" form-control" name="rule_hitted" style="border:{{ $errors->has('rule_hitted') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('rule_hitted'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('rule_hitted') }}
                          </p>
                          @endif
								</div>



								<div class="card-body">
									<label>Justifications :</label>
									<input value="{{$transaction->justification}}" type="text" class=" form-control" name="justification" style="border:{{ $errors->has('justification') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('justification'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('justification') }}
                          </p>
                          @endif
								</div>


								<div class="card-body">
									<label>Disbursement Type :</label>
									<input value="{{$transaction->disbursement_type}}" type="text" class=" form-control" name="disbursement_type" style="border:{{ $errors->has('disbursement_type') ? '1px solid #fc6a55' : ''}}">
									 @if($errors->has('disbursement_type'))
                          <p class="help-block" style="color: #fc6a55">
                              {{ $errors->first('disbursement_type') }}
                          </p>
                          @endif
								</div>

								<button class="btn btn-success" type="submit" > Update the Record
            </button>
</form>

							</div>
@endsection
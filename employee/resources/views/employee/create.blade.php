@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
		     <div class="panel-heading">
				 New employee !
			</div>
			<div class="panel-body">
			<!-- Display Validation Errors -->
			   
			   <form action="/employee/public/save" method="POST" class="form-horizontal" >
						{{ csrf_field() }}
						<!-- name -->
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Name</label>

							<div class="col-sm-6">
								<input type="text" name="name" class="form-control" placeholder="Name" ><p style="color:red">{{ $errors->first('name') }}</p>
							</div>
						</div>
						<!-- email -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email</label>

							<div class="col-sm-6">
								<input type="text" name="email" class="form-control" placeholder="Email" ><p style="color:red">
								{{ $errors->first('email') }}</p>
							</div>
						</div>
						<!-- address -->
						<div class="form-group">
							<label for="address" class="col-sm-3 control-label">Address</label>

							<div class="col-sm-6">
								<input type="text" name="address" class="form-control" placeholder="Address">
								<p style="color:red">{{ $errors->first('address') }}</p>
							</div>
						</div>
						<!-- salary -->
						<div class="form-group">
							<label for="salary" class="col-sm-3 control-label">Salary</label>

							<div class="col-sm-6">
								<input type="text" name="salary" class="form-control" placeholder="salary">
								<p style="color:red">{{ $errors->first('salary') }}</p>
							</div>
						</div>
						<!-- telephone -->
                        <div class="form-group">
							<label for="telephone" class="col-sm-3 control-label">Telephone</label>

							<div class="col-sm-6">
								<input type="text" name="telephone" class="form-control" placeholder="Telephone">
								<p style="color:red">{{ $errors->first('telephone') }}</p>
							</div>
						</div>
						<!-- date of birth -->
						<div class="form-group">
							<label for="birth" class="col-sm-3 control-label">Date of Birth</label>

							<div class="col-sm-6">
								<input type="text" name="birth" class="form-control" placeholder="yy-mm-dd">
								<p style="color:red">{{ $errors->first('birth') }}</p>
							</div>
						</div>
						<!-- date of birth -->
						<div class="form-group">
							<label for="hire" class="col-sm-3 control-label">Date of Hire</label>

							<div class="col-sm-6">
								<input type="text" name="hire" class="form-control" placeholder="yy-mm-dd">
								<p style="color:red">{{ $errors->first('hire') }}</p>
							</div>
						</div>
						<!-- save button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i>Save
								</button>
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>			

@endsection

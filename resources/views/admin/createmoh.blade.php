@extends('admin.home')

@section('admin')

<div class="content-wrapper ">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="{{route('moh.store')}}" method="post">
					@csrf
                    <div class="row">
						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Name of MOH</h5>
									<div class="controls">
										<select name="moh" id="moh"  class="form-control">
											<option value="jaffna">Jaffna</option>
											<option value="ampara">Ampara</option>
											<option value="colombo">Colombo</option>
											<option value="kandy">Kandy</option>
											<option value="batticaloa">Batticaloa</option>
											<option value="vavuniya">Vavuniya</option>
										</select>
									</div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Genter</h5>
									<div class="controls">
										<select name="genter" id="moh" required class="form-control">
											<option value="male">male</option>
											<option value="female">female</option>
										</select>
									</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>First Name</h5>
									<div class="controls">
									<input type="text" name="firstname" class="form-control"   required> </div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Last Name</h5>
									<div class="controls">
									<input type="text" name="lastname" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Address</h5>
									<div class="controls">
									<input type="text" name="address" class="form-control" required > </div>
							</div>
						</div>


                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Mobile</h5>
									<div class="controls">
									<input type="text" name="mobile" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>District</h5>
									<div class="controls">
									<input type="text" name="district" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Date of Birth</h5>
									<div class="controls">
									<input type="date" name="dob" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>User Name</h5>
									<div class="controls">
									<input type="text" name="username" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Nic</h5>
									<div class="controls">
									<input type="text" name="nic" class="form-control" required > </div>
									<input type="hidden" value="moh" name="role"  class="form-control"  > </div>
							</div>
						</div>


                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Password</h5>
									<div class="controls">
									<input type="password" name="password" class="form-control" required > </div>
							</div>
						</div>


						<div class="col-md-6">
							<div class="text-xs-left">
								<input type="submit" class="btn btn-info" value="Submit"></input>
							</div>
						</div>

						</div>
						<!-- /.col -->
					</div>
				</form>

			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>

@stop

@extends('people.home')

@section('people')

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
				<form action="{{route('people.store')}}" method="post" >
					@csrf
                    <div class="row">
						<div class="col-md-6">
							<div class="form-group" class="col-6">
								<h5>Passport</h5>
								<div class="controls">
									<input type="text" name="nic" class="form-control"  required> </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
								<h5>Full Name</h5>
								<div class="controls">
									<input type="text" name="name" class="form-control"  required> </div>
							</div>
						</div>



						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Age</h5>
									<div class="controls">
									<input type="number" name="age" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Email</h5>
									<div class="controls">
									<input type="email" name="email" class="form-control" required > </div>
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




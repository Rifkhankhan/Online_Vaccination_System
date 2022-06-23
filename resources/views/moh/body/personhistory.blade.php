@extends('moh.home')

@section('moh')

<div class="content-wrapper">
	  <div class="container">
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
				<form action="" method="post">
					@csrf
						<div class="row">
						<div class="col-md-12">
							<div class="form-group" class="col-6">
                            <h5>Date</h5>
                            <div class="controls">
                                <input type="date" name="date" class="form-control"  required> </div>
							</div>
						</div>
				

						<div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>Nic</h5>
									<div class="controls">
									<input type="text" name="nic" class="form-control"   required> </div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>Vaccine Product</h5>
									<div class="controls">
									<input type="text" name="vaccineproduct" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>Batch Number</h5>
									<div class="controls">
									<input type="text" name="batchnumber" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>Vaccination Status</h5>
									<div class="controls">
									<input type="text" name="vacstatus" class="form-control" required > </div>
							</div>
						</div>


						<div class="col-md-12">
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

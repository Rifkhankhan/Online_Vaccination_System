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
                            <h5>From date</h5>
                            <div class="controls">
                                <input type="date" name="fdate" class="form-control"  required> </div>
							</div>
						</div>


						<div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>To Date</h5>
									<div class="controls">
									<input type="date" name="tdate" class="form-control"   required> </div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>District</h5>
									<div class="controls">
                                    <select name="venue" id="role" required class="form-control">
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

                        <div class="col-md-12">
							<div class="form-group" class="col-6">
									<h5>MOH</h5>
									<div class="controls">
                                        <select name="venue" id="role" required class="form-control">
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


						<div class="col-md-12">
							<div class="text-xs-left">
								<input type="submit" class="btn btn-info" value="View"></input>
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

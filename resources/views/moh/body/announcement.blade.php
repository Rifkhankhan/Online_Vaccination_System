@extends('moh.home')

@section('moh')

<div class="content-wrapper container">
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
				<form action="{{route('moh.storeAnnouncement')}}" method="post">
					@csrf
						<div class="row">
						<div class="col-md-6">
							<div class="form-group" class="col-6">
								<h5>Date</h5>
								<div class="controls">
									<input type="date" name="date" class="form-control"  required> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Vaccine</h5>
									<div class="controls">
                                        <select name="vaccine" id="role" required class="form-control">
                                                <option value="Adenovirus">Adenovirus</option>
                                                <option value="Anthrax">Anthrax</option>
                                                <option value="Cholera">Cholera</option>
                                                <option value="DTaP">DTaP</option>
                                                <option value="DT">DT</option>
                                                <option value="Hepatitis A">Hepatitis A</option>
                                                <option value="Hepatitis B ">Hepatitis B</option>
                                                <option value="Herpes Zoster">Herpes Zoster</option>
                                                <option value="Influenza">Influenza</option>
                                                <option value="Polio">Polio</option>
                                            </select>
									</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Venue</h5>
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

						<div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Age</h5>
									<div class="controls">
									<input type="number" name="age" class="form-control" required > </div>
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group" class="col-6">
									<h5>Dosage</h5>
									<div class="controls">
                                        <select name="dosage" id="role" required class="form-control">
                                            <option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>

                                        </select>
                                    </div>
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


  <br><br>
  <div class="container">
    <h2>Vaccination Announcement</h2>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Vaccine</th>
                    <th>Venue</th>
                    <th>Age Group</th>
                    <th>No of Doses</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lists as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->date}}</td>
                        <td>{{$list->vaccine}}</td>
                        <td>{{$list->venue}}</td>
                        <td>{{$list->age}}</td>
                        <td>{{$list->dosage}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
  </div>

@stop

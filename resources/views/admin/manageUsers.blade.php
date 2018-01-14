@extends('layout.app')
@section('title', 'Dashboard')


@section('content')
        <div class="rightside bg-grey-100">
			<!-- BEGIN PAGE HEADING -->
            <div class="page-head">
				<h1 class="page-title">Manage Users</h1>
				<!-- BEGIN BREADCRUMB -->
				<a class="btn btn-dark bg-blue-600 color-white pull-right"  data-toggle="modal" data-target="#UserModal">Add User</a>
				
				<!-- END BREADCRUMB -->
			</div>
			<!-- END PAGE HEADING -->

            <div class="container-fluid">
				<div class="row">
                        <div class="col-lg-12">
							<div class="panel no-border">
                            	<div class="panel-title bg-grey-300">
								<div class="panel-head">User List</div>
								</div>
                                <div class="panel-body no-padding-top bg-white">
									<p class="text-light margin-bottom-30"></p>
											<table class="table table-bordered display">
										<thead>
										
											<tr>
												<th class="vertical-middle">Name</th>
												<th class="vertical-middle">Email</th>
												<th class="vertical-middle">Mobile</th>
												<th class="vertical-middle">Chapter</th>
												<th class="vertical-middle">Zone</th>
                                                <th class="vertical-middle">Action</th>
											</tr>
											
										</thead>
										<tbody>
										@foreach($data as $user)
											<tr> 
												<td class="vertical-middle">{{ $user->firstName }} {{ $user->lastName }}</td>
												<td class="vertical-middle">{{ $user->email  }}</td>
												<td class="vertical-middle">{{$user->mobile  }}</td>
												<td class="vertical-middle">{{$user->zoneChapter }}</td>
												<td class="vertical-middle">{{$user->zoneName }}</td>
												<td class="vertical-middle">
												@if($user->status == 1)
												<a onclick="status(0,{{ $user->userId }})" data-toggle="modal" data-target="#ConfirmModal1">
												<i class="fa fa-check-circle fa-2x"></i></a>
												@endif
												@if($user->status == 0)
												<a onclick="status(1,{{ $user->userId }})" data-toggle="modal" data-target="#ConfirmModal1" >
												<i class="fa fa-ban fa-2x"></i></a>
												@endif
												</td>

												
											</tr>
										@endforeach
										
											
										</tbody>
									</table>
									
									<p class="text-light margin-bottom-30"></p>
									
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /. row -->
		    </div><!-- /.row -->
				
				<div id="UserModal" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form id="checkform" method="post"  action="{{ url('/createUser') }}" novalidate="novalidate" class="bv-form">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> <h4 class="modal-title">Add New User</h4> 
						</div> 
						<div class="modal-body">
													
					<div class="box-body padding-md">	
				
					<div class="form-group">
						<input type="text" name="firstName" class="form-control input-md validate" placeholder="FIRSTNAME"/>
					</div>
					<div class="form-group">
						<input type="text" name="lastName" class="form-control input-md validate" placeholder="LASTNAME"/>
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control input-md validate" placeholder="EMAIL"/>
					</div>
					<div class="form-group">
						<input type="text" name="mobile" class="form-control input-md validate" placeholder="MOBILE"/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control input-md validate" placeholder="PASSWORD"/>
					</div>
					
					<div class="form-group">
						<select type="text" name="zoneMemberId" class="form-control input-md validate" placeholder="CHAPTER"/>
						<option>SELECT CHAPTER</option>
						@foreach($chapter as $data)
							<option value="{{$data->zoneMemberId}}">{{$data->zoneChapter}}</option>
						@endforeach
						</select>
					</div>
							
						 </div>
						 </div>
						<div class="modal-footer">
					 	<button type="submit" onclick="createManageStaff(event)" class="btn btn-dark bg-blue-600  color-white">Create</button> 
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
						</div> 
						{{ csrf_field() }}
						</form>
						</div> 
					</div> 
				</div>

				

				<div id="ConfirmModal1" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form method="POST" action="{{url('/status')}}">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> 
						<h4 class="modal-title"><span class="status"></span> USER</h4> 
						</div> 
						<div class="modal-body">
							<p>Are you sure <span class="status1"></span> this User?</p> 
							<input type="hidden" id="userId" name="userId">
							<input type="hidden" id="statusId" name="statusId">
						 </div>
						 
						<div class="modal-footer">
					 	<button type="submit"  class="btn btn-dark bg-blue-600  color-white">Yes</button> 
						<button type="button" class="btn btn-primary" data-dismiss="modal">No</button> 
						</div> 
						{{ csrf_field() }}
						</form>
						</div> 
					</div> 
				</div>
				



				
				
				
            </div><!-- /.container-fluid -->
        </div>
        @endsection
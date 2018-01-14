@extends('layout.app')
@section('title', 'Dashboard')


@section('content')
        <div class="rightside bg-grey-100">
			<!-- BEGIN PAGE HEADING -->
            <div class="page-head">
				<h1 class="page-title">Manage Zone</h1>
				<!-- BEGIN BREADCRUMB -->
				<a class="btn btn-dark bg-blue-600 color-white pull-right"  data-toggle="modal" data-target="#ZoneModal">Add Zone</a>
				<a class="btn btn-dark bg-blue-600 color-white pull-right" style="margin-right:10px; " data-toggle="modal" data-target="#ChapterModal">Add Chapter</a>
				<!-- END BREADCRUMB -->
			</div>
			<!-- END PAGE HEADING -->

            <div class="container-fluid">
				<div class="row">
                        <div class="col-lg-12">
							<div class="panel no-border">
                            	<div class="panel-title bg-grey-300">
								<div class="panel-head">Chapter List</div>
								</div>
                                <div class="panel-body no-padding-top bg-white">


                                <p class="text-light margin-bottom-30"></p>
											<ul class="nav nav-tabs">
												  <li class="active"><a data-toggle="tab" href="#home">Chapter</a></li>
												  <li><a data-toggle="tab" href="#menu1">Zone</a></li>
											</ul>
											
											<div class="tab-content">
											  <div id="home" class="tab-pane fade in active">
												<p class="text-light margin-bottom-30"></p>
												<table class="table table-bordered display">
													<thead>
													
														<tr>
															<th class="vertical-middle">Zone</th>
															<th class="vertical-middle">Chapter</th>
															<th class="vertical-middle">Created Date</th>
			                                                <!-- <th class="vertical-middle">Action</th> -->
														</tr>
														
													</thead>
													<tbody>
													@foreach($chapter as $data)
														<tr> 
															<td class="vertical-middle">{{$data->zoneName}}</td>
															<td class="vertical-middle">{{$data->zoneChapter}}</td>
															<td class="vertical-middle">{{$data->created_at}}</td>
															
														</tr>
													@endforeach
													
														
													</tbody>
												</table>
											  </div>

											  <div id="menu1" class="tab-pane fade">
											  <p class="text-light margin-bottom-30"></p>
												<table class="table table-bordered display">
										<thead>
										
											<tr>
												<th class="vertical-middle">Zone</th>
												<th class="vertical-middle">Created Date</th>
                                                <!-- <th class="vertical-middle">Action</th> -->
											</tr>
											
										</thead>
										<tbody>
										@foreach($zone as $data)
											<tr> 
												<td class="vertical-middle">{{$data->zoneName}}</td>
												<td class="vertical-middle">{{$data->created_at}}</td>
												
												
											</tr>
										@endforeach
										
											
										</tbody>
									</table>
											  </div>
											</div>
																						
											
									
									<p class="text-light margin-bottom-30"></p>




									
									
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /. row -->
		    </div><!-- /.row -->
				
				<div id="ZoneModal" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form id="checkform" method="post"  action="{{ url('/createZone') }}" novalidate="novalidate" class="bv-form">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> <h4 class="modal-title">Add New Zone</h4> 
						</div> 
						<div class="modal-body">
													
					<div class="box-body padding-md">	
				
					<div class="form-group">
						<input type="text" name="zoneName" class="form-control input-md validate" placeholder="Zone"/>
					</div>
							
						 </div>
						 </div>
						<div class="modal-footer">
					 	<button type="submit" class="btn btn-dark bg-blue-600  color-white">Create</button> 
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
						</div> 
						{{ csrf_field() }}
						</form>
						</div> 
					</div> 
				</div>

				<div id="ChapterModal" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form id="checkform" method="post"  action="{{ url('/createChapter') }}" novalidate="novalidate" class="bv-form">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> <h4 class="modal-title">Add New Chapter</h4> 
						</div> 
						<div class="modal-body">
													
					<div class="box-body padding-md">	
				
					<div class="form-group">
						<select type="text" name="zoneId" class="form-control input-md" placeholder="country"/>
							<option>Select Zone</option>
							@foreach($zone as $data)
							<option value="{{ $data->zoneId }}">{{ $data->zoneName }}</option>
							@endforeach
							
						<select>
					</div>
					<div class="form-group">
						<input type="text" name="zoneChapter" class="form-control input-md" placeholder="ZONE CHAPTER"/>
					</div>
					        							
					

							
						 </div>
						 </div>
						<div class="modal-footer">
					 	<button type="submit"  class="btn btn-dark bg-blue-600  color-white">Create</button> 
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
						</div> 
						{{ csrf_field() }}
						</form>
						</div> 
					</div> 
				</div>

				<div id="ConfirmModal" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form method="POST" action="{{url('/removeWittStaff')}}">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> <h4 class="modal-title">Delete WittStaff</h4> 
						</div> 
						<div class="modal-body">
							<p>Are you sure remove this Staff?</p> 
							<input type="hidden" id="staffId" name="staffId">
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
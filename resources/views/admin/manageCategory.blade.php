@extends('layout.app')
@section('title', 'Dashboard')


@section('content')
        <div class="rightside bg-grey-100">
			<!-- BEGIN PAGE HEADING -->
            <div class="page-head">
				<h1 class="page-title">Manage Category</h1>
				<!-- BEGIN BREADCRUMB -->
				<a class="btn btn-dark bg-blue-600 color-white pull-right"  data-toggle="modal" data-target="#CategoryModal">Add Category</a>
				
				<!-- END BREADCRUMB -->
			</div>
			<!-- END PAGE HEADING -->

            <div class="container-fluid">
				<div class="row">
                        <div class="col-lg-12">
							<div class="panel no-border">
                            	<div class="panel-title bg-grey-300">
								<div class="panel-head">Category List</div>
								</div>
                                <div class="panel-body no-padding-top bg-white">
									<p class="text-light margin-bottom-30"></p>
											<table class="table table-bordered display">
										<thead>
										
											<tr>
												<th class="vertical-middle">Category Name</th>
												<th class="vertical-middle">category Description</th>
												<th class="vertical-middle">Created Date</th>
                                                <!-- <th class="vertical-middle">Action</th> -->
											</tr>
											
										</thead>
										<tbody>
											@foreach($data as $cat)
											<tr> 
												<td class="vertical-middle">{{ $cat->categoryName }}</td>
												<td class="vertical-middle">{{ $cat->categoryDesc }}</td>
												<td class="vertical-middle">{{ $cat->created_at }}</td>
												
											</tr>
											@endforeach
										
											
										</tbody>
									</table>
									
									<p class="text-light margin-bottom-30"></p>
									
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /. row -->
		    </div><!-- /.row -->
				
				

				<div id="CategoryModal" class="modal fade" role="dialog"> 
					<div class="modal-dialog"> <!-- Modal content--> 
						<div class="modal-content"> 
						<form id="checkform" method="post"  action="{{ url('/createCategory') }}" novalidate="novalidate" class="bv-form">
						<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal">&times;
						</button> <h4 class="modal-title">Add New Category</h4> 
						</div> 
						<div class="modal-body">
													
					<div class="box-body padding-md">	
				
					<div class="form-group">
						<input type="text" name="categoryName" class="form-control input-md" placeholder="CATEGORY NAME"/>
							
					</div>
					<div class="form-group">
						<input type="text" name="categoryDesc" class="form-control input-md" placeholder="CATEGORY DESCRIPTION"/>
							
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
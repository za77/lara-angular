@extends('devLayout.app')
@section('title', 'Manage Controller')


@section('content')
<div class="rightside bg-grey-100">
	<!-- BEGIN PAGE HEADING -->
	<div class="page-head">
		<h1 class="page-title">Manage Controller</h1>
		<a class="btn btn-dark bg-blue-600 color-white pull-right"  data-toggle="modal" data-target="#addModal">Add Controller</a>
		
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
							<table class="table table-bordered display">
								<thead>

									<tr>
										<th class="vertical-middle">Title</th>
										<th class="vertical-middle">DESCRIPTION</th>
										<th class="vertical-middle">Date</th>
										<th class="vertical-middle">DONE BY</th>
										<th class="vertical-middle">CHAPTER</th>
										<th class="vertical-middle">ZONE</th>
										<th class="vertical-middle">PICTURE</th>

										<!-- <th class="vertical-middle">Action</th> -->
									</tr>

								</thead>
								<tbody>
									

								</tbody>
							</table>

							<p class="text-light margin-bottom-30"></p>

						





					</div>
				</div><!-- /.col -->
			</div><!-- /. row -->
		</div><!-- /.row -->

		<div id="addModal" class="modal fade" role="dialog"> 
			<div class="modal-dialog"> <!-- Modal content--> 
				<div class="modal-content"> 
					<form id="checkform" method="post"  action="{{ url('/developer/createController') }}" novalidate="novalidate" class="bv-form">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal">&times;
							</button> <h4 class="modal-title">Add New Controller</h4> 
						</div> 
						<div class="modal-body">

							<div class="box-body padding-md">	

								<div class="form-group">
									<input type="text" name="Controller" class="form-control input-md validate" placeholder="Controller Name"/>
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

		<div class="modal-footer">
			<button type="submit"  class="btn btn-dark bg-blue-600  color-white">Create</button> 
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
		</div> 
		{{ csrf_field() }}
	</form>
</div> 
</div> 
</div>

<!-- <div id="ConfirmModal" class="modal fade" role="dialog"> 
<div class="modal-dialog"> Modal content 
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
-->





</div><!-- /.container-fluid -->
</div>
@endsection
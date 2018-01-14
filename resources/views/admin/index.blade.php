@extends('layout.app')
@section('title', 'Dashboard')


@section('content')

<!-- BEGIN RIGHTSIDE -->
<div class="rightside bg-grey-100">
	<!-- BEGIN PAGE HEADING -->
	<div class="page-head bg-grey-100">
		<h1 class="page-title">Dashboard<small>Welcome to JCI Administration</small></h1>                
	</div>


	<!-- END PAGE HEADING -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="panel bg-grey-500">
					<div class="panel-body padding-15-20">
						<div class="clearfix">
							<div class="pull-left">
								<div class="color-white font-size-26 font-roboto font-weight-600" data-toggle="counter" data-start="0" data-from="0" data-to="143" data-speed="500" data-refresh-interval="10"></div>
								<div class="display-block color-white font-weight-600"><i class="ion-person-add"></i> TOTAL USERS<h3></h3></div>
							</div>
							<div class="pull-right">
								<i class="font-size-36 color-white ion-person-add"></i>
							</div>
							<div class="pull-left">
								<i class="font-size-36 color-white"></i>
							</div>
						</div>

<!-- <div class="font-size-11 clearfix color-white font-weight-600">
<div class="pull-left">PROGRESS</div>
<div class="pull-right">72%</div>
</div> -->
</div>
</div><!-- /.panel -->
</div><!-- /.col -->

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="panel bg-deep-orange-400">
		<div class="panel-body padding-15-20">
			<div class="clearfix">
				<div class="pull-left">
					<div class="color-white font-size-26 font-roboto font-weight-600" data-toggle="counter" data-start="0" data-from="0" data-to="10" data-speed="500" data-refresh-interval="10"></div>
					<div class="display-block color-red-50 font-weight-600"><i class="fa fa-list"></i> TOTAL PROJECT SUBMITTED<h3></h3></div>
				</div>
				<div class="pull-right">
					<i class="font-size-36 color-red-100 fa fa-list"></i>
				</div>
				<div class="pull-left">
					<i class="font-size-36 color-white"></i>
				</div>
			</div>

<!-- <div class="font-size-11 clearfix color-red-50 font-weight-600">
<div class="pull-left">PROGRESS</div>
<div class="pull-right">80%</div>
</div> -->
</div>
</div><!-- /.panel -->
</div><!-- /.col -->

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="panel bg-blue-400">
		<div class="panel-body padding-15-20">
			<div class="clearfix">
				<div class="pull-left">
					<div class="color-white font-size-26 font-roboto font-weight-600" data-toggle="counter" data-start="0" data-from="0" data-to="43" data-speed="500" data-refresh-interval="10"></div>
					<div class="display-block color-blue-50 font-weight-600"><i class="fa fa-users"></i> TOTAL CHAPTER<h3></h3></div>
				</div>
				<div class="pull-right">
					<i class="font-size-36 color-blue-100 fa fa-users"></i>
				</div>
				<div class="pull-left">
					<i class="font-size-36 color-white"></i>
				</div>
			</div>

<!-- <div class="font-size-11 clearfix color-blue-50 font-weight-600">
<div class="pull-left">PROGRESS</div>
<div class="pull-right">45%</div>
</div> -->
</div>
</div><!-- /.panel -->
</div><!-- /.col -->


</div><!-- /.row -->

<!-- /.row -->



<div class="row">
	<div class="col-lg-12">
		<div class="panel no-border ">
			<div class="panel-body no-padding-top bg-white">
				<h3 class="color-grey-700">Today’s Form</h3>									
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
			</div>
		</div><!-- /.col -->
	</div><!-- /. row -->
</div>

<!-- /.row -->

<!-- END FOOTER -->
</div><!-- /.container-fluid -->
</div><!-- /.rightside -->
@endsection
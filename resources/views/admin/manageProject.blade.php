@extends('layout.app')
@section('title', 'Dashboard')


@section('content')
        <div class="rightside bg-grey-100">
			<!-- BEGIN PAGE HEADING -->
            <div class="page-head">
				<h1 class="page-title">Manage Project</h1>
				<!-- BEGIN BREADCRUMB -->
				<!-- <a class="btn btn-dark bg-blue-600 color-white pull-right"  data-toggle="modal" data-target="#CityModal">Add City</a>
				<a class="btn btn-dark bg-blue-600 color-white pull-right" style="margin-right:10px; " data-toggle="modal" data-target="#CountryModal">Add Country</a> -->
				<!-- END BREADCRUMB -->
			</div>
			<!-- END PAGE HEADING -->

            <div class="container-fluid">
				<div class="row">
                        <div class="col-lg-12">
							<div class="panel no-border">
                            	<div class="panel-title bg-grey-300">
								<div class="panel-head">Project List</div>
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
										@foreach($data as $project)
											<tr> 
												<td class="vertical-middle">{{ $project['projectTitle'] }}</td>
												<td class="vertical-middle">{{ $project['projectDesc'] }}</td>
												<td class="vertical-middle">{{ $project['projectDate'] }}</td>
												<td class="vertical-middle">{{ $project['firstName'] }} {{ $project['lastName'] }}</td>
												<td class="vertical-middle">{{ $project['chapter'] }}</td>
												<td class="vertical-middle">{{ $project['zoneName'] }}</td>
												
												<td class="vertical-middle">
												@foreach($project['projectPicture'] as $pic)
												<a href="{{url('/public') }}{{ $pic['path'] }}"> <img src="{{url('/public') }}{{ $pic['path'] }}" alt="Fjords" class="img-thumbnail" style="width:40px;"> </a>
												
													<!-- <img src="{{url('/public') }}{{ $pic['path'] }}"> -->
												@endforeach
												</td>
												
											</tr>
										@endforeach
										
											
										</tbody>
									</table>
									
									<p class="text-light margin-bottom-30"></p>
									
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /. row -->
		    </div>
				

				



				
				
				
            </div><!-- /.container-fluid -->
        </div>
        @endsection
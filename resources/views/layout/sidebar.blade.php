 <div class="leftside">
			<div class="sidebar">
				<!-- BEGIN RPOFILE -->
				
				<!-- END RPOFILE -->
				<!-- BEGIN NAV -->
				
					<ul class="nav-sidebar">
						<li class="active">
                            <a href="{{ url('/') }}">
                                <i class="ion-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/manageUsers') }}">
                                <i class="fa fa-gear"></i> <span>Branch Users</span>                                
                            </a>                            
                        </li>

                        <li class="nav-dropdown">
                            <a href="manage-witt-staff.html">
                                <i class="fa fa-info"></i> <span>General Info</span>
                                <i class="ion-chevron-right pull-right"></i>
                            </a>
                           		 <ul>
                                	<li><a href="{{ url('/manageBranch') }}">Manage Branch</a></li>
                                    <li><a href="{{ url('/manageCategory') }}">Manage Category</a></li>
                                    

                                 </ul>
                                    
                        </li>
                        
                        <li>
                            <a href="{{ url('/manageProject') }}">
                                <i class="fa fa-gear"></i> <span>Project List</span>                                
                            </a>                            
                        </li>
						
						                 
                    </ul>
					<!-- END NAV -->
					
					<!-- BEGIN WIDGET -->
					
					<!-- END WIDGET -->
			</div><!-- /.sidebar -->
        </div>
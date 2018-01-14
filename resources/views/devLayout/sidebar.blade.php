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
                                <i class="fa fa-gear"></i> <span>Cron Details</span>                                
                            </a>                            
                        </li>

                        <li class="nav-dropdown">
                            <a href="manage-witt-staff.html">
                                <i class="fa fa-info"></i> <span>Artisan</span>
                                <i class="ion-chevron-right pull-right"></i>
                            </a>
                           		 <ul>
                                	<li><a href="{{ url('/developer/manageController') }}">Manage Controller</a></li>
                                    <li><a href="{{ url('/developer/manageModel') }}">Manage Model</a></li>
                                    

                                 </ul>
                                    
                        </li>
                        <li class="nav-dropdown">
                            <a href="manage-witt-staff.html">
                                <i class="fa fa-info"></i> <span>Logs</span>
                                <i class="ion-chevron-right pull-right"></i>
                            </a>
                                 <ul>
                                    <li><a href="{{ url('/developer/errorLogs') }}">Error Log</a> </li>
                                    <li><a href="{{ url('/developer/warningLogs') }}">Warning Log</a></li>
                                    <li><a href="{{ url('/developer/loginLogs') }}">Login Log</a></li>
                                 </ul>
                                    
                        </li>
                        
                        <li>
                            <a href="{{ asset('public/docs/index.html') }}">
                                <i class="fa fa-gear"></i> <span>API</span>                                
                            </a>                            
                        </li>
						
						                 
                    </ul>
					<!-- END NAV -->
					
					<!-- BEGIN WIDGET -->
					
					<!-- END WIDGET -->
			</div><!-- /.sidebar -->
        </div>
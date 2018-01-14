<header>
		<a href="{{ url('/developer') }}" class="logo" ><img src="{{ url('public/dev/assets/img/Code-Developer-Logo.png') }}" style="width:40px;height:40px;"><span>&nbsp;Developer Console</span></a>
		<nav class="navbar navbar-static-top">
			<a href="#" class="navbar-btn sidebar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			<div class="navbar-header">
				<ul class="nav navbar-nav pull-right">
					
				</ul>
			</div>
            <div class="navbar-right">
				
				<ul class="nav navbar-nav">
                	<li class="dropdown dropdown-inverse">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ion-power"></i></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{url('/logout')}}"><i class="ion-log-out"></i> Logout </a>
							</li>
							
						</ul>
					</li>
						
                    
                </ul>
			</div>
        </nav>
    </header>
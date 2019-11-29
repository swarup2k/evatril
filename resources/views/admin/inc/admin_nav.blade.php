<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
	<div id="navbar-container" class="boxed">

		<!--Brand logo & name-->
		<!--================================-->

		<div class="navbar-header">
			<a href="{{route('admin.home')}}" class="navbar-brand">

				<div class="brand-title">
					<span class="brand-text">Evatril Admin Panel</span>
				</div>
			</a>
		</div>
		<!--================================-->
		<!--End brand logo & name-->


		<!--Navbar Dropdown-->
		<!--================================-->
		<div class="navbar-content">

			<ul class="nav navbar-top-links">

				<!--Navigation toogle button-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li class="tgl-menu-btn">
					<a class="mainnav-toggle" href="#">
						<i class="demo-pli-list-view"></i>
					</a>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End Navigation toogle button-->


			</ul>
			<ul class="nav navbar-top-links">


				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
						<i class="demo-pli-bell"></i>
						<span class="badge badge-header badge-danger"></span>
					</a>

					<!--Notification dropdown menu-->
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="opacity: 1;">
						<div class="nano scrollable has-scrollbar" style="height: 0px;">
							<div class="nano-content" tabindex="0" style="right: -17px;">
								<ul class="head-list">
									<li>
										<a class="media" href="#" style="position:relative">
											<span class="badge badge-header badge-info"
												  style="right:auto;left:3px;"></span>
											<div class="media-body">
												<p class="mar-no text-nowrap text-main text-semibold">2 new order(s)</p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="nano-pane" style="display: none;">
								<div class="nano-slider" style="height: 170px; transform: translate(0px, 0px);"></div>
							</div>
						</div>
					</div>
				</li>

				<!--User dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li id="dropdown-user" class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="ic-user pull-right">

                            <i class="demo-pli-male"></i>
                        </span>
					</a>

					<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
						<ul class="head-list">
							<li>
								<a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
							</li>
							<li>
								<a href="{{ route('admin.logout') }}"><i class="demo-pli-unlock icon-lg icon-fw"></i>
									Logout</a>
							</li>
						</ul>
					</div>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End user dropdown-->
			</ul>
		</div>
		<!--================================-->
		<!--End Navbar Dropdown-->

	</div>
</header>

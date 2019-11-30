<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
	<div id="mainnav">

		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">

					<!--Profile Widget-->
					<!--================================-->
				{{-- <div id="mainnav-profile" class="mainnav-profile">
					<div class="profile-wrap text-center">
						<div class="pad-btm">
							<img class="img-circle img-md" src="{{ asset('img/profile-photos/1.png') }}" alt="Profile Picture">
						</div>
						<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
							<span class="pull-right dropdown-toggle">
								<i class="dropdown-caret"></i>
							</span>
							<p class="mnp-name">{{Auth::user()->name}}</p>
							<span class="mnp-desc">{{Auth::user()->email}}</span>
						</a>
					</div>
					<div id="profile-nav" class="collapse list-group bg-trans">
						<a href="#" class="list-group-item">
							<i class="demo-pli-male icon-lg icon-fw"></i> View Profile
						</a>
						<a href="#" class="list-group-item">
							<i class="demo-pli-gear icon-lg icon-fw"></i> Settings
						</a>
						<a href="#" class="list-group-item">
							<i class="demo-pli-information icon-lg icon-fw"></i> Help
						</a>
						<a href="#" class="list-group-item">
							<i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
						</a>
					</div>
				</div> --}}


				<!--Shortcut buttons-->
					<!--================================-->
					<div id="mainnav-shortcut" class="hidden">
						<ul class="list-unstyled shortcut-wrap">
							<li class="col-xs-3" data-content="My Profile">
								<a class="shortcut-grid" href="#">
									<div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
										<i class="demo-pli-male"></i>
									</div>
								</a>
							</li>
							<li class="col-xs-3" data-content="Messages">
								<a class="shortcut-grid" href="#">
									<div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
										<i class="demo-pli-speech-bubble-3"></i>
									</div>
								</a>
							</li>
							<li class="col-xs-3" data-content="Activity">
								<a class="shortcut-grid" href="#">
									<div class="icon-wrap icon-wrap-sm icon-circle bg-success">
										<i class="demo-pli-thunder"></i>
									</div>
								</a>
							</li>
							<li class="col-xs-3" data-content="Lock Screen">
								<a class="shortcut-grid" href="#">
									<div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
										<i class="demo-pli-lock-2"></i>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<!--================================-->
					<!--End shortcut buttons-->


					<ul id="mainnav-menu" class="list-group">

						<!--Category name-->
					{{-- <li class="list-header">Navigation</li> --}}

					<!--Menu list item-->
						<li class="#">
							<a class="nav-link" href="{{route('admin.home')}}">
								<i class="fa fa-cogs"></i>
								<span class="menu-title">{{__('Dashboard')}}</span>
							</a>
						</li>
						<li class="#">
							<a href="#" aria-expanded="true">
								<i class="fa fa-home"></i>
								<span class="menu-title">Venues</span>
								<i class="arrow"></i>
							</a>

							<!--Submenu-->
							<ul class="collapse" aria-expanded="false" style="">
								<li class="">
									<a class="nav-link" href="{{ route('admin.venue.my') }}">In-house Venue List </a>
								</li>
								<li class="">
									<a class="nav-link" href="{{ route('admin.venue.add') }}">Add In-house Venue</a>
								</li>
								<li class="">
									<a class="nav-link" href="{{ route('admin.venue.merchant') }}">Merchant Venue List</a>
								</li>

							</ul>
						</li>
						<li class="#">
							<a href="#" aria-expanded="true">
								<i class="fa fa-users"></i>
								<span class="menu-title">Merchant</span>
								<i class="arrow"></i>
							</a>

							<!--Submenu-->
							<ul class="collapse" aria-expanded="false" style="">
								<li class="">
									<a class="nav-link" href="{{ route('admin.merchant.list') }}">Merchant List </a>
								</li>
								<li class="">
									<a class="nav-link" href="#">Add Merchant</a>
								</li>

							</ul>
						</li>

						<!-- Product Menu -->

					</ul>
				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>

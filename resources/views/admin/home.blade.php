@extends('layouts.app')

@section('content')
	@auth("admin")
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<div class="panel-body text-center dash-widget dash-widget-left">
						<div class="dash-widget-vertical">
							<div class="rorate">VENUES</div>
						</div>
						<div class="pad-ver mar-top text-main">
							<i class="demo-pli-data-settings icon-4x"></i>
						</div>
						<br>
						<p class="text-lg text-main">Total published venues: <span class="text-bold">{{ \App\Venue::where('active', 1)->count() }}</span></p>

						<p class="text-lg text-main">Total seller's products: <span class="text-bold">{{ \App\Venue::where('merchant_id','<>', NULL)->count() }}</span></p>

						<p class="text-lg text-main">Total admin's venues: <span class="text-bold">{{ \App\Venue::where('merchant_id', NULL)->count() }}</span></p>
						<br>
						<a href="#" class="btn btn-primary mar-top">Manage Venues <i
									class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-normal text-main">Total Catering Service</p>
								<p class="text-semibold text-3x text-main">0</p>
								<a href="#" class="btn btn-primary mar-top btn-block top-border-radius-no">Manage
									Category</a>
							</div>
						</div>
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-normal text-main">Total DJ/Music category</p>
								<p class="text-semibold text-3x text-main">0</p>
								<a href="#" class="btn btn-primary mar-top btn-block top-border-radius-no">Manage Category</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-normal text-main">Total Decoration Service</p>
								<p class="text-semibold text-3x text-main">0</p>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Manage
									Category</a>
							</div>
						</div>
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-normal text-main">Total Photo/Videography Service</p>
								<p class="text-semibold text-3x text-main">0</p>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Manage Category</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endauth

	@auth("admin")
		<div class="row">
			<div class="col-md-4">
				<div class="panel">
					<div class="panel-body text-center dash-widget dash-widget-left">
						<div class="dash-widget-vertical">
							<div class="rorate">SELLERS</div>
						</div>
						<br>
						<p class="text-normal text-main">Total sellers</p>
						<p class="text-semibold text-3x text-main">{{ \App\Merchant::count() }}</p>
						<br>
						<a href="#" class="btn-link">Manage Sellers <i
									class="fa fa-long-arrow-right"></i></a>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel">
					<div class="panel-body text-center dash-widget">
						<br>
						<p class="text-normal text-main">Total approved sellers</p>
						<p class="text-semibold text-3x text-main">{{ \App\Merchant::where('approved', 1)->count() }}</p>
						<br>
						<a href="#" class="btn-link">Manage Sellers <i
									class="fa fa-long-arrow-right"></i></a>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel">
					<div class="panel-body text-center dash-widget">
						<br>
						<p class="text-normal text-main">Total pending sellers</p>
						<p class="text-semibold text-3x text-main">{{ \App\Merchant::where('approved', 0)->count() }}</p>
						<br>
						<a href="#" class="btn-link">Manage Sellers <i
									class="fa fa-long-arrow-right"></i></a>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
	@endauth

	@auth("admin")
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<!--Panel heading-->
					<div class="panel-heading">
						<h3 class="panel-title">Category wise product sale</h3>
					</div>

					<!--Panel body-->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped mar-no">
								<thead>
								<tr>
									<th>Category Name</th>
									<th>Sale</th>
								</tr>
								</thead>

							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<!--Panel heading-->
					<div class="panel-heading">
						<h3 class="panel-title">Category wise product stock</h3>
					</div>

					<!--Panel body-->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped mar-no">
								<thead>
								<tr>
									<th>Category Name</th>
									<th>Stock</th>
								</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endauth

	@auth("admin")
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<div class="panel-body text-center dash-widget pad-no">
						<div class="pad-ver mar-top text-main">
							<i class="demo-pli-data-settings icon-4x"></i>
						</div>
						<br>
						<p class="text-3x text-main bg-primary pad-ver">Frontend <strong>Setting</strong></p>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-semibold text-lg text-main mar-ver">
									Home page <br>
									setting
								</p>
								<br>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
							</div>
						</div>
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-semibold text-lg text-main mar-ver">
									Policy page <br>
									setting
								</p>
								<br>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-semibold text-lg text-main mar-ver">
									General <br>
									setting
								</p>
								<br>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
							</div>
						</div>
						<div class="panel">
							<div class="pad-top text-center dash-widget">
								<p class="text-semibold text-lg text-main mar-ver">
									Useful link <br>
									setting
								</p>
								<br>
								<a href="#"
								   class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endauth



@endsection

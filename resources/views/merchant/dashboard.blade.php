@extends('merchant.layouts.app')

@section('content')
	<section class="gry-bg py-4 profile">
		<div class="container">
			<div class="row cols-xs-space cols-sm-space cols-md-space">
				@include('merchant.inc.sidemenu')
				<div class="col-lg-9">
					<!-- Page title -->
					<div class="page-title">
						<div class="row align-items-center">
							<div class="col-md-6">
								<h2 class="heading heading-6 text-capitalize strong-600 mb-0">
									Dashboard
								</h2>
							</div>
							<div class="col-md-6">
								<div class="float-md-right">
									<ul class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active"><a href="{{ route('merchant.home') }}">Dashboard</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- dashboard content -->
					<div class="">
						<div class="row">
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center green-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-upload"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Venues</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center red-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-cart-plus"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Total Bookings</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center blue-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-inr"></i>
										<span class="d-block title heading-3 strong-400">Rs0.00</span>
										<span class="d-block sub-title">Total earnings</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center yellow-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-check-square-o"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Upcoming bookings</span>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="form-box bg-white mt-4">
									<div class="form-box-title px-3 py-2 text-center">
										Bookings
									</div>
									<div class="form-box-content p-3">
										<table class="table mb-0 table-bordered" style="font-size:14px;">
											<tbody>
											<tr>
												<td>Total bookings:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Upcoming bookings:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Ongoing bookings:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Successful bookings:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="bg-white mt-4 p-5 text-center">
									<div class="mb-3">
										@if (auth('merchant')->user()->approved == 1)
											<img src="http://littardoemporium.com/shop/public/frontend/images/icons/verified.png"
												 alt="" width="130">

										@else
											<img src="http://littardoemporium.com/shop/public/frontend/images/icons/non_verified.png"
												 alt="" width="130">


										@endif
									</div>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-box bg-white mt-4">
									<div class="form-box-title px-3 py-2 text-center">
										Venues
									</div>
									<div class="form-box-content p-3 category-widget">
										<ul class="clearfix">
										</ul>
										<div class="text-center">
											<a href="#"
											   class="btn pt-3 pb-1">Add New Hall/Lawn</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="bg-white mt-4 p-4 text-center">
									<div class="heading-4 strong-700">Venue</div>
									<p>Manage &amp; organize your venue</p>
									<a href="#"
									   class="btn btn-styled btn-base-1 btn-outline btn-sm">Go to setting</a>
								</div>
								<div class="bg-white mt-4 p-4 text-center">
									<div class="heading-4 strong-700">Payment</div>
									<p>Configure your payment method</p>
									<a href="#"
									   class="btn btn-styled btn-base-1 btn-outline btn-sm">Configure Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@extends('merchant.layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('fullcalendar-4.3.1/packages/core/main.css') }}">
	<link rel="stylesheet" href="{{ asset('fullcalendar-4.3.1/packages/daygrid/main.css') }}">
	<script src="{{ asset('fullcalendar-4.3.1/packages/core/main.js') }}"></script>
	<script src="{{ asset('fullcalendar-4.3.1/packages/daygrid/main.js') }}"></script>

	<script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ]
            });

            calendar.render();
        });

	</script>


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
									<a href="{{ route('merchant.master.venues') }}" class="d-block">
										<i class="fa fa-upload"></i>
										<span class="d-block title heading-3 strong-400">{{ $data['venues'] }}</span>
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
							<div class="col-md-5">
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
							<div class="col-md-7 mt-4" >
								<div class="form-box-title px-3 py-2 text-center">
									Realtime Bookings
								</div>
								<div class="bg-white mt-1 p-2" id="calendar">

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

                                    <button type="button" class="btn btn-styled btn-base-1 btn-outline btn-sm" data-toggle="modal" data-target="#myModal">Add Venue</button>
								</div>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Master Venue</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                            </div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="issue_type">Issue Type:</label>
                                                        <select name="issue_type" id="issue_type" class="form-control">
                                                            <option value="Payment">Payment</option>
                                                            <option value="Booking">Booking</option>
                                                            <option value="Refund">Refund</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
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

@extends('merchant.layouts.app')

@section('content')
	<section class="gry-bg py-4 profile">
		<div class="container">
			<div class="row cols-xs-space cols-sm-space cols-md-space">
				@include('merchant.inc.sidemenu')
				<div class="col-lg-9">
					<div class="main-content">
						<!-- Page title -->
						<div class="page-title">
							<div class="row align-items-center">
								<div class="col-md-6">
									<h2 class="heading heading-6 text-capitalize strong-600 mb-0">
										{{__('Payments')}}
									</h2>
								</div>
								<div class="col-md-6">
									<div class="float-md-right">
										<ul class="breadcrumb">
											<li><a href="{{ route('merchant.home') }}">{{__('Home')}}</a></li>
											<li><a href="{{ route('merchant.home') }}">{{__('Dashboard')}}</a></li>
											<li class="active"><a
														href="{{ route('merchant.payments') }}">{{__('Payments')}}</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<!-- Order history table -->
						<div class="card no-border mt-4">
							@if(\Session::has('success'))
								<div class="alert alert-success">
									{{session('success')}}
								</div>
								<br>
							@endif
							<div>

								<table class="table table-sm table-hover table-responsive-md">
									<thead>
									<tr>
										<th>#</th>
										<th>{{__('Booking ID')}}</th>
										<th>{{__('Date')}}</th>
										<th>{{__('Total Amount')}}</th>
										<th>{{__('Commission (-%)')}}</th>
										<th>{{__('Final Amount')}}</th>
										<th>{{__('Payment Mode')}}</th>
										<th>{{__('Status')}}</th>
									</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
						</div>


						<div class="pagination-wrapper py-4">
							<ul class="pagination justify-content-end">

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

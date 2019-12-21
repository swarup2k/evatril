@extends('layouts.app')

@section('content')


	<br>

	<div class="col-lg-12">
		<div class="panel">
			<!--Panel heading-->
			<div class="panel-heading">
				<h3 class="panel-title">{{ __('Venue Details') }}</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
					<tbody>
					<tr>
						<th>Merchant Name</th>
						<td>{{ $venue->merchant['name'] }}</td>
					</tr>
					<tr>
						<th>Merchant Email</th>
						<td>{{ $venue->merchant['email'] }}</td>
					</tr>
					<tr>
						<th>Merchant Mobile</th>
						<td>{{ $venue->merchant['mobile'] }}</td>
					</tr>

					<tr>
						<th>Venue Name</th>
						<td>{{ $venue->name }}</td>
					</tr>
					<tr>
						<th>Mobile</th>
						<td>{{ $venue->mobile }}</td>
					</tr>
					<tr>
						<th>Alternative Mobile</th>
						<td>{{ $venue->alt_mobile }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ $venue->email }}</td>
					</tr>
					<tr>
						<th>Pincode</th>
						<td>{{ $venue->pincode }}</td>
					</tr>
					<tr>
						<th>Area</th>
						<td>{{ $venue->area }}</td>
					</tr>
					<tr>
						<th>State</th>
						<td>{{ $venue->state }}</td>
					</tr>
					<tr>
						<th>City</th>
						<td>{{ $venue->city }}</td>
					</tr>
					<tr>
						<th>Address</th>
						<td>{{ $venue->address }}</td>
					</tr>
					<tr>
						<th>Venue Type</th>
						<td>{{ $venue->venue_type }}</td>
					</tr>
					<tr>
						<th>Business Type</th>
						<td>{{ $venue->business_type }}</td>
					</tr>
					<tr>
						<th>Venue Category</th>
						<td>{{ $venue->venue_category }}</td>
					</tr>
					<tr>
						<th>No of Halls</th>
						<td>{{ $venue->hall_nos }}</td>
					</tr>
					<tr>
						<th>No of Laws</th>
						<td>{{ $venue->lawn_nos }}</td>
					</tr>
					<tr>
						<th>Amenities</th>
						<td>
							@php

								foreach ($venue->amenities as $a){
								echo $a . "<br>";
								}

							@endphp
						</td>
					<tr>
						<th>Active</th>
						<td>
							@if ($venue->active)
								<span class="label label-success">Active</span>
							@else
								<span class="label label-warning">Deactivated</span>
							@endif
						</td>
					</tr>



					</tbody>
				</table>

			</div>
		</div>
	</div>

@endsection

@extends('layouts.app')

@section('content')

	<style>
		.point li{
			cursor: pointer;
		}
	</style>


		<div class="row">
			<div class="col-lg-12">
				<a href="{{ route('admin.venue.add') }}" class="btn btn-rounded btn-info pull-right">{{__('Add New Venue')}}</a>
			</div>
		</div>


	<br>

	<div class="col-lg-12">
		<div class="panel">
			<!--Panel heading-->
			<div class="panel-heading">
				<h3 class="panel-title">{{ __($title) }}</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>#</th>
						<th width="20%">{{__('Name')}}</th>
						<th>Mobile</th>
						<th>Area</th>
						<th>City</th>
						<th>Venue Type</th>
						<th>{{__('Options')}}</th>
					</tr>
					</thead>
					<tbody>
					@foreach($venues as $key => $v)
						<tr>
							<td>{{$key+1}}</td>
							<td>{{ $v->name }}</td>
							<td>{{ $v->mobile }}</td>
							<td>{{ $v->area }}</td>
							<td>{{ $v->city }}</td>
							<td>{{ $v->venue_type }}</td>

							<td>
								<div class="btn-group dropdown">
									<button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
										{{__('Actions')}} <i class="dropdown-caret"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-right point">
										<li><a href="{{ route('admin.venue.view', $v->id) }}">{{__('View')}}</a></li>
										<li><a onclick="confirm_modal('{{route('admin.venue.my.delete', $v->id)}}');">{{__('Delete')}}</a></li>

									</ul>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>

@endsection

@extends('layouts.app')

@section('content')

	<style>
		.point li {
			cursor: pointer;
		}
	</style>




	<br>

	<div class="col-lg-12">
		<div class="panel">
			<!--Panel heading-->
			<div class="panel-heading">
				<h3 class="panel-title">{{ __('Merchant List') }}</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>#</th>
						<th width="20%">{{__('Name')}}</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Status</th>
						<th>{{__('Options')}}</th>
					</tr>
					</thead>
					<tbody>
					@foreach($merchants as $key => $v)
						<tr>
							<td>{{$key+1}}</td>
							<td>{{ $v->name }}</td>
							<td>{{ $v->mobile }}</td>
							<td>{{ $v->email }}</td>
							<td>
								@if ($v->approved == 1)
									<span class="label label-success">Active</span>
								@else
									<span class="label label-warning">Disabled</span>
								@endif
							</td>


							<td>
								<div class="btn-group dropdown">
									<button class="btn btn-primary dropdown-toggle dropdown-toggle-icon"
											data-toggle="dropdown" type="button">
										{{__('Actions')}} <i class="dropdown-caret"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-right point">

										@if ($v->approved == 1)
											<li><a href="{{ route('admin.merchant.deactivate', $v->id) }}">{{__('Deactivate')}}</a></li>
										@else
											<li><a href="{{ route('admin.merchant.activate', $v->id) }}">{{__('Activate')}}</a></li>
										@endif

										<li>
											<a onclick="confirm_modal('{{route('admin.merchant.delete', $v->id)}}');">{{__('Delete')}}</a>
										</li>

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

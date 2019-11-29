@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">{{__('Venue Information')}}</h3>
			</div>

			<!--Horizontal Form-->
			<!--===================================================-->
			<form class="form-horizontal" action="{{ route('admin.venue.save') }}" method="POST"
				  enctype="multipart/form-data">
				@csrf
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="name">{{__('Select Merchant')}}</label>
						<div class="col-sm-9">
							<select name="merchant_id" required class="form-control">
								<option value="NULL">My</option>
								@foreach($merchants as $m)
									<option value="{{ $m->id }}">{{ $m->name }}</option>
								@endforeach

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="name">{{__('Venue Name')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control"
								   required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="mobile">{{__('Mobile')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Mobile')}}" id="mobile" name="mobile"
								   class="form-control"
								   required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="alt_mobile">{{__('Alternative Mobile')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Alternative Mobile')}}" id="alt_mobile"
								   name="alt_mobile" class="form-control"
								   required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="email">{{__('Email Address')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Email Address')}}" id="email" name="email"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="pincode">{{__('Pincode')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Pincode')}}" id="pincode" name="pincode"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="area">{{__('Area')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Area')}}" id="area" name="area"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="state">{{__('State')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('State')}}" id="state" name="state"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="city">{{__('City')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('City')}}" id="city" name="city"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="address">{{__('Address')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Address')}}" id="address" name="address"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="venue_type">{{__('Venue Type') }}</label>
						<div class="col-sm-9">
							<select name="venue_type" id="venue_type" class="form-control">
								<option value="Mandap / Standalone">Mandap / Standalone</option>
								<option value="Hotel Venue">Hotel Venue</option>
								<option value="5 Star Hotel Venue">5 Star Hotel Venue</option>
								<option value="Resort Venue">Resort Venue</option>
								<option value="Community Hall">Community Hall</option>
								<option value="Farm Houes">Farm Houes</option>
								<option value="Destination Venue">Destination Venue</option>
								<option value="Fort / Palace / Temple">Fort / Palace / Temple</option>
								<option value="Golf Field Event">Golf Field Event</option>
								<option value="Other Venue">Other Venue</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label" for="business_type">{{__('Business Type') }}</label>
						<div class="col-sm-9">
							<select name="business_type" id="business_type" class="form-control">

								<option value="Plate System Venue">Plate System Venue</option>
								<option value="Rental Venue">Rental Venue</option>
								<option value="Rental or Plate System">Rental or Plate System</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label"
							   for="venue_category">{{__('Venue Category/Type') }}</label>
						<div class="col-sm-9">
							<select name="venue_category" id="venue_category" class="form-control">
								<option value=""></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label" for="hall_nos">{{__('Number of Halls')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Number of Halls')}}" id="hall_nos" name="hall_nos"
								   class="form-control" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label" for="lawn_nos">{{__('Number of Lawns')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Number of Lawns')}}" id="lawn_nos" name="lawn_nos"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="lawn_nos">{{__('Select Amenities')}}</label>
						<div class="col-sm-9">

						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="lat">{{__('Latitude')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Latitude')}}" id="lat" name="lat"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="lon">{{__('Longitude')}}</label>
						<div class="col-sm-9">
							<input type="text" placeholder="{{__('Longitude')}}" id="lon" name="lon"
								   class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="lawn_nos">{{__('Select Location')}}</label>
						<div class="col-sm-9">
							<div id="map" style="height: 300px;width: 100%;"></div>
						</div>
					</div>


				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-purple" type="submit">{{__('Save')}}</button>
				</div>
				<br>
				<br>
				<br>
			</form>
			<!--===================================================-->
			<!--End Horizontal Form-->

		</div>
	</div>

@endsection

@section('script')
	<script src="{{ asset('js/location-picker.min.js')}}"></script>
	<script>

        function initMap() {
            /**
             *Passing the value of variable received from text box
             **/
            var uluru = {
                lat: 20.337315,
                lng:  85.843338
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: uluru
            });
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: uluru
            });
            google.maps.event.addListener(marker, 'dragend',
                function(marker) {
                    var latLng = marker.latLng;
                    currentLatitude = latLng.lat();
                    currentLongitude = latLng.lng();
					$('#lat').val(currentLatitude);
					$('#lon').val(currentLongitude);
                }
            );
        }

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdzLma_WJwEKVCv_do1N0n9cVUBEftGk&callback=initMap"></script>

@endsection


@extends('merchant.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('fullcalendar-4.3.1/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('fullcalendar-4.3.1/packages/daygrid/main.css') }}">
    <script src="{{ asset('fullcalendar-4.3.1/packages/core/main.js') }}"></script>
    <script src="{{ asset('fullcalendar-4.3.1/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('fullcalendar-4.3.1/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('fullcalendar-4.3.1/packages/interaction/main.js') }}"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'timeGrid'],
                eventClick: function(info) {
                    // info.jsEvent.preventDefault(); // don't let the browser navigate


                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek'
                },

                events: [
                    {
                        title: 'Hello',
                        start: '2020-01-14',
                        url: 'https://google.com',
                        color: 'green',
                        overlap: false,
                        rendering: 'background',
                    },
                    {
                        title: 'Hello',
                        start: '2020-01-18',
                        overlap: false,
                        color: 'red',
                        url: 'https://google.com',
                        rendering: 'background'
                    },
                    {
                        title: 'Hello',
                        start: '2020-01-20',
                        overlap: false,
                        color: 'orange',
                        url: 'https://google.com',
                        rendering: 'background'
                    }
                ]
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

                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        <br>
                    @endif

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
                                        <span class="d-block title heading-3 strong-400">{{ $data['bookings'] }}</span>
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
                                                <td><strong class="heading-6">{{ $data['bookings'] }}</strong></td>
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
                            <div class="col-md-7 mt-4">
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
                                        <table class="table table-sm table-hover table-responsive-md">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Venue Name')}}</th>
                                                <th>{{__('Venue Type')}}</th>
                                                <th>{{__('Guest Capacity')}}</th>
                                                <th>{{__('Phone')}}</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($venues as $key => $v)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $v->name }}</td>
                                                    <td>{{ $v->type }}</td>
                                                    <td>{{ $v->guest_capacity }}</td>
                                                    <td>{{ $v->phone }}</td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <button id="add_hall" data-toggle="modal" data-target="#myModal2"
                                                    class="btn btn-styled btn-base-1 btn-outline btn-sm">Add New Hall/Lawn
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-white mt-4 p-4 text-center">
                                    <div class="heading-4 strong-700">Venue</div>
                                    <p>Manage &amp; organize your venue</p>

                                    <button id="add_venue" type="button"
                                            class="btn btn-styled btn-base-1 btn-outline btn-sm"
                                            data-toggle="modal" data-target="#myModal">Add Venue
                                    </button>
                                </div>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Master Venue</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>

                                            </div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="name">Venue Name</label>
                                                        <input type="text" name="name" class="form-control" required
                                                               id="name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="banner">Venue Banner</label>
                                                        <input type="file" name="banner" class="form-control" required
                                                               id="banner">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="type">Venue Type</label>
                                                        <select name="type" class="form-control" required id="type">
                                                            <option value="VENUE">Venue</option>
                                                            <option value="CATERING_VENUE">Catering Venue</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="charge_per_night">Average Charges</label>
                                                        <input type="text" name="charge_per_night" class="form-control"
                                                               required
                                                               id="charge_per_night">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="guest_capacity">Guest Capacity</label>
                                                        <input type="text" name="guest_capacity" class="form-control"
                                                               required
                                                               id="guest_capacity">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="text" name="phone" class="form-control" required
                                                               id="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" name="address" class="form-control" required
                                                               id="address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" name="city" class="form-control" required
                                                               id="city">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <input type="text" name="state" class="form-control" required
                                                               id="state">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pincode">Pincode</label>
                                                        <input type="text" name="pincode" class="form-control" required
                                                               id="pincode">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inclusions">Inclusions</label>
                                                        <input type="text" name="inclusions" class="form-control"
                                                               required
                                                               id="inclusions">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="spaces">Spaces</label>
                                                        <input type="text" name="spaces" class="form-control" required
                                                               id="spaces">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location_description">Location Description</label>
                                                        <input type="text" name="location_description"
                                                               class="form-control" required
                                                               id="location_description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="accommodation">Accommodation</label>
                                                        <input type="text" name="accommodation" class="form-control"
                                                               required
                                                               id="accommodation">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="event_space">Event Space</label>
                                                        <input type="text" name="event_space" class="form-control"
                                                               required
                                                               id="event_space">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="events_type">Event Type</label>
                                                        <input type="text" name="events_type" class="form-control"
                                                               required
                                                               id="events_type">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="catering_policy">Catering Policy</label>
                                                        <input type="text" name="catering_policy" class="form-control"
                                                               required
                                                               id="catering_policy">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alcohol_policy">Alcohol Policy</label>
                                                        <input type="text" name="alcohol_policy" class="form-control"
                                                               required
                                                               id="alcohol_policy">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="indian_cuisines">Indian Cuisines</label>
                                                        <input type="text" name="indian_cuisines" class="form-control"
                                                               required
                                                               id="indian_cuisines">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="western_cuisines">Western Cuisines</label>
                                                        <input type="text" name="western_cuisines" class="form-control"
                                                               required
                                                               id="western_cuisines">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="oriental_cuisines">Oriental Cuisines</label>
                                                        <input type="text" name="oriental_cuisines" class="form-control"
                                                               required
                                                               id="oriental_cuisines">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="modes_of_payment">Payment Mode</label>
                                                        <input type="text" name="modes_of_payment" class="form-control"
                                                               required
                                                               id="modes_of_payment">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cancellation_policy">Cancellation Policy</label>
                                                        <input type="text" name="cancellation_policy"
                                                               class="form-control" required
                                                               id="cancellation_policy">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="limit_for_celebration">Limit for Celebration</label>
                                                        <input type="text" name="limit_for_celebration"
                                                               class="form-control" required
                                                               id="limit_for_celebration">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="restrictions">Restrictions</label>
                                                        <input type="text" name="restrictions"
                                                               class="form-control" required
                                                               id="restrictions">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lat">Latitude</label>
                                                        <input type="text" name="lat"
                                                               class="form-control" required
                                                               id="lat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lon">Longitude</label>
                                                        <input type="text" name="lon"
                                                               class="form-control" required
                                                               id="lon">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Hall</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>

                                            </div>
                                            <form action="{{ route('merchant.store.hall') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="name">Hall/Lawn Name</label>
                                                        <input type="text" name="name" class="form-control" required
                                                               id="name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="type">Select Venue</label>
                                                        <select name="venue_id" class="form-control" required id="type">
                                                            @foreach( \App\MasterVenue::where('merchant_id', auth('merchant')->id())->get() as $venue)
                                                                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">Select Type</label>
                                                        <select name="type" class="form-control" required id="type">
                                                            <option value="LAWN">Lawn</option>
                                                            <option value="HALL">Hall</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="area_size">Area Size</label>
                                                        <input type="text" name="area_size" class="form-control"
                                                               required
                                                               id="area_size">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="capacity_row">Capacity Row</label>
                                                        <input type="text" name="capacity_row" class="form-control"
                                                               required
                                                               id="capacity_row">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="capacity_floating">Capacity Floating</label>
                                                        <input type="text" name="capacity_floating" class="form-control" required
                                                               id="capacity_floating">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="booking_amount">Average Booking Amount</label>
                                                        <input type="text" name="booking_amount" class="form-control" required
                                                               id="booking_amount">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
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
    <script !src="">
        $(document).ready(function () {
            // $('#add_venue').click();
        });
    </script>
@endsection


@extends('merchant.layouts.app')

@section('content')
    <section class="gry-bg py-4 profile">
        <div class="container">
            <style>
                .loaderx{
                    display: none;
                }
                .loader {
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 999;
                    background-color: #000000a3;
                    height: 100%;
                    width: 100%;
                    display: none;
                }

                .loader img {
                    position: relative;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            </style>
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                @include('merchant.inc.sidemenu')
                <div class="col-lg-9">
                    <div class="main-content">
                        <div class="loader" id="loader">
                            <img src="{{ asset('img/loader.gif') }}" alt="">
                        </div>
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        {{__('Bookings')}}
                                    </h2>
                                    <br>
                                    <button class="btn btn-success" data-toggle="modal" data-target="#bookingModal">Add
                                        Booking
                                    </button>
                                </div>

                                <div id="bookingModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Offline Booking</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>

                                            </div>
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="venue_id">Select venue:</label>
                                                        <select name="venue_id" class="form-control" id="venue_id">
                                                            @foreach(\App\MasterVenue::where('merchant_id', auth('merchant')->id())->get() as $venue)
                                                                <option
                                                                    value="{{ $venue->id }}">{{ $venue->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date">Select date:</label>
                                                        <input type="date" name="booking_date" class="form-control" id="date">
                                                    </div>
                                                    <img class="loaderx" id="loaderx" src="{{ asset('img/loader.gif') }}" alt="" height="30px">
                                                    <div class="form-group">
                                                        <label for="slot_id">Select Slot:</label>
                                                        <select name="slot_id" class="form-control" id="slot_id">
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">Name:</label>
                                                        <input type="text" name="name" class="form-control" id="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email address:</label>
                                                        <input type="email" name="email" class="form-control"
                                                               id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone:</label>
                                                        <input type="text" name="phone" class="form-control" id="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_guest">Guest #:</label>
                                                        <input type="text" name="total_guest" class="form-control" id="total_guest">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_amount">Total Amount:</label>
                                                        <input type="text" name="total_amount" class="form-control"
                                                               id="total_amount">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="advance_amount">Advance Amount:</label>
                                                        <input type="text" name="advance_amount" class="form-control"
                                                               id="advance_amount">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('merchant.home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('merchant.home') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a
                                                    href="{{ route('merchant.bookings') }}">{{__('Bookings')}}</a></li>
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
                                        <th>{{__('User Name')}}</th>
                                        <th>{{__('Venue Name')}}</th>
                                        <th>{{__('Guests')}}</th>
                                        <th>{{__('Date')}}</th>
                                        <th>{{__('Amount')}}</th>
                                        <th>{{__('Amount Paid')}}</th>
                                        <th>{{__('Options')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->name }}</td>
                                            <td>{{ $booking->venue['name'] }}</td>
                                            <td>{{ $booking->total_guest }}</td>
                                            <td>{{ $booking->booking_date }}</td>
                                            <td>{{ $booking->total_amount }}</td>
                                            <td>{{ $booking->advance_amount }}</td>
                                            <td><a href="#" class="btn btn-success"><i class="fa fa-eye"></i> View</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <script !src="">
        $(document).ready(function () {
            $('#date').change(function (event) {
                $('#loaderx').show();
                var slotData = "";
                var selecteddate = event.target.value;
                var venue_id = $('#venue_id option:selected').val();
                $.post("{{ route('merchant.ajax.checkSlot') }}", {
                    date: selecteddate,
                    venue_id: venue_id,
                    _token: '{{ csrf_token() }}'
                })
                    .done(function (data) {
                        $('#loaderx').hide();

                        if (Object.keys(data.data).length) {
                            data.data.forEach(myFunction);

                            function myFunction(item) {
                                if (item.available == 1) {
                                    slotData += "<option  value='" + item.id + "'>" + item.from_time + " - " + item.to_time + "</option>";
                                } else {
                                    slotData += "<option disabled value='" + item.id + "'>" + item.from_time + " - " + item.to_time + " (Slot booked)</option>";
                                }
                            }

                            $('#slot_id').empty().append(slotData);

                        } else {
                            alert("Slot was not found for this venue");
                        }
                    });

            });
        });
    </script>
@endsection

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
                                        {{__('Support')}}
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('merchant.home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('merchant.home') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a
                                                    href="{{ route('merchant.support') }}">{{__('Support')}}</a></li>
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

                                <div class="row">
                                    <div class="col-md-12  bg-white">

                                        <div class="form-box-content p-3">
                                            <form action="" method="get">
                                                <div class="form-group">
                                                    <label for="issue_type">Issue Type:</label>
                                                    <select name="issue_type" id="issue_type" class="form-control">
                                                        <option value="Payment">Payment</option>
                                                        <option value="Booking">Booking</option>
                                                        <option value="Refund">Refund</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Describe it.</label>
                                                    <textarea class="form-control" name="description" id="description"
                                                              cols="30" rows="10"></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

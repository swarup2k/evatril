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
                                        {{__('Halls')}}
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('merchant.home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('merchant.home') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a
                                                    href="{{ route('merchant.list.hall') }}">{{__('Halls')}}</a></li>
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
                                        <th>{{__('Hall Name')}}</th>
                                        <th>{{__('Type')}}</th>
                                        <th>{{__('Area Size')}}</th>
                                        <th>{{__('Row Capacity')}}</th>
                                        <th>{{__('Avg. Booking Amount')}}</th>
                                        <th>{{__('Options')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($halls as $key => $v)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $v->name }}</td>
                                            <td>{{ $v->type }}</td>
                                            <td>{{ $v->area_size }}</td>
                                            <td>{{ $v->capacity_row }}</td>
                                            <td>{{ $v->booking_amount }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn" type="button" id="" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">

                                                        <a href="{{ route('merchant.delete.hall', $v->id) }}"
                                                           class="dropdown-item">{{__('Delete')}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">
                                {{ $halls->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
{{--            <div class="card-box pd-20 height-100-p mb-30">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <img src="vendors/images/banner-img.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8">--}}
{{--                        <h4 class="font-20 weight-500 mb-10 text-capitalize">--}}
{{--                            Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>--}}
{{--                        </h4>--}}
{{--                        <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">130</div>
                                <div class="weight-600 font-14">Total Users</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart2"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">80</div>
                                <div class="weight-600 font-14">Total Items</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart3"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">100</div>
                                <div class="weight-600 font-14">Active Users</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart4"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">15</div>
                                <div class="weight-600 font-14">Sold Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-box mb-30">
                <h2 class="h4 pd-20">All Selling Products</h2>
                <table class="data-table table nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Product</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                    @if(session('success_status'))
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-success">
                                    {{ session('success_status') }}
                                </div>
                            </td>
                        </tr>
                    @elseif(session('decline_status'))
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-danger">
                                    {{ session('decline_status') }}
                                </div>
                            </td>
                        </tr>
                    @endif
                    </thead>
                    <tbody>
                    @if(!empty($posts))
                        @foreach($posts as $post)
                            <tr>
                                <td class="table-plus">
                                    <img src="{{$post['ProductFirstImageURI']}}" width="70" height="70" alt="">
                                </td>
                                <td>
                                    <h5 class="font-16">{{$post['Product_Title']}}</h5>
                                    {{$post['Product_Name']}}
                                </td>
                                <td>
                                    <h5 class="font-16 font-weight-normal">{{$post['Country']}}</h5>
                                    {{$post['State']}}
                                </td>
                                <td>
                                    {{$post['Product_Price']}}
                                    @if(strtolower($post['Country']) == 'pakistan')
                                        PKR
                                    @else
                                        AED
                                    @endif
                                </td>
                                <td>{{$post['Date']}}</td>
                                <td class="@if($post['ProductStatus'] == 'Pending') text-danger @elseif($post['ProductStatus'] == 'Active') text-success @else text-warning @endif">{{$post['ProductStatus']}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{url('admin/ads/view')}}/{{$post->id()}}"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="{{url('admin/ads/approve')}}/{{$post->id()}}/{{$post['MYID']}}"><i class="dw dw-like"></i> Approve</a>
                                            <a class="dropdown-item" href="{{url('admin/ads/decline')}}/{{$post->id()}}/{{$post['MYID']}}"><i class="dw dw-delete-2"></i> Decline</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                Copyright © 2020 Bikroy
            </div>
        </div>
    </div>
@endsection

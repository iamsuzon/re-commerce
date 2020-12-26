@extends('layouts.admin')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box mb-30">
                <h2 class="h4 pd-20">All Pending Ads</h2>
                <table class="data-table table nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Product</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $key => $post)
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
                            <td>{{$post['Phone']}}</td>
                            <td>
                                {{$post['Product_Price']}}
                                @if(strtolower($post['Country']) == 'pakistan')
                                    PKR
                                @else
                                    AED
                                @endif
                            </td>
                            <td>{{$post['Date']}}</td>
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
                    </tbody>
                </table>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                Copyright © 2020 Bikroy
            </div>
        </div>
    </div>
@endsection

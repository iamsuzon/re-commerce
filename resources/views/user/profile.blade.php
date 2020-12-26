@extends('layouts.app')
@section('content')
    <style>
        .p-img{
            height: 170px;
            width: 140px
        }
    </style>
    <div class="container mt-5 p-5 rounded" id="user-dashboard">
        <div class="row">
            <div class="col-md-3" id="dashboard-left-side">
                <div class="row mb-5">
                    <div class="col">
                        <div class="img-box overflow-hidden">
                            @if(isset($value['ProfileImageURI']))
                                <img id="output" src="{{$value['ProfileImageURI']}}" class="rounded-circle" alt="Profile Image" width="150px" height="150px">
                            @else
                                <img id="output" src="{{asset('images/default-profile.png')}}" class="rounded-circle" alt="Profile Image" width="150px" height="150px">
                            @endif
                        </div>
                    </div>
                </div>
                <h3>Account</h3>
                <ul class="list-group list-group-flush mt-4">
                    <a href="{{route('user-profile')}}"><li class="list-group-item list-group-item-action font-weight-bold rounded text-center">My Account</li></a>
                    <a href=""><li class="list-group-item list-group-item-action rounded text-center">Favorites</li></a>
                    <a href="{{route('user-settings')}}"><li class="list-group-item list-group-item-action rounded text-center">Settings</li></a>
                </ul>
            </div>
            <div class="col-md-9" id="dashboard-right-side">
                @if(isset($value['Name']))
                <h3 class="user-text">{{$value['Name']}}</h3>
                @else
                    <h3 class="user-text">Hello User!</h3>
                @endif

                <div class="sort-div">
                    <p class="d-inline">Filter By:</p>
                    <div class="btn-group btn-group-sm float-right">
                        <form action="{{route('user-profile')}}" method="POST">
                            @csrf
                            <input type="hidden" name="asc" value="asc">
                            <button type="submit" class="btn btn-success btn-sm rounded-0 @if(isset($isactive) AND $isactive == 'asc') active @endif">Old to New</button>
                        </form>
                        <form action="{{route('user-profile')}}" method="POST">
                            @csrf
                            <input type="hidden" name="desc" value="desc">
                            <button type="submit" class="btn btn-success btn-sm rounded-0 @if(isset($isactive) AND $isactive == 'desc') active @endif">New to Old</button>
                        </form>
                    </div>
                </div>

                    @if(session('warning_status'))
                        <div>
                            <div class="alert alert-warning">
                                {{ session('warning_status') }}
                            </div>
                        </div>
                    @elseif(session('upload_status'))
                        <div>
                            <div class="alert alert-success">
                                {{ session('upload_status') }}
                            </div>
                        </div>
                    @endif

                <div class="ad-box" style="margin-top: 20px">
                    @if(isset($userrequest) AND isset($isactive))
                        <div class="row">
                            <div class="col-lg-12 mt-3 mx-auto">
                                <!-- List group-->
                                <ul class="list-group shadow">
                                    <!-- list group item-->
                                    @foreach($userrequest as $requests)
                                        <li class="list-group-item">
                                            <!-- Custom content-->
                                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                <div class="media-body order-2 order-lg-1">
                                                    <h5 class="mt-0 font-weight-bold mb-2">{{$requests['Product_Title']}}</h5>
                                                    <p class="font-italic text-muted mb-0 small">{{$requests['Product_Details']}}</p>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <h6 class="font-weight-bold my-2">{{$requests['Product_Price']}} @if(strtolower($requests['Country']) == 'pakistan') PKR @else AED @endif</h6>
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item m-0">{{$requests['Country']}}, {{$requests['State']}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mt-1">
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item m-0 @if($requests['ProductStatus'] == 'Active') text-success @elseif($requests['ProductStatus'] == 'Declined') text-danger @else text-dark @endif">{{$requests['ProductStatus']}}</li>
                                                            <a href="{{url('user-ad-view')}}/{{$requests['Product_Slug']}}" class="list-inline-item ml-3">View</a>
                                                            <li href="#" class="list-inline-item float-right">{{$requests['Date']}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <img src="{{$requests['ProductFirstImageURI']}}" alt="Generic placeholder image" class="ml-lg-5 order-1 order-lg-2" style="width: 150px; height: 150px; object-fit: cover">
                                            </div> <!-- End -->
                                        </li>
                                @endforeach
                                <!-- list group item-->
                                </ul>
                            </div>
                        </div>
                    @elseif(isset($userrequest))
                        <div class="row">
                            <div class="col-lg-12 mt-3 mx-auto">
                                <!-- List group-->
                                <ul class="list-group shadow">
                                    <!-- list group item-->
                                    @foreach($userrequest as $requests)
                                        <li class="list-group-item">
                                            <!-- Custom content-->
                                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                <div class="media-body order-2 order-lg-1">
                                                    <h5 class="mt-0 font-weight-bold mb-2">{{$requests['Product_Title']}}</h5>
                                                    <p class="font-italic text-muted mb-0 small">{{$requests['Product_Details']}}</p>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <h6 class="font-weight-bold my-2">{{$requests['Product_Price']}} @if(strtolower($requests['Country']) == 'pakistan') PKR @else AED @endif</h6>
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item m-0">{{$requests['Country']}}, {{$requests['State']}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mt-1">
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item m-0 text-danger">{{$requests['ProductStatus']}}</li>
                                                            <a href="{{url('user-ad-view')}}/{{$requests['Product_Slug']}}" class="list-inline-item ml-3">View</a>
                                                            <li href="#" class="list-inline-item float-right">{{$requests['Date']}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <img src="{{$requests['ProductFirstImageURI']}}" alt="Generic placeholder image" class="ml-lg-5 order-1 order-lg-2" style="width: 150px; height: 150px; object-fit: cover">
                                            </div> <!-- End -->
                                        </li>
                                    @endforeach
                                    <!-- list group item-->
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="ad-image text-center mb-3">
                            <img src="{{asset('images/ad.png')}}" alt="" style="width: 30%;height: auto">
                        </div>
                        <h1 class="lead text-center font-weight-bold">You don't have any ads yet.</h1>
                        <p class="lead text-center">Click the "Post an ad now!" button to post your ad.</p>
                    @endif
                    <div class="ad-button text-center mt-4">
                        <a href="{{route('ad-post-view')}}" class="btn btn-lg btn-outline-dark rounded-0 font-weight-bold text-capitalize">Post your ad now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

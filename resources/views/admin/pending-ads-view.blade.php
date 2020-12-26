@extends('layouts.admin')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Pending Ad Details</h2>
                <div class="">
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-4 ml-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-image-list" data-toggle="list" href="#list-image" role="tab" aria-controls="image">Product Images</a>
                                    <a class="list-group-item list-group-item-action" id="list-title-list" data-toggle="list" href="#list-title" role="tab" aria-controls="title">Product Title</a>
                                    <a class="list-group-item list-group-item-action" id="list-name-list" data-toggle="list" href="#list-name" role="tab" aria-controls="name">Product Name</a>
                                    <a class="list-group-item list-group-item-action" id="list-condition-list" data-toggle="list" href="#list-condition" role="tab" aria-controls="condition">Product Condition</a>
                                    <a class="list-group-item list-group-item-action" id="list-price-list" data-toggle="list" href="#list-price" role="tab" aria-controls="price">Product Price</a>
                                    <a class="list-group-item list-group-item-action" id="list-description-list" data-toggle="list" href="#list-description" role="tab" aria-controls="description">Product Description</a>
                                    <a class="list-group-item list-group-item-action" id="list-doorstep-list" data-toggle="list" href="#list-doorstep" role="tab" aria-controls="doorstep">Doorstep</a>
                                    <a class="list-group-item list-group-item-action" id="list-urgent-list" data-toggle="list" href="#list-urgent" role="tab" aria-controls="urgent">Urgent</a>
                                    <a class="list-group-item list-group-item-action" id="list-location-list" data-toggle="list" href="#list-location" role="tab" aria-controls="location">Location</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-image" role="tabpanel" aria-labelledby="list-image-list">
                                        <img class="m-2 rounded" src="{{$thepost['ProductFirstImageURI']}}" alt="Product Image" width="200px" height="200px">
                                        @if($thepost['ProductSecondImageURI'] != null)
                                            <img class="m-2 rounded" src="{{$thepost['ProductSecondImageURI']}}" alt="Product Image" width="200px" height="200px">
                                        @endif
                                        @if($thepost['ProductThirdImageURI'] != null)
                                            <img class="m-2 rounded" src="{{$thepost['ProductThirdImageURI']}}" alt="Product Image" width="200px" height="200px">
                                        @endif
                                        @if($thepost['ProductFourthImageURI'] != null)
                                            <img class="m-2 rounded" src="{{$thepost['ProductFourthImageURI']}}" alt="Product Image" width="200px" height="200px">
                                        @endif
                                    </div>
                                    <div class="tab-pane fade h3" id="list-title" role="tabpanel" aria-labelledby="list-title-list">{{$thepost['Product_Title']}}</div>
                                    <div class="tab-pane fade h3" id="list-name" role="tabpanel" aria-labelledby="list-name-list">{{$thepost['Product_Name']}}</div>
                                    <div class="tab-pane fade h3" id="list-condition" role="tabpanel" aria-labelledby="list-condition-list">{{$thepost['Product_Condition']}}</div>
                                    <div class="tab-pane fade h3" id="list-price" role="tabpanel" aria-labelledby="list-price-list">@if(strtolower($thepost['Country']) == 'pakistan'){{$thepost['Product_Price']}} PKR @else {{$thepost['Product_Price']}} AED @endif</div>
                                    <div class="tab-pane fade h3" id="list-description" role="tabpanel" aria-labelledby="list-description-list">{{$thepost['Product_Details']}}</div>
                                    <div class="tab-pane fade h3 text-capitalize" id="list-doorstep" role="tabpanel" aria-labelledby="list-doorstep-list">{{$thepost['Doorstep']}}</div>
                                    <div class="tab-pane fade h3 text-capitalize" id="list-urgent" role="tabpanel" aria-labelledby="list-urgent-list">{{$thepost['Urgent']}}</div>
                                    <div class="tab-pane fade h3" id="list-location" role="tabpanel" aria-labelledby="list-location-list">{{$thepost['Country']}} - {{$thepost['State']}} - {{$thepost['City']}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                Copyright © 2020 Bikroy
            </div>
        </div>
    </div>
@endsection

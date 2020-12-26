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
                    @foreach($addetails as $details)
                        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <!-- slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active"> <img src="{{$details['ProductFirstImageURI']}}" alt="Hills"> </div>
                                <div class="carousel-item"> <img src="@if(!empty($details['ProductSecondImageURI'])) {{$details['ProductSecondImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" alt="Hills"> </div>
                                <div class="carousel-item"> <img src="@if(!empty($details['ProductThirdImageURI'])) {{$details['ProductThirdImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" alt="Hills"> </div>
                                <div class="carousel-item"> <img src="@if(!empty($details['ProductFourthImageURI'])) {{$details['ProductFourthImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" alt="Hills"> </div>
                            </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="{{$details['ProductFirstImageURI']}}" class=""> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="@if(!empty($details['ProductSecondImageURI'])) {{$details['ProductSecondImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" class=""> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="@if(!empty($details['ProductThirdImageURI'])) {{$details['ProductThirdImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" class=""> </a> </li>
                                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="@if(!empty($details['ProductFourthImageURI'])) {{$details['ProductFourthImageURI']}} @else {{$details['ProductFirstImageURI']}} @endif" class=""> </a> </li>
                            </ol>
                        </div>
                        <div class="post-details p-3 rounded border">
                            <div class="ad-price">
                                <h2 class="font-weight-bold d-inline">{{$details['Product_Price']}}@if(strtolower($details['Country']) == 'pakistan') PKR @else AED @endif</h2>
                                <i class="fas fa-share-alt d-inline float-right" data-toggle="modal" data-target="#myModal"></i>
                            </div>
                            <h4 class="font-weight-light">{{$details['Product_Title']}}</h4>
                            <p>
                                <span class="d-inline">{{$details['Country']}}, {{$details['State']}}, {{$details['City']}}</span>
                                <span class="d-inline float-right">{{$details['Date']}}</span>
                            </p>
                            <h4 class="font-weight-bold">Details</h4>
                            <hr>
                            <div class="post-conditions">
                                <p class="d-inline ">{{$details['Product_Condition']}}</p>
                                <p class="d-inline ml-4">{{$details['Product_Type']}}</p>
                                <p class="d-inline ml-4">{{$details['Urgent']}}</p>
                                <p class="d-inline ml-4">{{$details['Doorstep']}}</p>
                            </div>
                            <h4 class="font-weight-bold mt-4">Description</h4>
                            <p>
                                {{$details['Product_Details']}}
                            </p>
                            <hr>
                            <div class="contact-details">
                                <h4 class="font-weight-bold mt-4 d-inline">Contact</h4>
                                <div class="sold-mark d-inline float-right">
                                    <a href="">
                                        <p class="d-inline">Mark as Sold</p>
                                        <p class=" d-inline float-right ml-2">
                                            <i class="far fa-check-circle"></i>
                                        </p>
                                    </a>
                                </div>
                                <p class="mt-2">{{$details['Phone']}}</p>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Copy Shareable Link</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <input class="form-control" type="text" value="{{url('/')}}/{{$details['Product_Slug']}}" id="myInput">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success d-inline float-left rounded-0" onclick="myFunction()" onmouseout="outFunc()">Copy to clipboard</button>
                                        <button type="button" class="btn btn-outline-danger d-inline float-right rounded-0" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied: " + copyText.value;
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <section id="search">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <div class="search-box">
                        <form action="">
                            <div class="input-group mb-4 p-1">
                                <input type="search" placeholder="Find Cars,Mobile Phones and more.." aria-describedby="button-addon3" class="form-control bg-none border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-link bg-danger text-white"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
        </div>
    </section>

    <section id="popular-categories" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-weight-bold popular-title">Popular Categories</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-mobile-alt d-inline text-danger"></i>
                            <p class="d-inline ml-1">Mobiles</p>
                        </li>
                        <li><a href="">Tablets</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Mobile Phones</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Mobiles</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-car-side d-inline text-danger"></i>
                            <p class="d-inline ml-1">Vehicles</p>
                        </li>
                        <li><a href="">Cars</a></li>
                        <li><a href="">Cars on Installments</a></li>
                        <li><a href="">Car Accessories</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Vehicles</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-home d-inline text-danger"></i>
                            <p class="d-inline ml-1">Property for Sale</p>
                        </li>
                        <li><a href="">Land & Plots</a></li>
                        <li><a href="">Houses</a></li>
                        <li><a href="">Apartments & Flats</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Property for Sale</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-building d-inline text-danger"></i>
                            <p class="d-inline ml-1">Property for Rent</p>
                        </li>
                        <li><a href="">Houses</a></li>
                        <li><a href="">Shops</a></li>
                        <li><a href="">Roommates</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Property for Renr</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-tv d-inline text-danger"></i>
                            <p class="d-inline ml-1">Classifieds</p>
                        </li>
                        <li><a href="">Electronics</a></li>
                        <li><a href="">TV - Video - Audio</a></li>
                        <li><a href="">Home Appliances</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Classifieds</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-6">
                    <ul>
                        <li class="list-header mb-1">
                            <i class="fas fa-user-friends d-inline text-danger"></i>
                            <p class="d-inline ml-1">Jobs</p>
                        </li>
                        <li><a href="">Online</a></li>
                        <li><a href="">Marketing</a></li>
                        <li><a href="">IT & Networking</a></li>
                        <li class="list-footer mt-1">
                            <a class="d-inline" href="">All in Jobs</a>
                            <i class="fas fa-arrow-right d-inline"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-phones" class="mt-5 home-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-weight-bold d-inline popular-title">Popular in Phones</h2>
                    <a href="" class=" d-inline float-right">
                        <p class="font-weight-bold text-danger d-inline">All in Phone</p>
                        <i class="fas fa-arrow-right d-inline text-danger"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://pocketnow.com/files/2018/08/phones-in-hand.jpg" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://miro.medium.com/max/681/0*TWwRFwyw23Qx61ah" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">320 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">DUBAI, UAE</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://pocketnow.com/wp-content/uploads/2018/08/unboxing.jpg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">50 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">AJMAN, UAE</p>
                                <p class="card-text d-inline float-right">SEP 22</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://bikribd.com/uploads/images/thumb-816x460-8fbdf735b195ae488b8b75f18fc0f71a.jpg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-cars" class="mt-5 home-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-weight-bold d-inline popular-title">Popular in Cars</h2>
                    <a href="" class=" d-inline float-right">
                        <p class="font-weight-bold text-danger d-inline">All in Cars</p>
                        <i class="fas fa-arrow-right d-inline text-danger"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://www.motortrend.com/uploads/sites/5/2014/10/2012-Honda-Accord-SE-sedan-front-three-quarter.jpg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://www.garikroybikroy.com/images/m1063.jpg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">320 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">DUBAI, UAE</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://media.mahindrafirstchoice.com/live_web_images/usedcarsimg/mfc/941/416540/cover_image-20200826120706.png?w=257&h=138&mode=crop" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">50 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">AJMAN, UAE</p>
                                <p class="card-text d-inline float-right">SEP 22</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://carfax-img.vast.com/carfax/-2101315462459799752/4/344x258" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-propert-sale" class="mt-5 home-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-weight-bold d-inline popular-title">Popular in Property for Sale</h2>
                    <a href="" class=" d-inline float-right">
                        <p class="font-weight-bold text-danger d-inline">All in Property for Sale</p>
                        <i class="fas fa-arrow-right d-inline text-danger"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://images.prop24.com/233052690/Crop525x350" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://media.rightmove.co.uk/dir/crop/10:9-16:9/8k/7730/100268156/7730_30219515_IMG_01_0000_max_476x317.jpg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">320 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">DUBAI, UAE</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center">
                            <img src="https://www.meretdemeures.com/media/CACHE/images/uploads/21fb7a24-b00a-4cec-b352-3adf936377c8/d551224796e57bd8f239a353bf02797f.jpeg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">50 AED</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">AJMAN, UAE</p>
                                <p class="card-text d-inline float-right">SEP 22</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <!-- Kitchen Sink -->
                    <div class="card pmd-card">
                        <div class="pmd-card-media text-center" style="position: relative">
                            <span class="text-white bg-danger text-uppercase" style="position: absolute;top: 0px;left: 0px;font-weight: 800;font-size: 12px;padding: 8px;">Urgent</span>
                            <img src="https://www.realestatedatabase.net/PropertyPhotos/224/201908160407226869_201908160416390154.jpeg" width="1184" height="666" class="img-fluid">
                        </div>
                        <div class="border-div">
                            <div class="card-header bg-white">
                                <h5 class="card-title font-weight-bold">200 PKR</h5>
                                <p class="card-subtitle">New hot sale led tv 46" inch..</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text d-inline">KARACHI, PAKISTAN</p>
                                <p class="card-text d-inline float-right">NOV 10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download-app" class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/app.png')}}" alt="" style="width: 220px;height: 100px">
                </div>
                <div class="col-md-4">
                    <h4 class="text-center font-weight-bold">Find amazing deals on the go.</h4>
                    <h4 class="text-center text-danger font-weight-bold">Download the app now!</h4>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('images/playstore.png')}}" alt="" style="width: 150px;height: 50px">
                </div>
            </div>
        </div>
    </section>
@endsection

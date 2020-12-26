@extends('layouts.app')
@section('content')
    <div class="container mt-5 p-5 rounded" id="user-dashboard">
        <div class="row">
            <div class="col-md-8 offset-md-2" id="dashboard-post">
                <h3 class="text-uppercase text-center">Post your ad</h3>
                <div class="categories-box mt-4">
                    <ul id="category">
                        <li class="level1 lead text-center font-weight-bold">CHOOSE A CATEGORY</li>
                        <li class="drop-nav level1"><i class="fas fa-mobile-alt float-left"></i>Mobile<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="{{route('ad-tablets')}}"><li class="drop-nav">Tablets</li></a>
                                <a href="{{route('ad-phone-accessories')}}"><li class="drop-nav">Accessories</li></a>
                                <a href="{{route('ad-mobiles')}}"><li class="drop-nav">Mobile Phones</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-car-side float-left"></i>Vehicles<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Cars</li></a>
                                <a href="{{route('ad-car-installments')}}"><li class="drop-nav">Cars on Installments</li></a>
                                <a href="{{route('ad-car-accessories')}}"><li class="drop-nav">Cars Accessories</li></a>
                                <a href="#"><li class="drop-nav">Spare Parts</li></a>
                                <a href="#"><li class="drop-nav">Buses, Vans & Trucks</li></a>
                                <a href="#"><li class="drop-nav">Rickshaw & Chingchi</li></a>
                                <a href="#"><li class="drop-nav">Other Vehicle</li></a>
                                <a href="#"><li class="drop-nav">Boats</li></a>
                                <a href="#"><li class="drop-nav">Tractor & Trailers</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-building float-left"></i>Property for Sale<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Land & Plots</li></a>
                                <a href="#"><li class="drop-nav">Houses</li></a>
                                <a href="#"><li class="drop-nav">Apartments & Flats</li></a>
                                <a href="#"><li class="drop-nav">Shops - Offices - Commercial Space</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-home float-left"></i>Property for Rent<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Houses</li></a>
                                <a href="#"><li class="drop-nav">Apartments & Flats</li></a>
                                <a href="#"><li class="drop-nav">Portions & Floors</li></a>
                                <a href="#"><li class="drop-nav">Shops - Offices - Commercial Space</li></a>
                                <a href="#"><li class="drop-nav">Rooms</li></a>
                                <a href="#"><li class="drop-nav">Roommates & Paying Guests</li></a>
                                <a href="#"><li class="drop-nav">Vacation Rentals - Guest Houses</li></a>
                                <a href="#"><li class="drop-nav">Land & Plots</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-lightbulb float-left"></i>Electronics & Home Appliances<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Computers & accessories</li></a>
                                <a href="#"><li class="drop-nav">TV - Video - Audio</li></a>
                                <a href="#"><li class="drop-nav">Cameras & Accessories</li></a>
                                <a href="#"><li class="drop-nav">Games & Entertainment</li></a>
                                <a href="#"><li class="drop-nav">Other Home Appliances</li></a>
                                <a href="#"><li class="drop-nav">Generators, UPS & Power Solutions</li></a>
                                <a href="#"><li class="drop-nav">Kitchen Appliances</li></a>
                                <a href="#"><li class="drop-nav">AC & Coolers</li></a>
                                <a href="#"><li class="drop-nav">Fridges & Freezers</li></a>
                                <a href="#"><li class="drop-nav">Washing Machines & Dryers</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-biking float-left"></i>Bikes<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Motorcycles</li></a>
                                <a href="#"><li class="drop-nav">Spare Parts</li></a>
                                <a href="#"><li class="drop-nav">Bicycles</li></a>
                                <a href="#"><li class="drop-nav">ATV & Quads</li></a>
                                <a href="#"><li class="drop-nav">Scooters</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-industry float-left"></i>Business, Industrial & Agriculture<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Business for Sale</li></a>
                                <a href="#"><li class="drop-nav">Food & Restaurants</li></a>
                                <a href="#"><li class="drop-nav">Trade & Industrial</li></a>
                                <a href="#"><li class="drop-nav">Construction & Heavy Machinery</li></a>
                                <a href="#"><li class="drop-nav">Agriculture</li></a>
                                <a href="#"><li class="drop-nav">Other Business & Industry</li></a>
                                <a href="#"><li class="drop-nav">Medical & Pharma</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-users float-left"></i>Services<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Education & Classes</li></a>
                                <a href="#"><li class="drop-nav">Travel & Visa</li></a>
                                <a href="#"><li class="drop-nav">Car Rental</li></a>
                                <a href="#"><li class="drop-nav">Drivers & Taxi</li></a>
                                <a href="#"><li class="drop-nav">Web Development</li></a>
                                <a href="#"><li class="drop-nav">Other Services</li></a>
                                <a href="#"><li class="drop-nav">Electronics & Computer Repair</li></a>
                                <a href="#"><li class="drop-nav">Event Services</li></a>
                                <a href="#"><li class="drop-nav">Health & Beauty</li></a>
                                <a href="#"><li class="drop-nav">Maids & Domestic Help</li></a>
                                <a href="#"><li class="drop-nav">Movers & Packers</li></a>
                                <a href="#"><li class="drop-nav">Home & Office Repair</li></a>
                                <a href="#"><li class="drop-nav">Catering & Restaurant</li></a>
                                <a href="#"><li class="drop-nav">Farm & Fresh Food</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-briefcase float-left"></i>Jobs<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Online</li></a>
                                <a href="#"><li class="drop-nav">Marketing</li></a>
                                <a href="#"><li class="drop-nav">Advertising & PR</li></a>
                                <a href="#"><li class="drop-nav">Education</li></a>
                                <a href="#"><li class="drop-nav">Customer Service</li></a>
                                <a href="#"><li class="drop-nav">Sales</li></a>
                                <a href="#"><li class="drop-nav">IT & Networking</li></a>
                                <a href="#"><li class="drop-nav">Hotels & Tourism</li></a>
                                <a href="#"><li class="drop-nav">Clerical & Administration</li></a>
                                <a href="#"><li class="drop-nav">Human Resources</li></a>
                                <a href="#"><li class="drop-nav">Accounting & Finance</li></a>
                                <a href="#"><li class="drop-nav">Manufacturing</li></a>
                                <a href="#"><li class="drop-nav">Medical</li></a>
                                <a href="#"><li class="drop-nav">Domestic Staff</li></a>
                                <a href="#"><li class="drop-nav">Part - Time</li></a>
                                <a href="#"><li class="drop-nav">Other Jobs</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-paw float-left"></i>Animals<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Fish & Aquariums</li></a>
                                <a href="#"><li class="drop-nav">Birds</li></a>
                                <a href="#"><li class="drop-nav">Hens & Aseel</li></a>
                                <a href="#"><li class="drop-nav">Cats</li></a>
                                <a href="#"><li class="drop-nav">Dogs</li></a>
                                <a href="#"><li class="drop-nav">Livestock</li></a>
                                <a href="#"><li class="drop-nav">Horses</li></a>
                                <a href="#"><li class="drop-nav">Pet Food & Accessories</li></a>
                                <a href="#"><li class="drop-nav">Other Animals</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-couch float-left"></i>Furniture & Home Decor<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Sofa & Chairs</li></a>
                                <a href="#"><li class="drop-nav">Beds & Wardrobes</li></a>
                                <a href="#"><li class="drop-nav">Home Decoration</li></a>
                                <a href="#"><li class="drop-nav">Tables & Dining</li></a>
                                <a href="#"><li class="drop-nav">Garden & Outdoor</li></a>
                                <a href="#"><li class="drop-nav">Painting & Mirrors</li></a>
                                <a href="#"><li class="drop-nav">Rugs & Carpets</li></a>
                                <a href="#"><li class="drop-nav">Curtains & Blinds</li></a>
                                <a href="#"><li class="drop-nav">Office Furniture</li></a>
                                <a href="#"><li class="drop-nav">Other Household Items</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-magic float-left"></i>Fashion & Beauty<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Accessories</li></a>
                                <a href="#"><li class="drop-nav">Clothes</li></a>
                                <a href="#"><li class="drop-nav">Footwear</li></a>
                                <a href="#"><li class="drop-nav">Jewellery</li></a>
                                <a href="#"><li class="drop-nav">Make Up</li></a>
                                <a href="#"><li class="drop-nav">Skin & Hair</li></a>
                                <a href="#"><li class="drop-nav">Watches</li></a>
                                <a href="#"><li class="drop-nav">Wedding</li></a>
                                <a href="#"><li class="drop-nav">Lawn & Pret</li></a>
                                <a href="#"><li class="drop-nav">Couture</li></a>
                                <a href="#"><li class="drop-nav">Other Fashion</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-book float-left"></i>Books, Sports & Hobbies<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Books & Magazines</li></a>
                                <a href="#"><li class="drop-nav">Musical Instruments</li></a>
                                <a href="#"><li class="drop-nav">Sports Equipment</li></a>
                                <a href="#"><li class="drop-nav">Gym & Fitness</li></a>
                                <a href="#"><li class="drop-nav">Other Hobbies</li></a>
                            </ul>
                        </li>
                        <li class="drop-nav level1"><i class="fas fa-child float-left"></i>Kids<i class="fas fa-chevron-right float-right"></i>
                            <ul class="level2">
                                <a href="#"><li class="drop-nav">Kids Furniture</li></a>
                                <a href="#"><li class="drop-nav">Toys</li></a>
                                <a href="#"><li class="drop-nav">Prams & Walkers</li></a>
                                <a href="#"><li class="drop-nav">Swings & Slides</li></a>
                                <a href="#"><li class="drop-nav">Kids Bikes</li></a>
                                <a href="#"><li class="drop-nav">Kids Accessories</li></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(".drop-nav").on("click", function(e) {
            // don't allow the event to fire horizontally or vertically up the tree
            e.stopImmediatePropagation()
            // switch the active class that you can use to display the child
            $(this).toggleClass('active')
            $(this).toggleClass('hov')
        })
    </script>
@endsection

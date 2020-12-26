@extends('layouts.app')

@section('content')
    <div class="container bg-white mt-5 p-5 rounded" id="user-dashboard">
        <div class="row">
            <div class="col-md-12" id="dashboard-post">
                <h3 class="text-uppercase text-center">Post your ad</h3>
                <div class="breadcum-box border-bottom">
                    <h5>Selected Category</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user-profile')}}">Profile</a></li>
                            <li class="breadcrumb-item"><a href="{{route('ad-post-view')}}">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                        </ol>
                    </nav>
                </div>

                <div class="main-post mt-5">
                    <h4 class="font-weight-bold">INCLUDE SOME DETAILS</h4>
                    <form action="" name="myForm">
                        <label for="radio1" class="mt-1">Condition *</label>
                        <div class="condition" id="radio1">
                            <label style="margin-left: 0" class="radio-container">New
                                <input type="radio" name="radio1" value="New">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Used
                                <input type="radio" name="radio1" value="Used">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <label for="radio2" class="mt-5">Type *</label>
                        <div class="condition" id="radio2">
                            <label style="margin-left: 0" class="radio-container">Mobile
                                <input type="radio" name="radio2" value="Mobile">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Tablets
                                <input type="radio" name="radio2" value="Tablets">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6 ad-box">
                                <label for="ad-title-input">Ad Title *</label>
                                <input name="title" type="text" class="form-control input-field" id="ad-title-input" required>
                                <label for="ad-title-input">Mention the key features of your item (e.g. brand, model, age, type)</label>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6 ad-box">
                                <label for="ad-description-input">Description *</label>
                                <textarea name="description" rows="4" class="form-control input-field" id="ad-description-input" required></textarea>
                                <label for="ad-description-input">Include condition, features and reason for selling</label>
                            </div>
                        </div>

                        <div class="condition my-5" id="radio1">
                            <label style="margin-left: 0" class="radio-container">Urgent
                                <input type="checkbox" name="check1" value="urgent">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Doorstep Delivery
                                <input type="checkbox" name="check1" value="doorstepdelivery">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <hr class="mt-4">

                        <div class="row mt-4">
                            <div class="col-6 ad-box">
                                <h4 class="font-weight-bold">SET A PRICE</h4>
                                <label for="ad-price-input">Price *</label>
                                <div class="input-group" id="ad-price-input">
                                    <div class="input-group-prepend price-tag">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input name="price" type="number" class="form-control input-field" aria-label="Amount (to the nearest dollar)" required>
                                </div>
                                <label for="ad-price-input">Mention the key features of your item (e.g. brand, model, age, type)</label>
                            </div>
                        </div>

                        <hr class="mt-4">

                        <div class="row mt-4">
                            <div class="col-6 ad-box">
                                <label for="image-box"><h4 class="font-weight-bold">UPLOAD UP TO 4 PHOTOS</h4></label>
                                <div class="image-box" id="image-box">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                    <div style="margin-left: 0" id="imagePreview" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile" type="file" name="image" class="img" />

                                    <div id="imagePreview2" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile2" type="file" name="image2" class="img" />

                                    <div id="imagePreview3" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile3" type="file" name="image3" class="img" />

                                    <div id="imagePreview4" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile4" type="file" name="image4" class="img" />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-4">

                        <div class="row mt-4">
                            <div class="col-6 ad-box confirm-location">
                                <h4 class="font-weight-bold">CONFIRM YOUR LOCATION</h4>
                                <div class="country-confirm">
                                    <label for="country">Country *</label>
                                    <select name="country" class="form-control" id="country" onchange="sortByCountry(this)">
                                        <option value="UAE">UAE</option>
                                        <option value="Pakistan">Pakistan</option>
                                    </select>
                                </div>
                                <div class="uae-state" id="uae-state">
                                    <div class="state-confirm mt-3">
                                        <label for="state">State *</label>
                                        <select name="state" class="form-control" id="state">
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Ajman">Ajman</option>
                                            <option value="Al Ain">Al Ain</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Fujairah">Fujairah</option>
                                            <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                            <option value="Sharjah">Sharjah</option>
                                            <option value="Umm Al Quwain">Umm Al Quwain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pakistan-state" id="pakistan-state" style="display: none">
                                    <div class="state-confirm mt-3">
                                        <label for="state">State *</label>
                                        <select name="state" class="form-control" id="state" onchange="sortByState(this)">
                                            <option value="Azad Kashmir">Azad Kashmir</option>
                                            <option value="Balochistan">Balochistan</option>
                                            <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
                                            <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                            <option value="Northern Areas">Northern Areas</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Sindh">Sindh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="city-confirm mt-3">
                                    <div id="balochistan" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Bela">Bela</option>
                                            <option value="Gwadar">Gwadar</option>
                                            <option value="Jiwani">Jiwani</option>
                                            <option value="Kalat">Kalat</option>
                                            <option value="Khuzdar">Khuzdar</option>
                                            <option value="Lasbela">Lasbela</option>
                                            <option value="Loralai">Loralai</option>
                                            <option value="Ormara">Ormara</option>
                                            <option value="Pasni">Pasni</option>
                                            <option value="Quetta">Quetta</option>
                                            <option value="Zhob">Zhob</option>
                                        </select>
                                    </div>
                                    <div id="islamabad" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Islamabad">Islamabad</option>
                                        </select>
                                    </div>
                                    <div id="khyber" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Abbottabad">Abbottabad</option>
                                            <option value="Ali Masjid">Ali Masjid</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Batagram">Batagram</option>
                                            <option value="Buner">Buner</option>
                                            <option value="Charsadda">Charsadda</option>
                                            <option value="Chitral">Chitral</option>
                                            <option value="Darra Adam Khel">Darra Adam Khel</option>
                                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                            <option value="Hangu">Hangu</option>
                                            <option value="Haripur">Haripur</option>
                                            <option value="Jamrud">Jamrud</option>
                                            <option value="Jandola">Jandola</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Kohat">Kohat</option>
                                            <option value="Kohistan">Kohistan</option>
                                            <option value="Lakki Marwat">Lakki Marwat</option>
                                            <option value="Landi Kotal">Landi Kotal</option>
                                            <option value="Lower Dir">Lower Dir</option>
                                            <option value="Malakand">Malakand</option>
                                            <option value="Mansehra">Mansehra</option>
                                            <option value="Mardan">Mardan</option>
                                            <option value="Mingaora">Mingaora</option>
                                            <option value="Miram Shah">Miram Shah</option>
                                            <option value="Nowshera">Nowshera</option>
                                            <option value="Parachinar">Parachinar</option>
                                            <option value="Peshawar">Peshawar</option>
                                            <option value="Shangla">Shangla</option>
                                            <option value="Swabi">Swabi</option>
                                            <option value="Swat">Swat</option>
                                            <option value="Tank">Tank</option>
                                            <option value="Torkham">Torkham</option>
                                            <option value="Upper Dir">Upper Dir</option>
                                            <option value="Wana">Wana</option>
                                        </select>
                                    </div>
                                    <div id="northern" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Askoley">Askoley</option>
                                            <option value="Chilas">Chilas</option>
                                            <option value="Ghanche">Ghanche</option>
                                            <option value="Ghizer">Ghizer</option>
                                            <option value="Gilgit">Gilgit</option>
                                            <option value="Khaplu">Khaplu</option>
                                            <option value="Skardu">Skardu</option>
                                        </select>
                                    </div>
                                    <div id="punjab" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Ahmadpur East">Ahmadpur East</option>
                                            <option value="Arifwala">Arifwala</option>
                                            <option value="Attock">Attock</option>
                                            <option value="Bahawalnagar">Bahawalnagar</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                            <option value="Bhakkar">Bhakkar</option>
                                            <option value="Burewala">Burewala</option>
                                            <option value="Chakwal">Chakwal</option>
                                            <option value="Chichawatni">Chichawatni</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Chishtian Mandi">Chishtian Mandi</option>
                                            <option value="Daska">Daska</option>
                                            <option value="Depalpur">Depalpur</option>
                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Gojra">Gojra</option>
                                            <option value="Gujar Khan">Gujar Khan</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Haroonabad">Haroonabad</option>
                                            <option value="Hasan Abdal">Hasan Abdal</option>
                                            <option value="Hasilpur">Hasilpur</option>
                                            <option value="Haveli lakha">Haveli lakha</option>
                                            <option value="Hazro">Hazro</option>
                                            <option value="Jaranwala">Jaranwala</option>
                                            <option value="Jhang Sadar">Jhang Sadar</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Kamoke">Kamoke</option>
                                            <option value="Kasur">Kasur</option>
                                            <option value="Khanewal">Khanewal</option>
                                            <option value="Khanpur">Khanpur</option>
                                            <option value="Khushab">Khushab</option>
                                            <option value="Kot Addu">Kot Addu</option>
                                            <option value="Kotli">Kotli</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Layyah">Layyah</option>
                                            <option value="Lodhran">Lodhran</option>
                                            <option value="Mailsi">Mailsi</option>
                                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                            <option value="Mian Chunnu">Mian Chunnu</option>
                                            <option value="Mianwali">Mianwali</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Muridike">Muridike</option>
                                            <option value="Murree">Murree</option>
                                            <option value="Muzaffargarh">Muzaffargarh</option>
                                            <option value="Nankana Sahib">Nankana Sahib</option>
                                            <option value="Narowal">Narowal</option>
                                            <option value="Okara">Okara</option>
                                            <option value="Pakpattan">Pakpattan</option>
                                            <option value="Pindi Bhattian">Pindi Bhattian</option>
                                            <option value="Pirmahal">Pirmahal</option>
                                            <option value="Rahimyar Khan">Rahimyar Khan</option>
                                            <option value="Raiwind">Raiwind</option>
                                            <option value="Rajanpur">Rajanpur</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Sadiqabad">Sadiqabad</option>
                                            <option value="Safdar Abad">Safdar Abad</option>
                                            <option value="Sahiwal">Sahiwal</option>
                                            <option value="Samundri">Samundri</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Shakargarh">Shakargarh</option>
                                            <option value="Sheikhüpura">Sheikhüpura</option>
                                            <option value="Sialkot">Sialkot</option>
                                            <option value="Sohawa">Sohawa</option>
                                            <option value="Talagang">Talagang</option>
                                            <option value="Taxila">Taxila</option>
                                            <option value="Toba Tek singh">Toba Tek singh</option>
                                            <option value="Vehari">Vehari</option>
                                            <option value="Wah">Wah</option>
                                            <option value="Wazirabad">Wazirabad</option>
                                        </select>
                                    </div>
                                    <div id="azadkashmir" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Bagh">Bagh</option>
                                            <option value="Bhimber">Bhimber</option>
                                            <option value="Hajira">Hajira</option>
                                            <option value="Kotli">Kotli</option>
                                            <option value="Mirpur">Mirpur</option>
                                            <option value="Muzaffarabad">Muzaffarabad</option>
                                            <option value="Pallandri">Pallandri</option>
                                            <option value="Rawalakot">Rawalakot</option>
                                        </select>
                                    </div>
                                    <div id="sindh" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option value="Badin">Badin</option>
                                            <option value="Dadu">Dadu</option>
                                            <option value="Ghotki">Ghotki</option>
                                            <option value="Hala">Hala</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Jacobabad">Jacobabad</option>
                                            <option value="Jamshoro">Jamshoro</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Khairpur">Khairpur</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Mirpur Khas">Mirpur Khas</option>
                                            <option value="Mithi">Mithi</option>
                                            <option value="Nawabshah">Nawabshah</option>
                                            <option value="Ratodero">Ratodero</option>
                                            <option value="Sanghar">Sanghar</option>
                                            <option value="Shikarpur">Shikarpur</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Tando Adam">Tando Adam</option>
                                            <option value="Thatta">Thatta</option>
                                            <option value="Umerkot">Umerkot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-4">

                        <div class="row mt-4">
                            <div class="col-6 ad-box">
                                <h4 class="font-weight-bold">REVIEW YOUR DETAILS</h4>
                                <div class="name-img img-box mt-3">
                                    @if(isset($value['ProfileImageURI']))
                                        <img class="rounded-circle d-inline-block" src="{{$value['ProfileImageURI']}}" alt="" width="140px" height="140px">
                                    @else
                                        <img class="rounded-circle d-inline-block" src="{{asset('images/default-profile.png')}}" alt="" width="140px" height="140px">
                                    @endif
                                        <div class="name-confirm-input d-inline-block ml-3">
                                        <label for="ad-name-input">Name *</label>
                                        <input name="user-name" type="text" class="form-control input-field" id="ad-name-input">

                                        <label for="ad-number-input" class="mt-2">Number *</label>
                                        <input name="user-number" type="number" class="form-control input-field" id="ad-number-input">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5">

                        <div class="row mt-5">
                            <div class="col">
                                <button class="btn btn-lg btn-success" type="submit">Post Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#uploadFile").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });
        });

        $('#imagePreview').click(function(){
            $('#uploadFile').click();
        });

        // Image 2

        $(function() {
            $("#uploadFile2").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreview2").css("background-image", "url("+this.result+")");
                    }
                }
            });
        });

        $('#imagePreview2').click(function(){
            $('#uploadFile2').click();
        });

        // Image 3

        $(function() {
            $("#uploadFile3").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreview3").css("background-image", "url("+this.result+")");
                    }
                }
            });
        });

        $('#imagePreview3').click(function(){
            $('#uploadFile3').click();
        });

        // Image 4

        $(function() {
            $("#uploadFile4").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreview4").css("background-image", "url("+this.result+")");
                    }
                }
            });
        });

        $('#imagePreview4').click(function(){
            $('#uploadFile4').click();
        });
    </script>

    <script>
        function sortByCountry(el) {
        var selectedCountry = $(el).val();
        console.log(selectedCountry);
            if(selectedCountry == "UAE")
            {
                document.getElementById("uae-state").style.display = "block";
                document.getElementById("pakistan-state").style.display = "none";
            }
            else if(selectedCountry == "Pakistan")
            {
                document.getElementById("uae-state").style.display = "none";
                document.getElementById("pakistan-state").style.display = "block";
            }
        };

        function sortByState(el) {
            var selectedState = $(el).val();
            console.log(selectedState);
            if(selectedState == "Balochistan")
            {
                document.getElementById("balochistan").style.display = "block";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Azad Kashmir")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "block";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Islamabad Capital Territory")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "block";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Khyber Pakhtunkhwa")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "block";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Northern Areas")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "block";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Punjab")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "block";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "none";
            }
            else if(selectedState == "Sindh")
            {
                document.getElementById("balochistan").style.display = "none";
                document.getElementById("islamabad").style.display = "none";
                document.getElementById("khyber").style.display = "none";
                document.getElementById("northern").style.display = "none";
                document.getElementById("punjab").style.display = "none";
                document.getElementById("azadkashmir").style.display = "none";
                document.getElementById("sindh").style.display = "block";
            }
        };
    </script>
@endsection

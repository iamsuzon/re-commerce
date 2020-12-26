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
                            <li class="breadcrumb-item active" aria-current="page">Tablets</li>
                        </ol>
                    </nav>
                </div>

                <div class="main-post mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4 class="font-weight-bold">INCLUDE SOME DETAILS</h4>
                    <form action="{{route('ad-tablets-post')}}" method="POST" name="myForm">
                        @csrf
                        <input type="hidden" value="{{$user['MYID']}}" name="userId">
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
                            <label style="margin-left: 0" class="radio-container">Apple
                                <input type="radio" name="radio2" value="Apple">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Q Tabs
                                <input type="radio" name="radio2" value="Q Tabs">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Samsung
                                <input type="radio" name="radio2" value="Samsung">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Other Tablets
                                <input type="radio" name="radio2" value="Other Tablets">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6 ad-box">
                                <label for="ad-title-input">Ad Title *</label>
                                <input type="text" class="form-control input-field" id="ad-title-input" name="title" value="{{old('title')}}" required>
                                <label for="ad-title-input">Mention the key features of your item (e.g. brand, model, age, type)</label>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6 ad-box">
                                <label for="ad-description-input">Description *</label>
                                <textarea rows="4" class="form-control input-field" id="ad-description-input" name="description" required>{{old('description')}}</textarea>
                                <label for="ad-description-input">Include condition, features and reason for selling</label>
                            </div>
                        </div>

                        <div class="condition my-5" id="radio1">
                            <label style="margin-left: 0" class="radio-container">Urgent
                                <input type="checkbox" name="check1" value="urgent">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Doorstep Delivery
                                <input type="checkbox" name="check2" value="doorstepdelivery">
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
                                    <input type="number" class="form-control input-field" aria-label="Amount (to the nearest dollar)" name="price" value="{{old('price')}}" required>
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
                                    <input type="hidden" value="" name="image_uri" id="image_uri">

                                    <div style="display: none" id="imagePreview2" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile2" type="file" name="image2" class="img" />
                                    <input type="hidden" value="" name="image_uri2" id="image_uri2">

                                    <div style="display: none" id="imagePreview3" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile3" type="file" name="image3" class="img" />
                                    <input type="hidden" value="" name="image_uri3" id="image_uri3">

                                    <div style="display: none" id="imagePreview4" src="" alt="placeholder image goes here"></div>
                                    <input id="uploadFile4" type="file" name="image4" class="img" />
                                    <input type="hidden" value="" name="image_uri4" id="image_uri4">
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
                                        <select name="state1" class="form-control" id="state" onchange="sortByState(this)">
                                            <option disabled selected></option>
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
                                        <select name="state2" class="form-control" id="state" onchange="sortByState(this)">
                                            <option disabled selected></option>
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
                                <div class="city-confirm mt-3" id="all-cities">
                                    <div id="balochistan" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option disabled selected></option>
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
                                            <option disabled selected></option>
                                            <option value="Islamabad">Islamabad</option>
                                        </select>
                                    </div>
                                    <div id="khyber" style="display: none">
                                        <label for="city">City *</label>
                                        <select name="city" class="form-control" id="city">
                                            <option disabled selected></option>
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
                                            <option disabled selected></option>
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
                                            <option disabled selected></option>
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
                                            <option disabled selected></option>
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
                                            <option disabled selected></option>
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
                            <div class="col-md-12 ad-box">
                                <h4 class="font-weight-bold">REVIEW YOUR DETAILS</h4>
                                <div class="name-img img-box mt-3">
                                    @if(isset($user['ProfileImageURI']))
                                        <img class="rounded-circle d-inline-block" src="{{$user['ProfileImageURI']}}" alt="" width="140px" height="140px">
                                    @else
                                        <img class="rounded-circle d-inline-block" src="{{asset('images/default-profile.png')}}" alt="" width="140px" height="140px">
                                    @endif
                                    <div class="name-confirm-input d-inline-block ml-3">
                                        <div class="row input-group">
                                            <div class="col-md-12">
                                                <label for="Name">Name</label>
                                                <input class="form-control" type="text" name="name" id="Name" value="{{$user['Name']}}" disabled>
                                            </div>
                                        </div>
                                        <div class="row input-group mt-3">
                                            <div class="col-md-12">
                                                <div class="row" id="number">
                                                    <div class="col-md-4">
                                                        <label for="country_code">Country Code</label>
                                                        <select id='country_code' name='country_code' class='form-control' required>
                                                            <option selected disabled></option>
                                                            <option value='+376' >AD - Andorra (+376)</option>
                                                            <option value='+971' >AE - United Arab Emirates (+971)</option>
                                                            <option value='+93' >AF - Afghanistan (+93)</option>
                                                            <option value='+1268' >AG - Antigua And Barbuda (+1268)</option>
                                                            <option value='+1264' >AI - Anguilla (+1264)</option>
                                                            <option value='+355' >AL - Albania (+355)</option>
                                                            <option value='+374' >AM - Armenia (+374)</option>
                                                            <option value='+599' >AN - Netherlands Antilles (+599)</option>
                                                            <option value='+244' >AO - Angola (+244)</option>
                                                            <option value='+672' >AQ - Antarctica (+672)</option>
                                                            <option value='+54' >AR - Argentina (+54)</option>
                                                            <option value='+1684' >AS - American Samoa (+1684)</option>
                                                            <option value='+43' >AT - Austria (+43)</option>
                                                            <option value='+61' >AU - Australia (+61)</option>
                                                            <option value='+297' >AW - Aruba (+297)</option>
                                                            <option value='+994' >AZ - Azerbaijan (+994)</option>
                                                            <option value='+387' >BA - Bosnia And Herzegovina (+387)</option>
                                                            <option value='+1246' >BB - Barbados (+1246)</option>
                                                            <option value='+880' >BD - Bangladesh (+880)</option>
                                                            <option value='+32' >BE - Belgium (+32)</option>
                                                            <option value='+226' >BF - Burkina Faso (+226)</option>
                                                            <option value='+359' >BG - Bulgaria (+359)</option>
                                                            <option value='+973' >BH - Bahrain (+973)</option>
                                                            <option value='+257' >BI - Burundi (+257)</option>
                                                            <option value='+229' >BJ - Benin (+229)</option>
                                                            <option value='+590' >BL - Saint Barthelemy (+590)</option>
                                                            <option value='+1441' >BM - Bermuda (+1441)</option>
                                                            <option value='+673' >BN - Brunei Darussalam (+673)</option>
                                                            <option value='+591' >BO - Bolivia (+591)</option>
                                                            <option value='+55' >BR - Brazil (+55)</option>
                                                            <option value='+1242' >BS - Bahamas (+1242)</option>
                                                            <option value='+975' >BT - Bhutan (+975)</option>
                                                            <option value='+267' >BW - Botswana (+267)</option>
                                                            <option value='+375' >BY - Belarus (+375)</option>
                                                            <option value='+501' >BZ - Belize (+501)</option>
                                                            <option value='+1' >CA - Canada (+1)</option>
                                                            <option value='+61' >CC - Cocos (keeling) Islands (+61)</option>
                                                            <option value='+243' >CD - Congo, The Democratic Republic Of The (+243)</option>
                                                            <option value='+236' >CF - Central African Republic (+236)</option>
                                                            <option value='+242' >CG - Congo (+242)</option>
                                                            <option value='+41' >CH - Switzerland (+41)</option>
                                                            <option value='+225' >CI - Cote D Ivoire (+225)</option>
                                                            <option value='+682' >CK - Cook Islands (+682)</option>
                                                            <option value='+56' >CL - Chile (+56)</option>
                                                            <option value='+237' >CM - Cameroon (+237)</option>
                                                            <option value='+86' >CN - China (+86)</option>
                                                            <option value='+57' >CO - Colombia (+57)</option>
                                                            <option value='+506' >CR - Costa Rica (+506)</option>
                                                            <option value='+53' >CU - Cuba (+53)</option>
                                                            <option value='+238' >CV - Cape Verde (+238)</option>
                                                            <option value='+61' >CX - Christmas Island (+61)</option>
                                                            <option value='+357' >CY - Cyprus (+357)</option>
                                                            <option value='+420' >CZ - Czech Republic (+420)</option>
                                                            <option value='+49' >DE - Germany (+49)</option>
                                                            <option value='+253' >DJ - Djibouti (+253)</option>
                                                            <option value='+45' >DK - Denmark (+45)</option>
                                                            <option value='+1767' >DM - Dominica (+1767)</option>
                                                            <option value='+1809' >DO - Dominican Republic (+1809)</option>
                                                            <option value='+213' >DZ - Algeria (+213)</option>
                                                            <option value='+593' >EC - Ecuador (+593)</option>
                                                            <option value='+372' >EE - Estonia (+372)</option>
                                                            <option value='+20' >EG - Egypt (+20)</option>
                                                            <option value='+291' >ER - Eritrea (+291)</option>
                                                            <option value='+34' >ES - Spain (+34)</option>
                                                            <option value='+251' >ET - Ethiopia (+251)</option>
                                                            <option value='+358' >FI - Finland (+358)</option>
                                                            <option value='+679' >FJ - Fiji (+679)</option>
                                                            <option value='+500' >FK - Falkland Islands (malvinas) (+500)</option>
                                                            <option value='+691' >FM - Micronesia, Federated States Of (+691)</option>
                                                            <option value='+298' >FO - Faroe Islands (+298)</option>
                                                            <option value='+33' >FR - France (+33)</option>
                                                            <option value='+241' >GA - Gabon (+241)</option>
                                                            <option value='+44' >GB - United Kingdom (+44)</option>
                                                            <option value='+1473' >GD - Grenada (+1473)</option>
                                                            <option value='+995' >GE - Georgia (+995)</option>
                                                            <option value='+233' >GH - Ghana (+233)</option>
                                                            <option value='+350' >GI - Gibraltar (+350)</option>
                                                            <option value='+299' >GL - Greenland (+299)</option>
                                                            <option value='+220' >GM - Gambia (+220)</option>
                                                            <option value='+224' >GN - Guinea (+224)</option>
                                                            <option value='+240' >GQ - Equatorial Guinea (+240)</option>
                                                            <option value='+30' >GR - Greece (+30)</option>
                                                            <option value='+502' >GT - Guatemala (+502)</option>
                                                            <option value='+1671' >GU - Guam (+1671)</option>
                                                            <option value='+245' >GW - Guinea-bissau (+245)</option>
                                                            <option value='+592' >GY - Guyana (+592)</option>
                                                            <option value='+852' >HK - Hong Kong (+852)</option>
                                                            <option value='+504' >HN - Honduras (+504)</option>
                                                            <option value='+385' >HR - Croatia (+385)</option>
                                                            <option value='+509' >HT - Haiti (+509)</option>
                                                            <option value='+36' >HU - Hungary (+36)</option>
                                                            <option value='+62' >ID - Indonesia (+62)</option>
                                                            <option value='+353' >IE - Ireland (+353)</option>
                                                            <option value='+972' >IL - Israel (+972)</option>
                                                            <option value='+44' >IM - Isle Of Man (+44)</option>
                                                            <option value='+91' >IN - India (+91)</option>
                                                            <option value='+964' >IQ - Iraq (+964)</option>
                                                            <option value='+98' >IR - Iran, Islamic Republic Of (+98)</option>
                                                            <option value='+354' >IS - Iceland (+354)</option>
                                                            <option value='+39' >IT - Italy (+39)</option>
                                                            <option value='+1876' >JM - Jamaica (+1876)</option>
                                                            <option value='+962' >JO - Jordan (+962)</option>
                                                            <option value='+81' >JP - Japan (+81)</option>
                                                            <option value='+254' >KE - Kenya (+254)</option>
                                                            <option value='+996' >KG - Kyrgyzstan (+996)</option>
                                                            <option value='+855' >KH - Cambodia (+855)</option>
                                                            <option value='+686' >KI - Kiribati (+686)</option>
                                                            <option value='+269' >KM - Comoros (+269)</option>
                                                            <option value='+1869' >KN - Saint Kitts And Nevis (+1869)</option>
                                                            <option value='+850' >KP - Korea Democratic Peoples Republic Of (+850)</option>
                                                            <option value='+82' >KR - Korea Republic Of (+82)</option>
                                                            <option value='+965' >KW - Kuwait (+965)</option>
                                                            <option value='+1345' >KY - Cayman Islands (+1345)</option>
                                                            <option value='+7' >KZ - Kazakstan (+7)</option>
                                                            <option value='+856' >LA - Lao Peoples Democratic Republic (+856)</option>
                                                            <option value='+961' >LB - Lebanon (+961)</option>
                                                            <option value='+1758' >LC - Saint Lucia (+1758)</option>
                                                            <option value='+423' >LI - Liechtenstein (+423)</option>
                                                            <option value='+94' >LK - Sri Lanka (+94)</option>
                                                            <option value='+231' >LR - Liberia (+231)</option>
                                                            <option value='+266' >LS - Lesotho (+266)</option>
                                                            <option value='+370' >LT - Lithuania (+370)</option>
                                                            <option value='+352' >LU - Luxembourg (+352)</option>
                                                            <option value='+371' >LV - Latvia (+371)</option>
                                                            <option value='+218' >LY - Libyan Arab Jamahiriya (+218)</option>
                                                            <option value='+212' >MA - Morocco (+212)</option>
                                                            <option value='+377' >MC - Monaco (+377)</option>
                                                            <option value='+373' >MD - Moldova, Republic Of (+373)</option>
                                                            <option value='+382' >ME - Montenegro (+382)</option>
                                                            <option value='+1599' >MF - Saint Martin (+1599)</option>
                                                            <option value='+261' >MG - Madagascar (+261)</option>
                                                            <option value='+692' >MH - Marshall Islands (+692)</option>
                                                            <option value='+389' >MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
                                                            <option value='+223' >ML - Mali (+223)</option>
                                                            <option value='+95' >MM - Myanmar (+95)</option>
                                                            <option value='+976' >MN - Mongolia (+976)</option>
                                                            <option value='+853' >MO - Macau (+853)</option>
                                                            <option value='+1670' >MP - Northern Mariana Islands (+1670)</option>
                                                            <option value='+222' >MR - Mauritania (+222)</option>
                                                            <option value='+1664' >MS - Montserrat (+1664)</option>
                                                            <option value='+356' >MT - Malta (+356)</option>
                                                            <option value='+230' >MU - Mauritius (+230)</option>
                                                            <option value='+960' >MV - Maldives (+960)</option>
                                                            <option value='+265' >MW - Malawi (+265)</option>
                                                            <option value='+52' >MX - Mexico (+52)</option>
                                                            <option value='+60' >MY - Malaysia (+60)</option>
                                                            <option value='+258' >MZ - Mozambique (+258)</option>
                                                            <option value='+264' >NA - Namibia (+264)</option>
                                                            <option value='+687' >NC - New Caledonia (+687)</option>
                                                            <option value='+227' >NE - Niger (+227)</option>
                                                            <option value='+234' >NG - Nigeria (+234)</option>
                                                            <option value='+505' >NI - Nicaragua (+505)</option>
                                                            <option value='+31' >NL - Netherlands (+31)</option>
                                                            <option value='+47' >NO - Norway (+47)</option>
                                                            <option value='+977' >NP - Nepal (+977)</option>
                                                            <option value='+674' >NR - Nauru (+674)</option>
                                                            <option value='+683' >NU - Niue (+683)</option>
                                                            <option value='+64' >NZ - New Zealand (+64)</option>
                                                            <option value='+968' >OM - Oman (+968)</option>
                                                            <option value='+507' >PA - Panama (+507)</option>
                                                            <option value='+51' >PE - Peru (+51)</option>
                                                            <option value='+689' >PF - French Polynesia (+689)</option>
                                                            <option value='+675' >PG - Papua New Guinea (+675)</option>
                                                            <option value='+63' >PH - Philippines (+63)</option>
                                                            <option value='+92' >PK - Pakistan (+92)</option>
                                                            <option value='+48' >PL - Poland (+48)</option>
                                                            <option value='+508' >PM - Saint Pierre And Miquelon (+508)</option>
                                                            <option value='+870' >PN - Pitcairn (+870)</option>
                                                            <option value='+1' >PR - Puerto Rico (+1)</option>
                                                            <option value='+351' >PT - Portugal (+351)</option>
                                                            <option value='+680' >PW - Palau (+680)</option>
                                                            <option value='+595' >PY - Paraguay (+595)</option>
                                                            <option value='+974' >QA - Qatar (+974)</option>
                                                            <option value='+40' >RO - Romania (+40)</option>
                                                            <option value='+381' >RS - Serbia (+381)</option>
                                                            <option value='+7' >RU - Russian Federation (+7)</option>
                                                            <option value='+250' >RW - Rwanda (+250)</option>
                                                            <option value='+966' >SA - Saudi Arabia (+966)</option>
                                                            <option value='+677' >SB - Solomon Islands (+677)</option>
                                                            <option value='+248' >SC - Seychelles (+248)</option>
                                                            <option value='+249' >SD - Sudan (+249)</option>
                                                            <option value='+46' >SE - Sweden (+46)</option>
                                                            <option value='+65' >SG - Singapore (+65)</option>
                                                            <option value='+290' >SH - Saint Helena (+290)</option>
                                                            <option value='+386' >SI - Slovenia (+386)</option>
                                                            <option value='+421' >SK - Slovakia (+421)</option>
                                                            <option value='+232' >SL - Sierra Leone (+232)</option>
                                                            <option value='+378' >SM - San Marino (+378)</option>
                                                            <option value='+221' >SN - Senegal (+221)</option>
                                                            <option value='+252' >SO - Somalia (+252)</option>
                                                            <option value='+597' >SR - Suriname (+597)</option>
                                                            <option value='+239' >ST - Sao Tome And Principe (+239)</option>
                                                            <option value='+503' >SV - El Salvador (+503)</option>
                                                            <option value='+963' >SY - Syrian Arab Republic (+963)</option>
                                                            <option value='+268' >SZ - Swaziland (+268)</option>
                                                            <option value='+1649' >TC - Turks And Caicos Islands (+1649)</option>
                                                            <option value='+235' >TD - Chad (+235)</option>
                                                            <option value='+228' >TG - Togo (+228)</option>
                                                            <option value='+66' >TH - Thailand (+66)</option>
                                                            <option value='+992' >TJ - Tajikistan (+992)</option>
                                                            <option value='+690' >TK - Tokelau (+690)</option>
                                                            <option value='+670' >TL - Timor-leste (+670)</option>
                                                            <option value='+993' >TM - Turkmenistan (+993)</option>
                                                            <option value='+216' >TN - Tunisia (+216)</option>
                                                            <option value='+676' >TO - Tonga (+676)</option>
                                                            <option value='+90' >TR - Turkey (+90)</option>
                                                            <option value='+1868' >TT - Trinidad And Tobago (+1868)</option>
                                                            <option value='+688' >TV - Tuvalu (+688)</option>
                                                            <option value='+886' >TW - Taiwan, Province Of China (+886)</option>
                                                            <option value='+255' >TZ - Tanzania, United Republic Of (+255)</option>
                                                            <option value='+380' >UA - Ukraine (+380)</option>
                                                            <option value='+256' >UG - Uganda (+256)</option>
                                                            <option value='+1' >US - United States (+1)</option>
                                                            <option value='+598' >UY - Uruguay (+598)</option>
                                                            <option value='+998' >UZ - Uzbekistan (+998)</option>
                                                            <option value='+39' >VA - Holy See (vatican City State) (+39)</option>
                                                            <option value='+1784' >VC - Saint Vincent And The Grenadines (+1784)</option>
                                                            <option value='+58' >VE - Venezuela (+58)</option>
                                                            <option value='+1284' >VG - Virgin Islands, British (+1284)</option>
                                                            <option value='+1340' >VI - Virgin Islands, U.s. (+1340)</option>
                                                            <option value='+84' >VN - Viet Nam (+84)</option>
                                                            <option value='+678' >VU - Vanuatu (+678)</option>
                                                            <option value='+681' >WF - Wallis And Futuna (+681)</option>
                                                            <option value='+685' >WS - Samoa (+685)</option>
                                                            <option value='+381' >XK - Kosovo (+381)</option>
                                                            <option value='+967' >YE - Yemen (+967)</option>
                                                            <option value='+262' >YT - Mayotte (+262)</option>
                                                            <option value='+27' >ZA - South Africa (+27)</option>
                                                            <option value='+260' >ZM - Zambia (+260)</option>
                                                            <option value='+263' >ZW - Zimbabwe (+263)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="number">Phone Number</label>
                                                        <input class="form-control" type="number" name="number" id="number" placeholder="Example 2546987">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5">

                        <div class="row mt-5">
                            <div class="col">
                                <button id="submitButton" class="btn btn-lg btn-success" type="submit">Post Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-firestore.js"></script>
    <script src="{{asset('js/firebase.js')}}"></script>

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
                        $("#imagePreview2").css("display", "inline-block");
                    }

                    var nowTime = new Date();
                    var time = nowTime.getMinutes() + "-" + nowTime.getSeconds() + "-" + nowTime.getMilliseconds();

                    var rowImage = document.getElementById('uploadFile').files[0];
                    var imageName = time + "-" + rowImage.name;

                    var stroageRef = firebase.storage().ref('/ProductImage');

                    var profileImageFolder = stroageRef.child(imageName);

                    var Metadata = {
                        cacheControl: 'public,max-age=300',
                        contentType: 'image/jpeg'
                    }

                    var uploadTask = profileImageFolder.put(rowImage,Metadata);

                    var userToken = "{{$user['MYID']}}";

                    uploadTask.on('state_changed', function (snapshot) {
                        var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
                        console.log("Upload is " + progress + " done");
                        if(progress<100)
                        {
                            $("#submitButton").attr('disabled','disabled');
                        }
                        else{
                            $("#submitButton").removeAttr('disabled');
                        }
                    }, function (error) {
                        console.log(error.message);
                    }, function () {
                        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL){
                            console.log(downloadURL);
                            document.getElementById('image_uri').value = downloadURL
                        })
                    })
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
                        $("#imagePreview3").css("display", "inline-block");
                    }

                    var nowTime = new Date();
                    var time = nowTime.getMinutes() + "-" + nowTime.getSeconds() + "-" + nowTime.getMilliseconds();

                    var rowImage = document.getElementById('uploadFile2').files[0];
                    var imageName = time + "-" + rowImage.name;

                    var stroageRef = firebase.storage().ref('/ProductImage');

                    var profileImageFolder = stroageRef.child(imageName);

                    var Metadata = {
                        cacheControl: 'public,max-age=300',
                        contentType: 'image/jpeg'
                    }

                    var uploadTask = profileImageFolder.put(rowImage,Metadata);

                    var userToken = "{{$user['MYID']}}";

                    uploadTask.on('state_changed', function (snapshot) {
                        var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
                        console.log("Upload is " + progress + " done");
                        if(progress<100)
                        {
                            $("#submitButton").attr('disabled','disabled');
                        }
                        else{
                            $("#submitButton").removeAttr('disabled');
                        }
                    }, function (error) {
                        console.log(error.message);
                    }, function () {
                        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL){
                            console.log(downloadURL);
                            document.getElementById('image_uri2').value = downloadURL
                        })
                    })
                }
            });
        });

        $('#imagePreview2').click(function(){
            $('#uploadFile2').click();
        });

        // image 3
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
                        $("#imagePreview4").css("display", "inline-block");
                    }

                    var nowTime = new Date();
                    var time = nowTime.getMinutes() + "-" + nowTime.getSeconds() + "-" + nowTime.getMilliseconds();

                    var rowImage = document.getElementById('uploadFile3').files[0];
                    var imageName = time + "-" + rowImage.name;

                    var stroageRef = firebase.storage().ref('/ProductImage');

                    var profileImageFolder = stroageRef.child(imageName);

                    var Metadata = {
                        cacheControl: 'public,max-age=300',
                        contentType: 'image/jpeg'
                    }

                    var uploadTask = profileImageFolder.put(rowImage,Metadata);

                    var userToken = "{{$user['MYID']}}";

                    uploadTask.on('state_changed', function (snapshot) {
                        var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
                        console.log("Upload is " + progress + " done");
                        if(progress<100)
                        {
                            $("#submitButton").attr('disabled','disabled');
                        }
                        else{
                            $("#submitButton").removeAttr('disabled');
                        }
                    }, function (error) {
                        console.log(error.message);
                    }, function () {
                        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL){
                            console.log(downloadURL);
                            document.getElementById('image_uri3').value = downloadURL
                        })
                    })
                }
            });
        });

        $('#imagePreview3').click(function(){
            $('#uploadFile3').click();
        });

        // image 4

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

                    var nowTime = new Date();
                    var time = nowTime.getMinutes() + "-" + nowTime.getSeconds() + "-" + nowTime.getMilliseconds();

                    var rowImage = document.getElementById('uploadFile4').files[0];
                    var imageName = time + "-" + rowImage.name;

                    var stroageRef = firebase.storage().ref('/ProductImage');

                    var profileImageFolder = stroageRef.child(imageName);

                    var Metadata = {
                        cacheControl: 'public,max-age=300',
                        contentType: 'image/jpeg'
                    }

                    var uploadTask = profileImageFolder.put(rowImage,Metadata);

                    var userToken = "{{$user['MYID']}}";

                    uploadTask.on('state_changed', function (snapshot) {
                        var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
                        console.log("Upload is " + progress + " done");
                        if(progress<100)
                        {
                            $("#submitButton").attr('disabled','disabled');
                        }
                        else{
                            $("#submitButton").removeAttr('disabled');
                        }
                    }, function (error) {
                        console.log(error.message);
                    }, function () {
                        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL){
                            console.log(downloadURL);
                            document.getElementById('image_uri4').value = downloadURL
                        })
                    })
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
                document.getElementById("all-cities").style.display = "none";
            }
            else if(selectedCountry == "Pakistan")
            {
                document.getElementById("uae-state").style.display = "none";
                document.getElementById("pakistan-state").style.display = "block";
                document.getElementById("all-cities").style.display = "block";
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

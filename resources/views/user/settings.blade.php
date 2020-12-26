@extends('layouts.app')
@section('content')
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
                            <p><input type="file"  accept="image/*" name="image" id="imageFile"  onchange="loadFile(event)" style="display: none;"></p>
                            <p><label class="text-uppercase btn btn-outline-secondary float-left mr-2" for="imageFile" style="cursor: pointer;">Select</label></p>
                            <button class="text-uppercase btn btn-outline-success float-left" onclick="uploadImage()" type="button" id="aaa">Upload</button>
                        </div>
                    </div>
                </div>
                <h3>Account</h3>
                <ul class="list-group list-group-flush mt-4">
                    <a href="{{route('user-profile')}}"><li class="list-group-item list-group-item-action rounded text-center">My Account</li></a>
                    <a href=""><li class="list-group-item list-group-item-action rounded text-center">Favorites</li></a>
                    <a href="{{route('user-settings')}}"><li class="list-group-item list-group-item-action font-weight-bold rounded text-center">Settings</li></a>
                    <a href="{{route('logout-user')}}"><li class="list-group-item list-group-item-action rounded text-center">Logout</li></a>
                </ul>
            </div>
            <div class="col-md-7 offset-md-1" id="dashboard-right-side">
                @if(isset($value['Name']))
                    <div id="success-image" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none">
                        <strong>Hey {{$value['Name']}}!</strong> Your profile image successfully updated!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                    <h3 class="user-text">Settings</h3>
                    @if(session('success_msg'))
                        <div>
                            <div class="alert alert-success">
                                {{ session('success_msg') }}
                            </div>
                        </div>
                    @endif
                    <h5 class="">Change Details: </h5>
                <div class="description mt-4">
                    <div class="number-box">
                        <p class="d-inline mr-4 text-success">Phone Number:</p>
                        @if(isset($value['PhoneNumber']))
                            <p class="d-inline">{{$value['PhoneNumber']}}</p>
                        @endif
                    </div>
                    @if($errors->all())
                        <div class="row mt-3">
                            <div class="col alert alert-warning">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <form action="{{route('update-user')}}" enctype="multipart/form-data" class="d-block mt-5">
                        @csrf
                        <div class="row mt-5">
                            <div class="col">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" @if(isset($value['Name'])) value="{{$value['Name']}}" @endif placeholder="Enter Name" name="username">
                            </div>
                            <div class="col">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" @if(isset($value['Email'])) value="{{$value['Email']}}" @endif id="email" placeholder="Enter Email" name="email">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <label for="phone1">Primay Phone Number:</label>
                                <input type="text" class="form-control" id="phone1" @if(isset($value['PhoneNumber'])) value="{{$value['PhoneNumber']}}" @endif disabled>
                            </div>
                            <div class="col">
                                <label for="phone2">Alternative Phone Number:</label>
                                <input type="number" class="form-control" id="phone2" @if(isset($value['SecondPhoneNumber'])) value="{{$value['SecondPhoneNumber']}}" @endif placeholder="Enter Number" name="AlternativeNumber">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <label for="country">Select Country: @if(isset($value['Country'])) {{$value['Country']}} @endif</label>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <select name="country" class="form-control" id="country" onchange="sortByCategory(this)">
                                    <option disabled selected></option>
                                    <option value="UAE">UAE</option>
                                    <option value="Pakistan">Pakistan</option>
                                </select>
                            </div>
                            <div class="col" id="district1">
                                <label for="district">Select District: @if(isset($value['City'])) {{$value['City']}} @endif</label>
                                <select name="district" class="form-control" id="">
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
                            <div class="col" id="district2" style="display: none">
                                <label for="district">Select District: @if(isset($value['City'])) {{$value['City']}} @endif</label>
                                <select name="district" class="form-control" id="">
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
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Update Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-firestore.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyCDft74fOvL6q5oocG8zwavlgAsaNUlZts",
            authDomain: "classified-firestore-database.firebaseapp.com",
            databaseURL: "https://classified-firestore-database.firebaseio.com",
            projectId: "classified-firestore-database",
            storageBucket: "classified-firestore-database.appspot.com",
            messagingSenderId: "1065750837054",
            appId: "1:1065750837054:web:868a2bec07d048cd5b9e6f",
            measurementId: "G-G0NCCQD1V4"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>

    <script>
        // var $select1 = $( '#country' ),
        //     $select2 = $( '#district' ),
        //     $options = $select2.find( 'option' );
        //
        // $select1.on( 'change', function() {
        //     $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
        // } ).trigger( 'change' );

        function sortByCategory(el){
            alert($(el).val());
        }

        function sortByCategory(el) {
            var selectedCountry = $(el).val();
            console.log(selectedCountry);
            if(selectedCountry == "UAE")
            {
                document.getElementById("district1").style.display = "block";
                document.getElementById("district2").style.display = "none";
            }
            else if(selectedCountry == "Pakistan")
            {
                document.getElementById("district1").style.display = "none";
                document.getElementById("district2").style.display = "block";
            }
        };
    </script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }

        function uploadImage()
        {
            var nowTime = new Date();
            var time = nowTime.getMinutes() + "-" + nowTime.getSeconds() + "-" + nowTime.getMilliseconds();

            var rowImage = document.getElementById('imageFile').files[0];
            var imageName = time + "-" + rowImage.name;

            var stroageRef = firebase.storage().ref('/ProfileImage');

            var profileImageFolder = stroageRef.child(imageName);

            var Metadata = {
                cacheControl: 'public,max-age=300',
                contentType: 'image/jpeg'
            }

            var uploadTask = profileImageFolder.put(rowImage,Metadata);

            var userToken = "{{$userId}}";

            uploadTask.on('state_changed', function (snapshot) {
                var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
                console.log("Upload is " + progress + " done");
            }, function (error) {
                console.log(error.message);
            }, function () {
                uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL){
                    console.log(downloadURL);

                    firebase.firestore().collection("Users").doc(userToken).update({
                        ProfileImageURI: downloadURL
                    });
                    document.getElementById("success-image").style.display = "block";
                })
            })
        }
    </script>

{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script src="{{asset('js/jquery-1.12.4.js')}}"></script>--}}

{{--    <script>--}}
{{--        var $select1 = $("#country"),--}}
{{--            $select2 = $("#district"),--}}
{{--            $options = $select2.find("option");--}}


{{--        console.log($select1);--}}
{{--        console.log($select2);--}}
{{--        console.log($options);--}}

{{--        $select1.on("change", function () {--}}

{{--            // $select2.html($options.filter('[value="' + this.value + '"]'));--}}
{{--            console.log("Kaj kore na");--}}
{{--        }).trigger("change");--}}
{{--    </script>--}}
@endsection

@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="container py-5 bg-white rounded" id="register-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h2 class="register-text text-center">Verify your account</h2>
                            <p class="verify-text text-center">A code has been sent in your phone number</p>
                            <form class="form-group mt-4">
                                <div class="row justify-content-center">
                                    <input class="col-md-7 form-control" type="text" id="verificationCode" placeholder="Enter verification code">
                                </div>
                                <div class="row justify-content-center">
                                    <button class="col-md-7 btn btn-success mt-3" type="button" onclick="codeverify();">Verify code</button>
                                </div>
                            </form>

                            <div class="register-bottom-text text-center">
                                By signing up I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                            </div>

                            <div class="register-bottom-text2 text-center mt-4">
                                Already have an account?
                            </div>
                            <div class="row justify-content-center">
                                <button class="col-md-8 btn btn-simple mt-3 form-control" type="button">Log In</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyAwAI8KC-LRhNfRsFCI9Q-TqkaHPLYfsQ0",
            authDomain: "digital-business-owners.firebaseapp.com",
            databaseURL: "https://digital-business-owners.firebaseio.com",
            projectId: "digital-business-owners",
            storageBucket: "digital-business-owners.appspot.com",
            messagingSenderId: "553533294292",
            appId: "1:553533294292:web:3a8470eeefc3c6f2b99d41",
            measurementId: "G-CQ9BES4G8Q"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>

    <script src="{{asset('js/NumberVerify.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/NumberAuthentication.js')}}" type="text/javascript"></script>
@endsection

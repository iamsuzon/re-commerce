<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginverify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $auth = app('firebase.auth');

        try {
            $signInResult = $auth->signInWithEmailAndPassword($request->email, $request->password)->firebaseUserId();
            $request->session()->put('localId', $signInResult);
            return redirect()->route('admin-dashboard');

        }
        catch (\Kreait\Firebase\Auth\SignIn\FailedToSignIn $e) {
            return back()->with('fail_status','The Credentials are Wrong');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->pull('localId', 'default');
        return redirect()->route('admin-login');
    }

    public function dashboard()
    {
        $firestore = app('firebase.firestore');
        $posts = $firestore->database()->collection('Request')
//            ->where('ProductStatus','=','Pending')
//            ->where('ProductStatus','=','Active')
                ->orderBy('Date', 'DESC')->documents();
        return view('admin.dashboard')->withPosts($posts);
    }
    public function pending()
    {
        $firestore = app('firebase.firestore');
        $posts = $firestore->database()->collection('Request')->where('ProductStatus','=','Pending')->documents();
        return view('admin.pending-ads')->withPosts($posts);
    }

    public function pendingview($id)
    {
        $firestore = app('firebase.firestore');
        $thepost = $firestore->database()->collection('Request')->document($id)->snapshot();

        return view('admin.pending-ads-view')->withThepost($thepost);
    }

    public function active()
    {
        $firestore = app('firebase.firestore');
        $posts = $firestore->database()->collection('Request')->where('ProductStatus','=','Active')->documents();
        return view('admin.active-ads')->withPosts($posts);
    }

    public function declined()
    {
        $firestore = app('firebase.firestore');
        $posts = $firestore->database()->collection('Request')->where('ProductStatus','=','Declined')->documents();
        return view('admin.declined-ads')->withPosts($posts);
    }

    public function soldout()
    {
        $firestore = app('firebase.firestore');
        $posts = $firestore->database()->collection('Request')->where('ProductStatus','=','Pending')->documents();
        return view('admin.soldout-ads')->withPosts($posts);
    }

    public function revenuemanagement()
    {
        return view('admin.revenue');
    }

    public function approve($id,$myid)
    {
        $firestore = app('firebase.firestore');

        $post = $firestore->database()->collection('Request')->document($id)->update([
            ['path' => 'ProductStatus', 'value' => 'Active']
        ]);
        $reqs = $firestore->database()->collection('MyReq')->document($myid)->collection('Posts')->document($id)->update([
            ['path' => 'ProductStatus', 'value' => 'Active']
        ]);


        $thepost = $firestore->database()->collection('Request')->document($id)->snapshot();
        $adddata = [
            'MYID' => $thepost['MYID'],
            'Product_Slug' => $thepost['Product_Slug'],
            'Product_Name' => $thepost['Product_Name'],
            'Product_Condition' => $thepost['Product_Condition'],
            'Product_Type' => $thepost['Product_Type'],
            'Product_Title' => $thepost['Product_Title'],
            'Product_Details' => $thepost['Product_Details'],
            'Product_Price' => $thepost['Product_Price'],
            'ProductFirstImageURI' => $thepost['ProductFirstImageURI'],
            'ProductSecondImageURI' => $thepost['ProductSecondImageURI'],
            'ProductThirdImageURI' => $thepost['ProductThirdImageURI'],
            'ProductFourthImageURI' => $thepost['ProductFourthImageURI'],
            'Urgent' => $thepost['Urgent'],
            'Doorstep' => $thepost['Doorstep'],
            'Country' => $thepost['Country'],
            'State' => $thepost['State'],
            'City' => $thepost['City'],
            'Phone' => $thepost['Phone'],
            'Count' => $thepost['Count'],
            'Date' => $thepost['Date'],
            'Time' => $thepost['Time'],
            'ProductStatus' => $thepost['ProductStatus']
        ];

        $countrypost = $firestore->database()->collection($thepost['Country'])->document($thepost->id())->set($adddata);
        $typepost = $firestore->database()->collection($thepost['Product_Name'])->document($thepost->id())->set($adddata);

        return back()->with('success_status','The Post is Approved');
    }

    public function decline($id,$myid)
    {
        $firestore = app('firebase.firestore');

        $post = $firestore->database()->collection('Request')->document($id)->update([
            ['path' => 'ProductStatus', 'value' => 'Declined']
        ]);

        $reqs = $firestore->database()->collection('MyReq')->document($myid)->collection('Posts')->document($id)->update([
            ['path' => 'ProductStatus', 'value' => 'Declined']
        ]);


        return back()->with('decline_status','The Post is Declined');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Requests;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Firestore;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;

class AuthController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function register()
    {
        return view('auth/registration');
    }

    public function profile(Request $request)
    {
        if ($_COOKIE['profile_viewer_uid'] != null)
        {
            $exist = 0;
            $isactive = '';
            $userId = $_COOKIE['profile_viewer_uid'];

            $firestore = app('firebase.firestore');
            $database = $firestore->database();
            $ref = $database->collection('Users');
            $users = $ref->document($userId);

            $value = $users->snapshot();

            if($request->asc){
                $userrequest = $database->collection('MyReq')->document($userId)->collection('Posts')
                    ->orderBy('Count','ASC')->documents();
                $isactive = 'asc';
            }
            elseif ($request->desc){
                $userrequest = $database->collection('MyReq')->document($userId)->collection('Posts')
                    ->orderBy('Count','DESC')->documents();
                $isactive = 'desc';
            }
            else{
                $userrequest = $database->collection('MyReq')->document($userId)->collection('Posts')
                    ->orderBy('Count','DESC')->documents();
            }


            foreach ($userrequest as $userrequ){
                if ($userrequ->exists()){
                    $exist = 1;
                }
            }

            if ($exist == 1)
            {
                return view('user.profile')->withValue($value)->withUserrequest($userrequest)->withIsactive($isactive);
            }
            else{
                return view('user.profile')->withValue($value);
            }
        }
        else{
            return view('auth.registration');
        }
    }
    public function userad($slug)
    {
        $userId = $_COOKIE['profile_viewer_uid'];
        $firestore = app('firebase.firestore');
        $database = $firestore->database()->collection('Users')->document($userId);
        $value = $database->snapshot();

        $addetails = $firestore->database()->collection('MyReq')->document($userId)->collection('Posts')
            ->where('Product_Slug','=',$slug)
            ->documents();

        return view('user.user-ads')->withValue($value)->withAddetails($addetails);
    }

    public function settings()
    {
        if (!empty($_COOKIE['profile_viewer_uid'])) {

            $userId = $_COOKIE['profile_viewer_uid'];

            $firestore = app('firebase.firestore');
            $database = $firestore->database();
            $ref = $database->collection('Users');
            $users = $ref->document($userId);

            $value = $users->snapshot();

            return view('user.settings', compact('userId'))->withValue($value);
        }
        else{
            return view('auth.registration');
        }
    }

    public function update(Request $request)
    {
        $this->validateWith([
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'AlternativeNumber' => 'required|max:255',
            'country' => 'required',
            'district' => 'required'
        ]);

        $userId = $_COOKIE['profile_viewer_uid'];

        $updateData = [
            'MYID' => $userId,
            'Name' => $request->username,
            'Email' => $request->email,
            'SecondPhoneNumber' => $request->AlternativeNumber,
            'Country' => $request->country,
            'City' => $request->district
        ];

        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $ref = $database->collection('Users');
        $users = $ref->document($userId);

        $updatedinfo = $users->set($updateData, ['merge' => true]);

        if ($updatedinfo)
        {
            return back()->with('success_msg','Profile Updated Successfully');
        }
        else{
            return back()->with('failed_msg','Something went wrong');
        }
    }

    public function logout()
    {
        if (isset($_COOKIE['profile_viewer_uid'])) {
            unset($_COOKIE['profile_viewer_uid']);
            setcookie('profile_viewer_uid', null, -1, '/');
            return view('auth.registration');
        }
    }

    public function adpostview()
    {
        $userId = $_COOKIE['profile_viewer_uid'];

        $firestore = app('firebase.firestore');
        $users = $firestore->database()->collection('Users')->document($userId)->snapshot()->data();

        if (array_key_exists("Name",$users))
        {
            return view('user.post-ad')->withValue($users);
        }
        else{
            return back()->with('warning_status','Please complete your account first');
        }
    }
}

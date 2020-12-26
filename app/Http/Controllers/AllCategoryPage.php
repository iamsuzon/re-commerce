<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class AllCategoryPage extends Controller
{
//    Mobile
    public function tablesview()
    {
        $userId = $_COOKIE['profile_viewer_uid'];

        $firestore = app('firebase.firestore');
        $user = $firestore->database()->collection('Users')->document($userId)->snapshot();

        return view('allcategorypages.ad-tablets')->withUser($user);
    }
    public function mobilesview()
    {
        $database = app('firebase.database');
        $ref = $database->getReference("Users");

        $userId = $_COOKIE['profile_viewer_uid'];

        $value = $ref->getChild($userId)->getValue();

        return view('allcategorypages.ad-mobiles')->withValue($value);
    }
    public function phoneaccessoriesview()
    {
        $database = app('firebase.database');
        $ref = $database->getReference("Users");

        $userId = $_COOKIE['profile_viewer_uid'];

        $value = $ref->getChild($userId)->getValue();

        return view('allcategorypages.ad-phone-accessories')->withValue($value);
    }

//    Cars
    public function carinstallmentsview()
    {
        $database = app('firebase.database');
        $ref = $database->getReference("Users");

        $userId = $_COOKIE['profile_viewer_uid'];

        $value = $ref->getChild($userId)->getValue();

        return view('allcategorypages.ad-car-installments')->withValue($value);
    }
    public function caraccessoriesview()
    {
        $database = app('firebase.database');
        $ref = $database->getReference("Users");

        $userId = $_COOKIE['profile_viewer_uid'];

        $value = $ref->getChild($userId)->getValue();

        return view('allcategorypages.ad-car-accessories')->withValue($value);
    }
}

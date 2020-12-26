<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AuthController@home')->name('home');

 Auth::routes(['register' => false]);
//
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('user-register','AuthController@register')->name('signin')->middleware('loggedin');

Route::middleware('checkuser')->group(function (){
    Route::get('user-profile','AuthController@profile')->name('user-profile');
    Route::post('user-profile','AuthController@profile')->name('user-profile');
    Route::get('user-ad-view/{slug}','AuthController@userad')->name('user-ad-view');
    Route::get('user-settings','AuthController@settings')->name('user-settings');
    Route::get('update-user','AuthController@update')->name('update-user');
    Route::get('logout-user','AuthController@logout')->name('logout-user');
    Route::get('ad-post', 'AuthController@adpostview')->name('ad-post-view');

    Route::get('ad-post/tablets', 'AllCategoryPage@tablesview')->name('ad-tablets')->middleware('accountcomplete');
    Route::get('ad-post/mobiles', 'AllCategoryPage@mobilesview')->name('ad-mobiles')->middleware('accountcomplete');
    Route::get('ad-post/phone-accessories', 'AllCategoryPage@phoneaccessoriesview')->name('ad-phone-accessories')->middleware('accountcomplete');
    Route::get('ad-post/car-installments', 'AllCategoryPage@carinstallmentsview')->name('ad-car-installments')->middleware('accountcomplete');
    Route::get('ad-post/car-accessories', 'AllCategoryPage@caraccessoriesview')->name('ad-car-accessories')->middleware('accountcomplete');

    Route::post('ad-post/tablets/post', 'SendPostController@sendTablets')->name('ad-tablets-post');
});

Route::get('admin/login','AdminController@login')->name('admin-login');
Route::post('admin/login/verify','AdminController@loginverify')->name('admin-login-verify');

Route::middleware('admincheck')->group(function () {
    Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin-dashboard');
    Route::get('admin/pending-ads', 'AdminController@pending')->name('admin-pending');
    Route::get('admin/ads/view/{id}', 'AdminController@pendingview')->name('admin-pending-view');
    Route::get('admin/ads/approve/{id}/{myid}', 'AdminController@approve')->name('admin-approve');
    Route::get('admin/ads/decline/{id}/{myid}', 'AdminController@decline')->name('admin-decline');
    Route::get('admin/active-ads', 'AdminController@active')->name('admin-active');
    Route::get('admin/declined-ads', 'AdminController@declined')->name('admin-declined');
    Route::get('admin/sold-out-ads', 'AdminController@soldout')->name('admin-soldout');
    Route::get('admin/revenue/management', 'AdminController@revenuemanagement')->name('admin-revenue-management');
    Route::get('admin/logout', 'AdminController@logout')->name('admin-logout');
});

Route::get('thepost', function () {
    return view('thepostpage');
});

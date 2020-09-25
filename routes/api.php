<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/partner','Api\ApiOrganizationController@organization');
Route::post('/partner/{org_type}','Api\ApiOrganizationController@single_partner');
Route::get('/business','Api\ApiOrganizationController@Business');

Route::get('/login','Api\ApiOrganizationController@Login');

Route::get('/fetch_members','Api\ApiFcmController@fetchMembers');

Route::post('/fcm','Api\ApiFcmController@fcmMessage');
Route::get('/fetchMessage','Api\ApiFcmController@fetchMessage'); 



Route::get('/project','Api\ApiFileController@File');
Route::get('/articles','Api\ApiArticlesController@article');
Route::get('/about','Api\ApiAboutController@about');
Route::get('/bod','Api\ApiBODController@BOD');
Route::get('/council','Api\ApiCouncilController@council');
Route::get('/media','Api\ApiMediaController@media');
Route::get('/gallery','Api\ApiMediaController@Gallery');
Route::get('/slider','Api\ApiMediaController@Slider');
Route::get('/logo','Api\ApiMediaController@Logo');


Route::post('/memberlogin','Api\ApiMemberController@memberlogin');
Route::post('/checkotp','Api\ApiMemberController@checkotp');
Route::post('/createpassword','Api\ApiMemberController@createpassword');
Route::post('/finallogin','Api\ApiMemberController@finallogin');
Route::get('/member','Api\ApiMemberController@member');
Route::get('/message','Api\ApiMessageController@message');   
Route::post('/messagestore','Api\ApiMessageController@messagestore');  
Route::get('/news','Api\ApiNewsController@News');

Route::get('/notice','Api\ApiNotificationController@notice');
Route::get('/pastpresident','Api\ApiPastpresidentController@past');
Route::get('/faq','Api\ApiFaqController@faq');


Route::get('/intro','Api\ApiArticlesController@Intro');
Route::get('/planact','Api\ApiArticlesController@PlanOfAct');


Route::get('/anni-birthday','Api\ApiMemberController@Anniversary');






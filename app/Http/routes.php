<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/permission/denied', 'HomeController@permissionDenied');
Route::get('/redirect-dashboard', 'HomeController@toDashboard');
Route::get('/user-profile', 'HomeController@toDashboard');
Route::get('/my-announcment', 'AnnouncmentController@myAnnouncment');

// For User Profile and account settings...
Route::get('verify-user-email/{id}', ['uses' => 'ProfileController@verifyUserEmail']);
Route::get('chk-email-duplicate', ['uses' => 'ProfileController@chkEmailDuplicate']);
Route::get('chk-current-password', ['uses' => 'ProfileController@chkCurrentPassword']);

Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@show']);
Route::get('update-profile', ['middleware' => 'auth', 'uses' => 'ProfileController@updateProfile']);
Route::post('update-profile-post', ['middleware' => 'auth', 'uses' => 'ProfileController@updateProfileInfo']);

Route::get('change-email', ['middleware' => 'auth', 'uses' => 'ProfileController@updateEmail']);
Route::post('change-email-post', ['middleware' => 'auth', 'uses' => 'ProfileController@updateEmailInfo']);

Route::get('change-password', ['middleware' => 'auth', 'uses' => 'ProfileController@updatePassword']);
Route::post('change-password-post', ['middleware' => 'auth', 'uses' => 'ProfileController@updatePasswordInfo']);
/*Student routes start*/
    Route::get('/edit-profile', 'ProfileController@editStudentProfile');
    Route::post('/save-personal-data', 'ProfileController@updatePersonalData');
    Route::get('/change-tab', 'HomeController@switchTab');
Route::get('unread-message', [ 'uses' => 'AnnouncmentController@unreadMessage']);
/*Student routes end*/
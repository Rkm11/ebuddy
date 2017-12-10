<?php
Route::group(array('module'=>'contactus','namespace' => 'App\PiplModules\contactus\Controllers','middleware'=>'web'), function() {
    //Your routes belong to this module.
	Route::get("/contact-us","ContactUsController@ContactPage");
});
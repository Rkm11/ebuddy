<?php
Route::group(array('module'=>'ContentPage','namespace' => 'App\PiplModules\ContactRequest\Controllers','middleware'=>'web'), function() {
    //Your routes belong to this module.
	
	Route::get("/admin/contact-requests/{list?}","ContactRequestController@index")->middleware('permission:view.contact-requests');
	Route::get("/admin/contact-requests-data","ContactRequestController@contactRequestData")->middleware('permission:view.contact-requests');
	
	Route::get("/contact-us","ContactRequestController@showContactForm");
	Route::post("/contact-us","ContactRequestController@showContactForm");
	
	Route::get("/admin/contact-request/{reference_no}","ContactRequestController@viewContactRequest");
	Route::post("/admin/contact-request-reply/{reference_no}","ContactRequestController@postReply");
	
	Route::delete("/admin/contact-request/delete/{req_id}","ContactRequestController@deleteContactRequest");
	Route::delete("/admin/contact-request/delete-selected/{req_id}","ContactRequestController@deleteSelectedContactRequest");
	
	Route::get("/admin/contact-request-categories","ContactRequestController@listContactCategories");
	Route::get("/admin/contact-request-categories-data","ContactRequestController@listContactCategoriesData");
	Route::get("/admin/contact-request-categories/create","ContactRequestController@createContactCategories");
	Route::post("/admin/contact-request-categories/create","ContactRequestController@createContactCategories");
	
	Route::get("/admin/contact-request-category/{category_id}/{locale?}","ContactRequestController@updateContactCategory");
	Route::post("/admin/contact-request-category/{category_id}/{locale?}","ContactRequestController@updateContactCategory");
	
	Route::delete("/admin/delete-contact-request-category/{category_id}","ContactRequestController@deleteContactCategory");
	Route::delete("/admin/delete-selected-contact-request-category/{category_id}","ContactRequestController@deleteSelectedContactCategory");
});
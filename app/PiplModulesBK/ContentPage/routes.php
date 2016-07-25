<?php
Route::group(array('module'=>'ContentPage','namespace' => 'App\PiplModules\ContentPage\Controllers','middleware'=>'web'), function() {
    //Your routes belong to this module.
	
	Route::get("/admin/content-pages/list","ContentPageController@index")->middleware('permission:view.content-pages');
	Route::get("/admin/content-pages-data","ContentPageController@cmsPageDataAdmin")->middleware('permission:view.content-pages');
	
	Route::get("/admin/content-pages/create","ContentPageController@createContentPage")->middleware('permission:create.content-pages');
	Route::post("/admin/content-pages/create","ContentPageController@createContentPage")->middleware('permission:create.content-pages');
	
	Route::get("/admin/content-pages/update/{page_id}","ContentPageController@showUpdateContentPageForm")->middleware('permission:update.content-pages');
	Route::post("/admin/content-pages/update/{page_id}","ContentPageController@showUpdateContentPageForm")->middleware('permission:update.content-pages');
	
	
	Route::get("/admin/content-pages/update-language/{page_id}/{locale}","ContentPageController@showUpdateContentPageLanguageForm")->middleware('permission:update.content-pages');
	Route::post("/admin/content-pages/update-language/{page_id}/{locale}","ContentPageController@showUpdateContentPageLanguageForm")->middleware('permission:update.content-pages');
	
	
	Route::delete("/admin/content-pages/delete/{page_id}","ContentPageController@deleteContentPage")->middleware('permission:delete.content-pages');
	
});

// Below route must be at very last of all the available routes
Route::get('{slug}','App\PiplModules\ContentPage\Controllers\ContentPageController@findAndShowPageAccordingToSlug')->middleware('web');
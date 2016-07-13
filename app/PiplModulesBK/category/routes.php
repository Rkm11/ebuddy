<?php
Route::group(array('module'=>'Category','namespace' => 'App\PiplModules\Category\Controllers','middleware'=>'web'), function() {
    //Your routes belong to this module.
	
	
	Route::get("/admin/categories-list","CategoryController@listCategories");
	Route::get("/admin/categories-list-data","CategoryController@listCategoriesData");
	Route::get("/admin/category/create","CategoryController@createCategories");
	Route::post("/admin/category/create","CategoryController@createCategories");	
	Route::get("/admin/category/{category_id}/{locale?}","CategoryController@updateCategory");
	Route::post("/admin/category/{category_id}/{locale?}","CategoryController@updateCategory");	
	Route::delete("/admin/category/{category_id}","CategoryController@deleteCategory");
	Route::delete("/admin/category-delete-selected/{category_id}","CategoryController@deleteSelectedCategory");
});
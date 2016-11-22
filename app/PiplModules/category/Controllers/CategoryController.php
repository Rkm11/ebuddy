<?php
namespace App\PiplModules\category\Controllers;
use Auth;
use Auth\User;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Storage;
use App\PiplModules\category\Models\Category;
use Mail;
use Datatables;
class CategoryController extends Controller
{


	public function listCategories()
	{
		
		$all_categories = Category::translatedIn(\App::getLocale())->get();
		
		return view('category::list-categories',array('categories'=>$all_categories));
		
	}
	public function listCategoriesData()
	{
		
		$all_categories = Category::translatedIn(\App::getLocale())->get();
		return Datatables::of($all_categories)
               
                ->make(true);
		
	}
	
	public function createCategories(Request $request)
	{
			if($request->method()=="GET")
			{
				return view("category::create-category");	
			}
			else
			{
							$data = $request->all();
							$validate_response = Validator::make($data, array(
																				'name' => 'required',
																				
							));
						
						if($validate_response->fails())
						{
									return redirect($request->url())->withErrors($validate_response)->withInput();
						}
						else
						{
							$created_category = Category::create(array('created_by'=>Auth::user()->id));
							
							$translated_category = $created_category->translateOrNew(\App::getLocale());
							$translated_category->name = $request->name;
							$translated_category->locale =\App:: getLocale();
							$translated_category->category_id =$created_category->id;
							$translated_category->save();
							
							return redirect("admin/categories-list")->with('status','Category created successfully!');
						}
			}
	}
	
	public function updateCategory(Request $request,$category_id,$locale="")
	{
			$category = Category::find($category_id);
			
			if($category)
			{
					$translated_category = $category->translateOrNew($locale);
				
					if($request->method()=="GET")
					{
						return view("category::update-category",array('category'=>$translated_category));	
					}
					else
					{
									$data = $request->all();
									$validate_response = Validator::make($data, array(
																						'name' => 'required',
																						
									));
								
								if($validate_response->fails())
								{
											return redirect($request->url())->withErrors($validate_response)->withInput();
								}
								else
								{
									
									$translated_category->name = $request->name;
									
									if($locale!='')
									{
										$translated_category->category_id =$category->id;
										$translated_category->locale =$locale;
									}
									
									$translated_category->save();
									
									return redirect("admin/categories-list")->with('status','Category updated successfully!');
								}
					}
			}
			else
			{
				return redirect('admin/categories-list');
			}
	}
	
	public function deleteCategory($category_id)
	{
		$category = Category::find($category_id);
		
		if($category)
		{
			$category->delete();
			return redirect("admin/categories-list")->with('status','Category deleted successfully!');
		}
		else
		{
			return redirect('admin/categories-list');
		}
	}
	public function deleteSelectedCategory($category_id)
	{
		$category = Category::find($category_id);
		
		if($category)
		{
			$category->delete();
			 echo json_encode(array("success"=>'1','msg'=>'Selected records has been deleted successfully.'));
		}
		else
		{
			 echo json_encode(array("success"=>'0','msg'=>'There is an issue in deleting records.'));
		}
	}
	
}
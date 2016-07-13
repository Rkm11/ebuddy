<?php
namespace App\PiplModules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategoryTranslation extends Model 
{

	protected $fillable = ['name','parent_id'];
	

	
}
<?php
namespace App\PiplModules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
class PostCategory extends Model 
{

	use \Dimsav\Translatable\Translatable, NodeTrait;
	
	  public $useTranslationFallback = true;
	
	public $translatedAttributes = ['name'];
    
	protected $fillable = ['name','created_by','parent_id','slug'];
	
	public function parentCat()
	{
		return $this->belongsTo('App\PiplModules\Blog\Models\PostCategory','parent_id','id');
	}
	public function posts()
	{
		return $this->hasMany('App\PiplModules\Blog\Models\Post','post_category_id');
	}
}
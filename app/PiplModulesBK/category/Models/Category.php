<?php
namespace App\PiplModules\Category\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

	use \Dimsav\Translatable\Translatable;
	
	public $translatedAttributes = ['name'];
    
	protected $fillable = ['name','create_by'];
	
}
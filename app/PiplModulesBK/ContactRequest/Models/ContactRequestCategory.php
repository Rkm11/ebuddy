<?php
namespace App\PiplModules\ContactRequest\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequestCategory extends Model 
{

	use \Dimsav\Translatable\Translatable;
	
	public $translatedAttributes = ['name'];
    
	protected $fillable = ['name','create_by'];
	
}
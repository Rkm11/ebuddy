<?php
namespace App\PiplModules\Faq\Models;

use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model 
{

	protected $fillable = ['question','answer'];
	
}
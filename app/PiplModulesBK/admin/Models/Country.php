<?php
namespace App\PiplModules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{
 use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['name'];

}
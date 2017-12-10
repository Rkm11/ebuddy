<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UserAnnouncement extends Model
{	

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function announcement()
    {
          return $this->belongsTo('App\Announcement');
    }
}
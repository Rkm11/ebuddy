<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{	

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function userAnnouncement()
    {
          return $this->hasMany('App\UserAnnouncement');
    }
}
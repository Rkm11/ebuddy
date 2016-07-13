<?php

namespace App\PiplModules\Roles\Models;

use App\PiplModules\Roles\Traits\Slugable;
use Illuminate\Database\Eloquent\Model;
use App\PiplModules\Roles\Traits\RoleHasRelations;
use App\PiplModules\Roles\Contracts\RoleHasRelations as RoleHasRelationsContract;

class Role extends Model implements RoleHasRelationsContract
{
    use Slugable, RoleHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'level'];

    /**
     * Create a new model instance.
     *
     * @param array $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = config('roles.connection')) {
            $this->connection = $connection;
        }
    }
	
	
}

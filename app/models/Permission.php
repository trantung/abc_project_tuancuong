<?php
class Permission extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'permissions';

	public function role()
    {
        // return $this->belongsToMany('Role');
        return $this->belongsToMany('permission', 'group_role_permission', 'id', 'permissions_id');
    }
}


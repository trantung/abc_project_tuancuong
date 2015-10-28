<?php
class Role extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	public function user()
    {
        return $this->hasMany('User');
    }
    public function permission()
    {
        
        return $this->belongsToMany('Role', 'group_role_permission', 'role_id', 'permissions_id');
    }
}
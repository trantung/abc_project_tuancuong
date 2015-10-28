<?php
class Group_role_permission extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'group_role_permission';
	public function role()
    {
        return $this->hasMany('Role');
    }

}


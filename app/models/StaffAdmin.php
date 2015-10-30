<?php
class StaffAdmin extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'staff';

	public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }
	 
}
<?php
class Order extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }
	 
}
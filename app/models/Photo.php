<?php
class Photo extends Eloquent 
{
	
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photos';

	 public function imageable()
    {
        return $this->morphTo();
    }
	 
}
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
class Registered_user extends Model implements \Illuminate\Contracts\Auth\Authenticatable{

	//
	use Authenticatable;
	protected $table = 'registered_user';
	public $timestamps = false;

}

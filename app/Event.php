<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	//
	protected $primaryKey = 'Event_id';
	protected $table = 'event';
	public $timestamps = false;

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model {

	

	protected $fillable = ['sender', 'receiver', 'data'];
	
	
}

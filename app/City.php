<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $fillable = ['name','population', 'fav_spot','url'];

    public static function findByName($name) {
        return Country::where('name', '=', $name)->firstOrFail();
    }
}

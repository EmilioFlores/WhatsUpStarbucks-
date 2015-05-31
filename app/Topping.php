<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model {
	
	protected $fillable = array('cost','name');

	public function personalizations()
    {
        return $this->belongsToMany('App\Personalization');
    }

}

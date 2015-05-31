<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model {

	protected $fillable = array('cost','name');

	public function personalizations()
    {
        return $this->hasMany('App\Personalization');
    }

}

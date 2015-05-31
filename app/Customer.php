<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $fillable = array('name' , 'number');

	public function orders()
    {
        return $this->hasMany('App\Order');
    }

	public function personalizations()
    {
        return $this->hasMany('App\Personalization');
    }

}

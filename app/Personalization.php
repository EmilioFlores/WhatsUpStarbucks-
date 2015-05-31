<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personalization extends Model {

	protected $fillable = array('code','size', 'step', 'transaction');

	public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function milk()
    {
        return $this->belongsTo('App\Milk');
    }
    
    public function modality()
    {
        return $this->belongsTo('App\Modality');
    }

    public function option()
    {
        return $this->belongsTo('App\Option');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function shots()
    {
        return $this->belongsToMany('App\Shot');
    }

    public function syrups()
    {
        return $this->belongsToMany('App\Syrup');
    }

    public function toppings()
    {
        return $this->belongsToMany('App\Topping');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

}

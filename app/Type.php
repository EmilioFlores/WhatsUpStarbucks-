<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

	protected $fillable = array('name');

	public function modality()
    {
        return $this->belongsTo('App\Modality');
    }

    public function options()
    {
        return $this->hasMany('App\Options');
    }

    public function personalizations()
    {
        return $this->hasMany('App\Personalization');
    }	

}

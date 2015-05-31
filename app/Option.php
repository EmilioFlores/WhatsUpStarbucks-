<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

	protected $fillable = array('alto', 'grande', 'name', 'venti');

	public function personalizations()
    {
        return $this->hasMany('App\Personalization');
    }

	public function type()
    {
        return $this->belongsTo('App\Type');
    }


}

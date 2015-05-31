<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model {

	protected $fillable = array('name');

	public function personalizations()
    {
        return $this->hasMany('App\Personalization');
    }	

	public function types()
    {
        return $this->hasMany('App\Type');
    }	

}

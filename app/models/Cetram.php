<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cetram extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'CETRAM';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = array('id', 'NAME', 'ADRESS1','coordinates','distancia','tiempo');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getDistancia()
	{
		return this.distancia;
	}

	public function getTiempo()
  {
		return this.tiempo;
	}

}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

    protected $fillable = ['first_name', 'last_name', 'address','postal_code', 'age', 'phone_no', 'password', 'email', 'active'];


    public function products(){
        return $this->belongsToMany('Product')->withTimestamps();
    }

    public function deliveries(){
        return $this->belongsToMany('Deliveries')->withTimestamps();
    }


    public function getall(){

        return User::all();

    }
}



<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //protected $table = 'adminlogin';
		/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
		
		/* For custom password field rather than using default field 'password' by Laravel */
		public function getAuthPassword()
		{
    	return $this->attributes['password2'];//change the 'password2' with the name of your password field in the table
		}
			
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Orga extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'tel', 'email', 'password', 'adresse', 'postal', 'city', 'country', 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
}
ini_set('xdebug.max_nesting_level', 200); 

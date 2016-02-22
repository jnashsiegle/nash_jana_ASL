<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable; 
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; 
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract; 
;

class User extends Authenticatable

{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lists()
    {
        return $this->hasMany(Lists::Class);
    }

    
}

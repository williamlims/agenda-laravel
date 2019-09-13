<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $fillable =  ['name', 'lastName', 'postalCode', 'city', 'state', 'country', 'email', 'password', 'remember_token'];
}

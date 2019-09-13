<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable =  ['userId', 'name', 'middleName', 'lastName', 'webPage', 'jobTitle', 'gender', 'birthday', 'email', 'phone', 'postalCode', 'city', 'state', 'country',  'street', 'streetNumber'];
}














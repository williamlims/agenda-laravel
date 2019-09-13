<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        if($request){
    	    $user = new Users;
	        $user->name = $request->name;
	        $user->lastName = $request->lastName;
	        $user->postalCode = $request->postalCode;
	        $user->city = $request->city;
	        $user->state = $request->state;
	        $user->country = $request->country;
	        $user->email = $request->email;
	        $user->password = $request->password;
        }

        if($user->save())
        {
            return "User was registered!";
        }
        else 
        {
        	return "Error!";
        }
        
    }
}

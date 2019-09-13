<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        if($request){
    	    $addrs = new Address;
    	    $addrs->contId = $request->contId;
	        $addrs->postalCode = $request->postalCode;
	        $addrs->city = $request->city;
	        $addrs->street = $request->street;
	        $addrs->streetNumber = $request->streetNumber;
	        $addrs->state = $request->state;
	        $addrs->country = $request->country;
        }

        if($addrs->save()){
            return "The new address was registered!";
        }
        else 
        {
        	return "Error!";
        }
      
    }
}

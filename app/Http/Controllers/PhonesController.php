<?php

namespace App\Http\Controllers;

use App\Phones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhonesController extends Controller
{
    public function store(Request $request)
    {
        if($request){
        	
    	    $phone = new Phones;
    	    $phone->contId = $request->contId;
    	    $phone->phone = $request->phoneNumber;
            
        }

        if($phone->save())
        {
            return "The new phone number was registered!";
        }
        else 
        {
        	return "Error!";
        }
      
    }
}

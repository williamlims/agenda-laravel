<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        if($request){
    	    $contact = new Contacts;
    	    $contact->userId= $request->userId;
	        $contact->name = $request->name;
	        $contact->middleName = $request->middleName;
	        $contact->lastName = $request->lastName;
	        $contact->webPage = $request->webPage;
	        $contact->jobTitle = $request->jobTitle;
	        $contact->gender = $request->gender;
	        $contact->birthday = $request->birthday;
	        $contact->email = $request->email;
	        $contact->phone = $request->phone;
	        $contact->postalCode = $request->postalCode;
	        $contact->city = $request->city;
	        $contact->state = $request->state;
	        $contact->country = $request->country;
	        $contact->street = $request->street;
	        $contact->streetNumber = $request->streetNumber;
        }

        if($contact->save()){
            return "Contact was saved!";
        }
        else 
        {
        	return "Error!";
        }
      
    }

}

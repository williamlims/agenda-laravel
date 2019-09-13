<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function login() 
    {
    	return view('login');
    }

    public function newuser()
    {
    	return view('newuser');
    }

    public function contacts() 
    {
    	
    	$cont = DB::table('contacts')->orderBy('name')->get();

    	return view('contacts', compact('cont'));
    }

    public function newcontact() 
    {
    	return view('newcontact');
    }

    public function export()
    {
    	return view('export');
    }

    public function about(Request $request, $id) 
    {
    	$cont = \App\Contacts::find($id);
    	$addr = \App\Address::all()->where('contId', $id);
    	$pho = \App\Phones::all()->where('contId', $id);
    	
    	return view('about', compact('cont', 'addr', 'pho'));
    }

    public function address(Request $request, $id)
    {
    	return view('address', compact('id')); 
    }

    public function phone(Request $request, $id)
    {
    	return view('phone', compact('id'));
    }


}

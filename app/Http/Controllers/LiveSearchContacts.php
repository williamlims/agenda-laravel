<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LiveSearchContacts extends Controller
{
	function find(Request $request)
	{
		$contact = \App\Contacts::all()->where('name', $request);
		return redirect('/searching');
	}

	function fetch(Request $request)
	{
		if($request)
		{
			$data = DB::table("contacts")->where("name", "like", "%{$request->input('query')}%")->get();

			$output = '<ul class="dropdown-menu" style="display:block; padding:5px; position:absolute; width:100%;">';
			foreach($data as $row)
			{
			  $output .= '<li><a href="#" style="a:link text-decoration: none; a:visited text-decoration: none; a:hover text-decoration: underline;color: #000000; a:active text-decoration: none;">'.$row->name.'</a></li>';
			}
			$output .= '</ul>';
			echo $output;
		}
	}
}

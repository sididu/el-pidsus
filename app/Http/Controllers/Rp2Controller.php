<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp2Controller extends Controller
{
		public function index()
		{
		    return view('rp2.rp2_list');
		}
}
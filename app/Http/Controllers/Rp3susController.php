<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp3susController extends Controller
{
		public function index()
		{
		    return view('rp3sus.rp3sus_list');
		}
}

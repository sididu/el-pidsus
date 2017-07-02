<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp3mumController extends Controller
{
		public function index()
		{
		    return view('rp3mum.rp3mum_list');
		}
}
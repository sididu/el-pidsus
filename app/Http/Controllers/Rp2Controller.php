<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp2Controller extends Controller
{
		public function index()
		{
		    return view('rp2.rp2_list');
		}

		public function frp2()
		{
		    return view('rp2.rp2_create');
		}

		public function erp2()
		{
		    return view('rp2.rp2_edit');
		}
}
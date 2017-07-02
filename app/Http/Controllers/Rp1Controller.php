<?php

namespace App\Http\Controllers;

use App\Rp1;
use Illuminate\Http\Request;

class Rp1Controller extends Controller
{
		public function index()
		{
		    return view('rp1.rp1_list');
		}
		public function frp1()
		{
		    return view('rp1.rp1_create');
		}
		public function erp1()
		{
		    return view('rp1.rp1_edit');
		}
}
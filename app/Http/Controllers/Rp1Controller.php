<?php

namespace App\Http\Controllers;

use App\Rp1;
use Illuminate\Http\Request;
use App\Kasus;

class Rp1Controller extends Controller
{
		public function index()
		{
            $cases = Kasus::get();
		    return view('rp1.rp1_list', ['cases' => $cases]);
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

<?php

namespace App\Http\Controllers;

use App\Rp1;
use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;

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

		public function frp1Store(Request $request)
		{
            $case = Kasus::create($request->all());
            $obyek = Obyek::create($request->only('obyek_pidana'));
            $subyek = Subyek::create($request->only('nama_terlapor', 'lembaga'));
            // attach relationship
            $case->obyeks()->attach($obyek);
            $case->subyeks()->attach($subyek);

		    return redirect('/rp1');
		}

		public function erp1()
		{
		    return view('rp1.rp1_edit');
		}
}

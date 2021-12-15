<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EasController extends Controller
{
    public function index()
    {
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	return view('eas.indexeas',['nilaikuliah' => $nilaikuliah]);

    }
public function tambah()
        {
        return view('eas.tambah');

        }
        public function store(Request $request)
    {
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
    return redirect('/eas');
    }
}

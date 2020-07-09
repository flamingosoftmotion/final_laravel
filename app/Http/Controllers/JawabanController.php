<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class JawabanController extends Controller
{
    public function show()
    {
        $data_jawaban = Jawaban::all();
        return view('jawaban.show', compact('data_jawaban'));
    }

    public function index($pertanyaan_id)
    {
        $data = Pertanyaan::findOrFail($pertanyaan_id);
    	return view('jawaban.index', compact('data'));
    }

    public function store(Request $request, $pertanyaan_id)
    {
        $this->validate($request,[
            'isi' => 'required'
        ]);

		$data = Jawaban::create([
			'isi' => $request->get('isi'),
			'pertanyaan_id' => $pertanyaan_id
		]); 

		return redirect('/jawaban')->with('success','Jawaban berhasil terkirim');;   	
    }
}

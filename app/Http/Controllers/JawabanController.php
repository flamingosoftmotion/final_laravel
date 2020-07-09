<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Jawaban;
use App\Pertanyaan;


class JawabanController extends Controller
{
    public function show()
    {
        $cek = User::find(1);
        $data_jawaban = Jawaban::all();
        return view('jawaban.show', compact('data_jawaban','cek'));
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

        $cek = Pertanyaan::find($pertanyaan_id);
        
		$data = Jawaban::create([
            'isi' => $request->isi,
            'user_id' => $cek->user->id,
			'pertanyaan_id' => $cek->id
		]); 

		return redirect('/jawaban')->with('success','Jawaban berhasil terkirim');;   	
    }
}

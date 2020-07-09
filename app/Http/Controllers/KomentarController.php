<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jawaban;
use App\Pertanyaan;

class KomentarController extends Controller
{
    public function show()
    {
        $cek = Jawaban::find(1);
        $data_komentar = Jawaban::all();
        return view('komentar.show', compact('data_komentar','cek'));
    }

    public function index($jawaban_id)
    {
        $data = Jawaban::findOrFail($jawaban_id);
    	return view('komentar.index', compact('data'));
    }

    public function store(Request $request, $jawaban_id)
    {
        $this->validate($request,[
            'komentar' => 'required'
        ]);

        $cek = Jawaban::find($jawaban_id);
        
		$data = Komentar::create([
            'komentar' => $request->komentar,
            'user_id' => $cek->user->id,
			'jawaban_id' => $cek->id
		]); 

		return redirect('/jawaban')->with('success','Jawaban berhasil terkirim');;   	
    }
}

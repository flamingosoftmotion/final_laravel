<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;
use Illuminate\Support\Facades\Redirect;


class PertanyaanController extends Controller
{
    public function index()
    {
    	$data_pertanyaan = Pertanyaan::all();
    	return view('pertanyaan.index', compact('data_pertanyaan'));
    }

    public function create()
    {
    	return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'tags' => 'required'

        ]);

		$data = Pertanyaan::create([
            'judul' => $request->get('judul'),
			'isi' => $request->get('isi'),
            'tags' => $request->get('tags')

		]); 

		return redirect('/pertanyaan')->with('success','Pertanyaan berhasil terkirim');	
    }

    public function delete($pertanyaan_id)
    {
        Pertanyaan::find($pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil dihapus');
        }
    
    public function edit($id)
    {
        $data = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact(['data']));
    }

    public function update(Request $request, $id)
    {
        Pertanyaan::find($id)->update([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi'),
            'tags' => $request->get('tags')
            
        ]); 

        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil terupdate'); 
    }

    public function show($pertanyaan_id)
    {
        $data_jawaban = Jawaban::where('pertanyaan_id', $id_pertanyaan)->get();
        return view('pertanyaan.show', compact(['data_jawaban']));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;
use App\User;

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
        
        $data = new Pertanyaan;
		$data->judul = $request->judul;
		$data->isi = $request->isi;
        $data->tags = $request->tags;
        $data->user_id = 1;
        $data->save();

		return redirect('/pertanyaan')->with('success','Pertanyaan berhasil terkirim');	
    }

    public function delete($pertanyaan_id)
    {
        Pertanyaan::find($pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil dihapus');
        }
    
    public function edit($id)
    {
        $data_pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact('data_pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        $cek = Pertanyaan::find($id);

        Pertanyaan::find($id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tags' => $cek->tags,
            'user_id' => $cek->user->id
        ]); 

        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil terupdate'); 
    }

    public function show($id)
    {
        $data_jawaban = Jawaban::where('pertanyaan_id', $id)->get();
        return view('pertanyaan.show', compact(['data_jawaban']));
    }

//Fungsi untuk menghitung Nilai Poin
    public function count15()
    {
        $user = User::find(1);
        $user->reputation += 10;
        $user->save();
        return redirect('/pertanyaan');
    }

    public function upvote()
    {
        $user = User::find(1);
        $user->reputation += 1;
        $user->save();
        return redirect('/pertanyaan');
    }

    public function downvote()
    {
        $user = User::find(1);
        $user->reputation -= 1;
        $user->save();
        return redirect('/pertanyaan');
    }

}

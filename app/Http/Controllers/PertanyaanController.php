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
        $user = User::find(1);
        $poin = ($user->reputation);
        $data_pertanyaan = Pertanyaan::all();
    	return view('pertanyaan.index', compact(['data_pertanyaan', 'poin']));
    }

    public function create()
    {
        $user = User::find(1);
        $poin = ($user->reputation);

        return view('pertanyaan.create', compact('poin'));
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
        $user = User::find(1);
        $poin = ($user->reputation);

        $data_pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact(['data_pertanyaan','poin']));
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
        $user = User::find(1);
        $poin = ($user->reputation);

        $data_pertanyaan = Pertanyaan::find(1);
        $upvote = ($data_pertanyaan->votes);

        $data_pertanyaan = Pertanyaan::find(1);
        $downvote = ($data_pertanyaan->votes);

        $data_jawaban = Jawaban::where('pertanyaan_id', $id)->get();
        return view('pertanyaan.show', compact(['data_jawaban','poin']));
    }

//Fungsi untuk menghitung Nilai Poin
    public function count15()
    {
        $user = User::find(1);
        $user->reputation += 10;
        $user->save();
        $data_pertanyaan = Pertanyaan::find(1);
        $data_pertanyaan->votes -= 1;
        $data_pertanyaan->save();
        return redirect('/pertanyaan');
    }

    public function upvote()
    {
        $user = User::find(1);
        $user->reputation += 1;
        $user->save();
        $data_pertanyaan = Pertanyaan::find(1);
        $data_pertanyaan->votes += 1;
        $data_pertanyaan->save()->$upvote;
        return redirect('/pertanyaan');
    }

    public function downvote()
    {
        $user = User::find(1);
        $user->reputation -= 1;
        $user->save();
        $data_pertanyaan = Pertanyaan::find(1);
        $data_pertanyaan->votes -= 1;
        $data_pertanyaan->save()->$downvote;
        return redirect('/pertanyaan');
    }



}

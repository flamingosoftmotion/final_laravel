<?php

use \App\Siswa;
use\App\Guru;

function ranking5Besar(){
	$siswa = Siswa::all();
        $siswa->map(function($s)
        {
            $s->rataRataNilai = $s->rataRataNilai(); //melemparkan nilai function ke properti
            return $s;
        });
        $siswa = $siswa->sortByDesc('rataRataNilai')->take(5); //mengambil nilai 5 data dari yg tertinggi.
        return $siswa;
}

function totalSiswa()
{
	return Siswa::count();
}

function totalGuru()
{
	return Guru::count();
}
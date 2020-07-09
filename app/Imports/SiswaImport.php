<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use \App\Siswa;

class SiswaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $key => $row) {
    		if ($key >= 2) {
    			Siswa::create([
		        	'nim' => $row[0],
		        	'nama' => $row[1],
		        	'prodi' => $row[2],
		        	'kelas' => $row[3],
		        	'jenis_kelamin' => $row[4],
		        ]);
    		}
    	}

    }
}

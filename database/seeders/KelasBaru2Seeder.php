<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasBaru2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            
            ['nama_kelas' => 'TI 1A',],
            ['nama_kelas' => 'TI 1B',],
            ['nama_kelas' => 'TI 1C',],
            ['nama_kelas' => 'TI 1D',],
            ['nama_kelas' => 'TI 1E',],
            ['nama_kelas' => 'TI 1F',],
            ['nama_kelas' => 'TI 1G',],
            ['nama_kelas' => 'TI 1H',],
            ['nama_kelas' => 'TI 1I',]
        

           ];

        DB::table('kelas')->insert($kelas);
    }
}


<?php

use Illuminate\Database\Seeder;

class KeretaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta')->insert([
        	'kode' => 'kereta1',
        	'nama' => 'Thomas',
        	'jumlah_gerbong' => '4',
            'kapasitas_gerbong' => '50',
       	]);
    }
}

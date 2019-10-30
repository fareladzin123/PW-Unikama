<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [
                'nama_kategori' => 'Data Diri'
            ],
            [
                'nama_kategori' => 'Data Pendidikan'
            ],
            [
                'nama_kategori' => 'Data Kendaraan'
            ]
        ]);
    }
}

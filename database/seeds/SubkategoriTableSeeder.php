<?php

use Illuminate\Database\Seeder;

class SubkategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subkategoris')->insert([
            [
                'kategori_id' => '1',
                'user_id' => '1',
                'nama_subkategori' => 'KTP'
            ],
            [
                'kategori_id' => '2',
                'user_id' => '1',
                'nama_subkategori' => 'Raport'
            ],
            [
                'kategori_id' => '3',
                'user_id' => '1',
                'nama_subkategori' => 'SIM'
            ],
        ]);
    }
}

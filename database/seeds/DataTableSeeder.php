<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->insert([
            [
                'subkategori_id' => '1',
                'nama_data' => 'Foto KTP',
                'filename' => 'image1.jpeg'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamars')->insert([
            'no_kamar' => 'P001',
            'harga' => '200000', 
            'tipe' => 'Deluxe',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //P000001
        DB::table('produks')->insert([
            'id_kategori'=>1,
            'kode_produk' => "P000001",
            'nama_produk' => "Isotonik",
            'merk'=>"Mizon",
            'harga_beli' => 4000,
            'diskon' => 0,
            'harga_jual' => 5000,
          'stok' => 300,
        ]);
    }
}

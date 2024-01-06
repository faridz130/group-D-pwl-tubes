<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            'kode_member' =>"232391",
            'nama' => "Jane",
            'alamat' => "Jakarta",
            'telepon'=>"0831313282",
            
        ]);
    }
}

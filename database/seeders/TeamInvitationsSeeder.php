<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamInvitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team_invitations')->insert([
            'id_teams' => 1,
            'email' => 'manager@gmail.com',
            'role' => 'Manager',

        ]);
    }
}

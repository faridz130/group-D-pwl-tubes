<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Jayusman',
                'email' => 'jayusman@gmail.com',
                'password' => bcrypt('jayus123'),
                'foto' => '/img/user.jpg',
                'level' => 1
            ],
            [
                'name' => 'Kasir 1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('kasir123'),
                'foto' => '/img/user.jpg',
                'level' => 5
            ],
            [
                'name' => 'Manager 1',
                'email' => 'Manager1@gmail.com',
                'password' => bcrypt('Manager123'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ],
            [
                'name' => 'Supervisor 1',
                'email' => 'Supervisor1@gmail.com',
                'password' => bcrypt('Supervisor123'),
                'foto' => '/img/user.jpg',
                'level' => 3
            ],
            [
                'name' => 'gudang1',
                'email' => 'gudang1@gmail.com',
                'password' => bcrypt('gudang123'),
                'foto' => '/img/user.jpg',
                'level' => 4
            ],
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}

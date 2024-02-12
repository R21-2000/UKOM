<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
                'name' => 'Atma',
                'email' => 'Admin@kyou.com',
                'password' => bcrypt('atm321'),
                'foto' => '/img/admin.jpg',
                'level' => 1
            ],
            [
                'name' => 'Marin',
                'email' => 'marin@kyou.com',
                'password' => bcrypt('mrn123'),
                'foto' => '/img/kasir.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     * @return void
     */
    public function run() {
        $users = [
            [
                'name' => 'Divyanshu Shastri',
                'email' => 'dsanshu@gmail.com',
                'password' => '$2y$10$6veq/0RJdMpiwsoCfXeVAOO/GgrxTlaO6jRphn/Bx2CJOMYz69y8K',
            ],
            [
                'name' => 'Ajay Shrivas',
                'email' => 'ajay@lewebexy.in',
                'password' => '$2y$10$wPNLflWgP2yl2C107Mv0GeuquFW68rqqxxGP9Lv1YMDC1VjNv0bsG',
            ],
            [
                'name' => 'Rishabh Gupta',
                'email' => 'rishabh@lewebexy.in',
                'password' => '$2y$10$n1lpyDIaagzrIFQj4U0KbOMPK9CnY.1O6gX8tDPeU6tNRV6Gk8sUe',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate([
                'email' => $user['email'],
            ], [
                'name' => $user['name'],
                'password' => $user['password'],
            ]);
        }

    }
}

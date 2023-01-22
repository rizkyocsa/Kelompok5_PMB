<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
                'email' => 'admin@mail.com',
                'name' => 'Andrian',
                'password' => bcrypt(12345),
                'roles_id' => 1
            ],
            [
                'email' => 'mahasiswa@mail.com',
                'name' => 'Budi',
                'password' => bcrypt(12345),
                'roles_id' => 2
            ],
            [
                'email' => 'user@mail.com',
                'name' => 'Annisa',
                'password' => bcrypt(12345),
                'roles_id' => 3
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}

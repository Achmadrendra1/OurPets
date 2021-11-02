<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'Achmad Rendra Artama',
                'email' => 'a@ourpets.id',
                'is_admin' => '1',
                'password' => bcrypt('11111111'),
            ],
            [
                'name' => 'Nadya Amanda',
                'email' => 'b@ourpets.id',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Muhammad Reza Assidqi',
                'email' => 'c@ourpets.id',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

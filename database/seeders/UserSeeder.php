<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create(
            [
                'name' => 'Gabriel Roman',
                'email' => 'grbrainless@gmail.com',
                'password' => bcrypt('123456')
            ]
        );
        User::factory(99)->create();
    }
}

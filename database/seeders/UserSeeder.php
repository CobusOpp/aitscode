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
        User::factory()->create([
            'username'  => 'john',
            'name'      => 'John Doe',
            'email'     => 'john@example.com',
            'password'  => bcrypt('password'),

        ]);

        User::factory()->create([
            'username'  => 'cobusopp',
            'name'      => 'Cobus Opperman',
            'email'     => 'cobus@example.com',
            'password'  => bcrypt('password'),

        ]);

        User::factory(10)->create();
    }
}

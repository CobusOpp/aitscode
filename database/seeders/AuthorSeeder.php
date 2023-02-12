<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->create([
            'name'      => 'John Doe',
            'email'     => 'john@example.com',

        ]);

        Author::factory()->create([
            'name'      => 'Cobus Opperman',
            'email'     => 'cobus@example.com',

        ]);

        Author::factory(5)->create();
    }
}

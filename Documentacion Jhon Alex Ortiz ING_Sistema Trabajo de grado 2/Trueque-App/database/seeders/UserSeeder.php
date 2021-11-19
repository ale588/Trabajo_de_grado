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
        User::create([
            'name' => 'Jhon Alex',
            'email' => 'jhon@unisangil.edu.co',
            'password' => bcrypt('jhon12345')

        ])->assignRole('Administrador');
    }
}

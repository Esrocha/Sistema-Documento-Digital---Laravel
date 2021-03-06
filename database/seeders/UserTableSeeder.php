<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Emanoel',
            'email' => 'emanoelrocha.profissional@gmail.com',
            'password'=> bcrypt('123456'),
            'grupo_id' => 1
        ]);
    }
}

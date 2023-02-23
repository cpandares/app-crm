<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'soporte',
            'email'=>'soporte@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        User::create([
            'name'=>'kitdigital',
            'email'=>'kitdigital@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'nines',
            'email'=>'nines@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        User::factory(10)->create();
    }
}

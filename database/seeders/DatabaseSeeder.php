<?php

namespace Database\Seeders;

use App\Http\Controllers\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ComunicationMediumSeeder::class);
        $this->call(ContactsStatusSeeder::class);
        $this->call(ContactSeeder::class);
    }
}

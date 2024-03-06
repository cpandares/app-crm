<?php

namespace Database\Seeders;

use App\Models\ContactStatus ;

use Illuminate\Database\Seeder;

class ContactsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ContactStatus::factory(5)->create();
    }
}

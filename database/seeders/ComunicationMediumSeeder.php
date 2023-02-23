<?php

namespace Database\Seeders;

use App\Models\ComunicationMedium;
use Illuminate\Database\Seeder;

class ComunicationMediumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComunicationMedium::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\LoginLog;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Seeder;

class AccessLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datesRange = \Carbon\CarbonPeriod::create('2023-09-01', '2023-11-31');
       
        foreach ($datesRange as $date) {            
            LoginLog::create([
                'username' => 'soporte',
                'email' => 'soporte@ninesonil.com',
                'ip_address' => '127.0.0.1',
                'created_at' => $date->format('Y-m-d H:i:s'),
            ]);
            LoginLog::create([
                'username' => 'nines',
                'email' => 'nines@ninesonil.com',
                'ip_address' => '127.0.0.1',
                'created_at' => $date->format('Y-m-d H:i:s'),
            ]);
            LoginLog::create([
                'username' => 'estela',
                'email' => 'estela@ninesonil.com',
                'ip_address' => '127.0.0.1',
                'created_at' => $date->format('Y-m-d H:i:s'),
            ]);
    
    
            LoginLog::create([
                'username' => 'sandra',
                'email' => 'sandra@ninesonil.com',
                'ip_address' => '127.0.0.1',
                'created_at' => $date->format('Y-m-d H:i:s'),
            ]);
            LoginLog::create([
                'username' => 'rebeca',
                'email' => 'rebeca@ninesonil.com',
                'ip_address' => '127.0.0.1',
                'created_at' => $date->format('Y-m-d H:i:s'),
            ]);
        }
        

        /* create 25 time soporte, 20 times nines, 15 times estela, 10 times sandra and rebeca */
        //LoginLog::factory(10)->create();


    }
}

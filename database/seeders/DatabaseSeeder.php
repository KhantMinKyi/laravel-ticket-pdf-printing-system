<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Seat;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'name'=>'area',
            'phone'=>'0951231232',
            'email'=>'area@gmail.com',
            'type'=>'admin',
            'retype_password'=>bcrypt('ktsilu1500kts'),
            'password'=>bcrypt('ktsilu1500kts'),
        ]);
        for ($i = 1; $i <= 45; $i++) {     
            Seat::create([
                'seat'=>$i,
            ]);
        }
    }
}

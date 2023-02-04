<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\User;
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
        $user = new User();
        $user->name = 'Shamim';
        $user->email = 'sda.hosain@gmail.com';
        $user->password = bcrypt('password');
        $user->save();

        Customer::factory(100)->create();
    }
}

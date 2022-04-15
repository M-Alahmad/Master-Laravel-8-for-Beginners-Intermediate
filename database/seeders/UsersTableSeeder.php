<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usersCount = max((int)$this->command->ask('How many users would you like?', 20), 1);
         User::factory(1)->defaultUser()->create();
        
        User::factory()
            ->count(20)
            ->create();
    }
}
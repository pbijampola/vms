<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SeedAdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User multiple Users
        // User::truncate();

        // $users=[
        //     [
        //         'name' => 'Super Admin',
        //         'email' => 'superadmin@gmail.com',
        //         'password' => bcrypt('12345678'),
        //     ],
        //         [
        //             'name' => 'Account Admin',
        //         'email' => 'accountadmin@gmail.com',
        //         'password' => bcrypt('87654321'),
        //     ]
        // ];
        // User::insert($users);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('admin');

    }
}

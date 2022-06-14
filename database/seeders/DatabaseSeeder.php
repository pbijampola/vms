<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SeedAdminTable;

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
        $this->call(RoleTableSeed::class);
        $this->call(SeedAdminTable::class);
        $this->call(DepartmentSeedTable::class);


        //factory(App\Models\Employee::class,50)->create();
        \App\Models\Employee::factory()->count(50)->create();
        \App\Models\Invitee::factory()->count(50)->create();
        \App\Models\Department::factory()->count(10)->create();

    }
}

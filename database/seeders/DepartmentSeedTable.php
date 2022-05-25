<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        $departments=[
            [
                'department_name'=>'Information && Technology Department',
                'hod'=>'Zamda Omary',
                'assistant'=>'Khadija Khaled',
                'office_number'=>'#IT234',
            ],
            [
                'department_name'=>'Electronics Department',
                'hod'=>'Zainabu Idriss',
                'assistant'=>'Khaled Msofe',
                'office_number'=>'#ED234',

            ]
        ];
        Department::insert($departments);
    }
}

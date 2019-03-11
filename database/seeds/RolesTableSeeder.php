<?php

use Illuminate\Database\Seeder;
use App\Modules\Roles\Models\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "name"=>"admin",
                "display_name"=>"Admin",
                "description"=>"admin authority"
            ],
            [
                "name"=>"hr",
                "display_name"=>"HR",
                "description"=>"HR authority"
            ],
            [
                "name"=>"employee",
                "display_name"=>"Employee",
                "description"=>"Employee authority"
            ]
        ];

        Roles::insert($roles);
    }
}

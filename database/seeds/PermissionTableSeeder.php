<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            [

        		'name' => 'user-list',

        		'display_name' => 'Display user Listing',

        		'description' => 'See only Listing Of user'

        	],

        	[

        		'name' => 'user-create',

        		'display_name' => 'Create user',

        		'description' => 'Create New user'

        	],

        	[

        		'name' => 'user-edit',

        		'display_name' => 'Edit user',

        		'description' => 'Edit user'

        	],

        	[

        		'name' => 'user-delete',

        		'display_name' => 'Delete user',

        		'description' => 'Delete user'

            ],
        	[

        		'name' => 'role-list',

        		'display_name' => 'Display Role Listing',

        		'description' => 'See only Listing Of Role'

        	],

        	[

        		'name' => 'role-create',

        		'display_name' => 'Create Role',

        		'description' => 'Create New Role'

        	],

        	[

        		'name' => 'role-edit',

        		'display_name' => 'Edit Role',

        		'description' => 'Edit Role'

        	],

        	[

        		'name' => 'role-delete',

        		'display_name' => 'Delete Role',

        		'description' => 'Delete Role'

        	],

        	[

        		'name' => 'employee-list',

        		'display_name' => 'Display employee Listing',

        		'description' => 'See only Listing Of employee'

        	],

        	[

        		'name' => 'employee-create',

        		'display_name' => 'Create employee',

        		'description' => 'Create New employee'

        	],

        	[

        		'name' => 'employee-edit',

        		'display_name' => 'Edit employee',

        		'description' => 'Edit employee'

        	],

        	[

        		'name' => 'employee-delete',

        		'display_name' => 'Delete employee',

        		'description' => 'Delete employee'

        	],
          [

        		'name' => 'post-list',

        		'display_name' => 'Display post Listing',

        		'description' => 'See only Listing Of post'

        	],

        	[

        		'name' => 'post-create',

        		'display_name' => 'Create post',

        		'description' => 'Create New post'

        	],

        	[

        		'name' => 'post-edit',

        		'display_name' => 'Edit post',

        		'description' => 'Edit post'

        	],

        	[

        		'name' => 'post-delete',

        		'display_name' => 'Delete post',

        		'description' => 'Delete post'

            ]
        ];

        DB::table('permissions')->insert($permissions);

    }
}

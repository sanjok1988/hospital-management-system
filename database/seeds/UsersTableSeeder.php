<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin',
            'email' => 'admin@gmail.com',            
            'password' => bcrypt('admin')],

            ['name' => 'HR',
            'email' => 'hr@gmail.com',            
            'password' => bcrypt('admin')],

            ['name' => 'Employee',
            'email' => 'employee@gmail.com',            
            'password' => bcrypt('admin')]
        ];

        DB::table('users')->insert($users);

    }
}

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
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@example.com',
        	'jabatan' => 'admin',
            'password' => bcrypt('admin'),
            'id_privilege' => '1',
       	]);

        DB::table('users')->insert([
            'name' => 'cs',
            'email' => 'cs@example.com',
            'jabatan' => 'CS',
            'password' => bcrypt('cs'),
            'id_privilege' => '2',
        ]);


        // DB::table('users')->insert([
        // 	'name' => 'manusia',
        // 	'email' => 'human@example.com',
        //     'jabatan' => 'CS',
        // 	'password' => bcrypt('apanya'),
       	// ]);
    }
}

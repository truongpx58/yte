<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
	            'roleName' => 'admin'
        	],
        	[
	            'roleName' => 'patient'
        	],
        	[
	            'roleName' => 'doctor'
        	]
    	];
    	foreach ($roles as $key => $value) {
    		DB::table('roles')->insert($value);
    	}
    }
}

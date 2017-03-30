<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles = [
    		[
	            'userId' => 1,
	            'roleId' => 1
        	],
        	[
	            'userId' => 1,
	            'roleId' => 2
        	],
        	[
	            'userId' => 2,
	            'roleId' => 2
        	],
        	[
	            'userId' => 3,
	            'roleId' => 3
        	],
    	];
    	foreach ($userRoles as $key => $value) {
    		DB::table('user_roles')->insert($value);
    	}
    }
}

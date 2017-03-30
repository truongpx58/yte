<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		[
	            'taiKhoan' => 'truongpx',
	            'password' => Hash::make('secret')
        	],
        	[
	            'taiKhoan' => 'doctor',
	            'password' => Hash::make('secret')
        	],
        	[
	            'taiKhoan' => 'patient',
	            'password' => Hash::make('secret')
        	]
    	];
    	foreach ($users as $key => $value) {
    		DB::table('users')->insert($value);
    	}
        
    }
}

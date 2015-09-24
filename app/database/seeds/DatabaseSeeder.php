<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'username' => 'admin',
			'password' => Hash::make('123789'),
			'email' => 'admin@ltv.com.vn',
			'role' => 'admin')
        );

        User::create(array(
        	'username' => 'lucduong',
        	'password' => Hash::make('123789'),
        	'email' => 'luc@ltv.com.vn',
        	'role' => 'user')
        );
    }

}
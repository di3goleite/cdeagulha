<?php

class UserTableSeeder extends Seeder{

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'name'		=> 'Diego Leite',
			'username'	=> 'diego',
			'email'		=> 'diego@test.com',
			'password'	=> Hash::make('awesome'),
		));

		User::create(array(
			'name'		=> 'Teste',
			'username'	=> 'test',
			'email'		=> 'test@test.com',
			'password'	=> Hash::make('test'),
		));
	}
}
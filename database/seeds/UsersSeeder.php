<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\User::insert([
            [
              'id'  			  => 1,
              'name'  			  => 'user satu',
              'role'			  => 'user',
              'username'		  => 'usersatu',
              'avatar'        => NULL,
              'email' 			  => 'usersatu@gmail.com',
              'email_verified_at' => NULL,
              'password'		  => bcrypt('rahasia'),
              'reputation'    => 0,
              'remember_token'	  => Str::random(60),
              'created_at'        => \Carbon\Carbon::now(),
              'updated_at'        => \Carbon\Carbon::now()
            ],
            [
              'id'  			  => 2,
              'name'  			  => 'user dua',
              'role'			  => 'user',
              'username'		  => 'userdua',
              'avatar'        => NULL,
              'email' 			  => 'userdua@gmail.com',
              'email_verified_at' => NULL,
              'password'		  => bcrypt('rahasia'),
              'reputation'    => 0,
              'remember_token'	  => Str::random(60),
              'created_at'        => \Carbon\Carbon::now(),
              'updated_at'        => \Carbon\Carbon::now()
            ],
            [
              'id'  			  => 3,
              'name'  			  => 'user tiga',
              'role'			  => 'user',
              'username'		  => 'usertiga',
              'avatar'        => NULL,
              'email' 			  => 'usertiga@gmail.com',
              'email_verified_at' => NULL,
              'password'		  => bcrypt('rahasia'),
              'reputation'    => 0,
              'remember_token'	  => Str::random(60),
              'created_at'        => \Carbon\Carbon::now(),
              'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);
    }
}

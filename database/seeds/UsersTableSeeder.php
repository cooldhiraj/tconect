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
       $user =  App\User::create([

        'name'     => 'dhiraj kahar',
        'email'    => 'dhirajkahar7@gmail.com',
        'password' => bcrypt('password'),
        'admin'    => 1

        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar'  => 'uploads/avatar/smith.jpg',
           'about'  => 'I am dhiraj',
           'facebook' => 'facebook',
           'youtube' => 'youtube' 
        ]);
    }
}

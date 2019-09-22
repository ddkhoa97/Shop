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
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'dangkhoa123',
        	'email' =>'dangkhoa123@gmail.com',
        	'password' => bcrypt('123123123')
        ]);
    }
}

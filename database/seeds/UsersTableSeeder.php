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
            'role_id'   => '1',
            'name'  =>   'MD.Habib',
            'country'  =>   'Bangladesh',
            'state'  =>   'Dhaka',
            'gender'  =>   1,
            'date_of_birth'  => 2019-03-22,
            'username'  =>  'habib',
            'email'  =>  'habibmd007@gmail.com',
            'password'  =>bcrypt('11111111'),
                  ]);
       
        DB::table('users')->insert([
            'role_id'   => '2',
            'name'  =>   'MD.User',
            'username'  =>  'user',
            'email'  =>  'user@gmail.com',
            'password'  =>bcrypt('11111111'),
                    ]);
    }

}

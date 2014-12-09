<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 11/28/2014
 * Time: 2:37 PM
 */

class UserTableSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();
        User::create(array(
            'name'=> 'zahid',
            'username'=> 'zaziz',
            'email'=>'zahids30@gmail.com',
            'password'=>Hash::make('awesome'),

        ));
    }
}
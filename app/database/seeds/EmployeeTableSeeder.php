<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 12/3/2014
 * Time: 5:09 PM
 */

class EmployeeTableSeeder extends Seeder{

    public function run(){
        DB::table('employees')->delete();
        Employee::create(array(
            'firstName'=> 'john',
            'lastName'=> 'smith',
            'email'=>'smith@gmail.com',
        ));
    }
}
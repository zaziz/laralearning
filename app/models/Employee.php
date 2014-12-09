<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 12/3/2014
 * Time: 3:18 PM
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Employee extends Eloquent  implements UserInterface,RemindableInterface {

    use UserTrait,RemindableTrait;

    protected $table = 'employees';
    protected $fillable = array('firstName', 'lastName','email');

}
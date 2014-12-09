<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// connect with corresponding model.
Route::model('employee', 'Employee');
//route for index page, call index method of controller
Route::get('/', 'EmployeesController@index');
//route for create employee page.
Route::get('/create', 'EmployeesController@create');
//route for edit employee page.
Route::get('/edit/{employee}', 'EmployeesController@edit');
//route for delete emplooyee page
Route::get('/delete/{employee}', 'EmployeesController@delete');
// route for form submission call handleCreate method.
Route::post('/create', 'EmployeesController@handleCreate');
//route to handle edit form submission
Route::post('/edit', 'EmployeesController@handleEdit');
//route to handle delete.
Route::post('/delete', 'EmployeesController@handleDelete');



/*
Route::get('/',function(){
   return View::make('pages.home',array('page'=>'Home','title'=> 'Home Page'));


});
*/
Route::get('/home',function(){
    return View::make('pages.home',array('page'=>'Home','title'=> 'Home Page'));


});

Route::get('/about',function(){

     return View::make('pages.about',array('page'=>'About','title'=> 'About Page'));

    });

Route::get('/projects',function(){

    return View::make('pages.projects',array('page'=>'Projects','title'=> 'Project Page'));
});
Route::get('/contact',function(){

    return View::make('pages.contact',array('page'=>'Contact','title'=> 'Contact Page'));
});

Route::get('login',array('uses'=>  'HomeController@showLogin'));
Route::post('login',array('uses'=> 'HomeController@doLogin'));
Route::get('logout',array('uses'=> 'HomeController@doLogout'));




//Route::get('/', function()
//{
//	return View::make('hello');
//});
Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('zahid', function()
{
	return View::make('zahid');
});
Route::get('myPage/{id}','MyController@net');


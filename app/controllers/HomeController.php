<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
    public function showLogin()
    {

        return View::make('login');
    }
    public function doLogin()
    {

       // echo Input::get('email');
       // echo "</br>";
       // echo Input::get('password');
       // exit;
        //echo Input::get('country');
        //exit;
        $rules = array(
            'email'=> 'required|email',
            'password' => 'required|alphaNum|min:3',
            'country' => 'required|min:5'
        );

        $validator = Validator::make(Input::all(),$rules);
       //echo "reach";
       // exit;
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else{
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

        }
        if(Auth::attempt($userdata)){


            echo "Success!";
           echo Auth::user()->email;
            return Redirect::to('login')
                ->with('flash_notice', 'You are successfully logged in.');
        }else{

            return Redirect::to('login')
                ->with('flash_error','Your Email/Password is Wrong');

        }


    }
    // app/controllers/HomeController.php
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }

            //$queries = DB::getQueryLog();
           // $last_query = end($queries);
           // print_r($last_query);


}

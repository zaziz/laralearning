<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 11/28/2014
 * Time: 5:04 PM
 */
 ?>
 <!DOCTYPE html>
 <html>
 <head lang="en">
     <meta charset="UTF-8">
     <title>Please Login</title>
 </head>
 <body>
     @if(Session::has('flash_error'))
         <div id="flash_error">{{Session::get('flash_error')}}</div>
     @endif

    @if(Auth::check())



        <p>
       You are Logged in As  {{ Auth::user()->username }}

       <br>
        <a href="logout">Logout</a>
        </p>
    @else
     {{Form::open(array('url'=>'login'))}}
         <h1>Login</h1>
         <p>
             {{$errors->first('email')}}
             {{$errors->first('password')}}
             {{$errors->first('country')}}
         </p>
         <p>
             {{ Form::label('email', 'Email Address') }}
             {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}

         </p>
         <p>

             {{ Form::label('password', 'Password') }}
             {{ Form::password('password') }}

         </p>
         <p>
            {{Form::label('country','Country')}}
            {{Form::text('country')}}

         </p>
         <p>
             {{Form::submit('Submit')}}


         </p>
          {{Form::close()}}
   @endif

 </body>
  </html>

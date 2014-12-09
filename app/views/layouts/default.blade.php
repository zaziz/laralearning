<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 11/27/2014
 * Time: 1:48 PM
 */
 ?>
 <!doctype html>
 <html>
 <head>
 	@include('includes.head')
 </head>
 <body>
 <div class="container">

 	<header class="row">
 		@include('includes.header')
 	</header>

 	<div id="main" class="row">

 			@yield('content')

 	</div>

 	<footer class="row">
 		@include('includes.footer')
 	</footer>

 </div>
 </body>
 </html>

<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 11/27/2014
 * Time: 1:50 PM
 */
 ?>
 <div class="navbar">
 	<div class="navbar-inner">
 		<ul class="nav">
 			<li><a href="home" @if($page == 'Home') class="active" @endif>Home</a></li>
 			<li><a href="about" @if($page == 'About') class="active" @endif >About</a></li>
 			<li><a href="projects" @if($page == 'Projects') class="active" @endif>Projects</a></li>
 			<li><a href="contact" @if($page == 'Contact') class="active" @endif>Contact</a></li>
 		</ul>
 	</div>
 </div>

<?php

function home_action()
{
	include '../views/home.php' ;
}

function damier_action($nb){
	define_damier($nb);
	include '../views/damier.php' ;
}

function triangle_action($nb){
	define_triangle($nb);
	include '../views/triangle.php' ;
}
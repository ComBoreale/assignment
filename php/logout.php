<?php

session_start();

if(isset($_SESSION['USERID']))
{
	unset($_SESSION['USERID']);

}

header("Location: http://ceto.murdoch.edu.au/~33207069/login/assignment-master/assignment-master/home4.html");
die;
<?php
session_start();
header("Access-Control-Allow-Origin: *");

if ($_POST) {
    $NAME = $_POST['NAME'];
    $PASS = $_POST['PASS'];

   $con = new mysqli('localhost','X33207069','X33207069','X33207069');
    if ($con != NULL) {
        $hashPass = $con['PASS'];
        $passCheck = password_verify($PASS, $hashPass);
        if ($passCheck == TRUE) {
            $_SESSION['USER'] = $con['USER'];
            header("Location: assignment-master/assignment-master/home4.html ");
        }else
	echo "issue here";  
    }else
	echo "another issue";
    
else {
        return 0;
    }
}
?>
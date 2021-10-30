  <?php
    $NAME = $_POST['NAME'];
    $PASS = $_POST['PASS'];

    // Making Connection with database

    $con = new mysqli('localhost','X33207069','X33207069','X33207069');
    if ($con -> connect_error) {
    die('Connection failed :'.$conn -> connect_error);
    }
    else{
   
 $sql = "INSERT INTO USER(NAME,PASS)
    values('$NAME','$PASS')";

if ($con->query($sql) === TRUE) {
    header("location: http://ceto.murdoch.edu.au/~33207069/login/assignment-master/assignment-master/home4.html");
	die();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

     }
?>

*/
if session["NAME"] == NULL)
{
login_btn.visible = true;
logout_btn.visible = false;
}
else // this solved the issue
{
login_btn.visible = false;
logout_btn.visible = true;
} */
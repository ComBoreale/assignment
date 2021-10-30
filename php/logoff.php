session_start();
if ($_POST) {
    unset($_SESSION['USER']);
	exit();
    session_destroy();

    if(session_destroy()) {
        header("Location: "http://ceto.murdoch.edu.au/~33207069/login/assignment-master/assignment-master/home4.html");
    }
}
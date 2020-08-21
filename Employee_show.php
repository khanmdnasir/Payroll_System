<?php

session_start();
if(isset($_SESSION['Email']))
{
    echo "Hello! ".$_SESSION['Email'];
    echo "<br> Welcome to the portal.";
    echo "<br><a href='myprofile.php'>Myprofile</a>";
    echo "<br><a href='Employee_logout.php'>Logout</a>";
}
else
{
    header("location: Employee_login.php");
}

?>
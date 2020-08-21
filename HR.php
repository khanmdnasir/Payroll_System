<?php
   session_start();
   if(isset($_SESSION['username']) && $_SESSION['Email'] && $_SESSION['Mobile'] && $_SESSION['DOB']) {

    echo "Welcome ".$_SESSION['username']." You Have been Successfully Logged in!<br>";
    echo "Your username is: ". $_SESSION['Email']."<br>";
    echo "Please Logout and Log back in.<br>";
    echo "<a href='HR_logout.php'>Logout</a";
   }
   else
   {
       header("location: HR_login.php");
   }

?>
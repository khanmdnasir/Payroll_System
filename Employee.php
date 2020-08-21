<?php
   session_start();
   if(isset($_SESSION['Name']) && $_SESSION['Email'] && $_SESSION['Mobile'] && $_SESSION['DOB'] && $_SESSION['Address'] ) {

    echo "Welcome ".$_SESSION['Name']." You Have been Successfully Logged in!<br>";
    echo "Your username is: ". $_SESSION['Email']."<br>";
    echo "Please Logout and Log back in.<br>";
    echo "<a href='Employee_logout.php'>Logout</a";
   }
   else
   {
       header("location: Employee_login.php");
   }

?>
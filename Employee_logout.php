<?php
   session_start();
   if(isset($_SESSION['Email']))
   {
       session_destroy();
       echo "You Have been logged out!";
       echo "<a href='Employee_login.php'>Login</a>";
   }
   else{
       header("location: Employee_login.php ");
   }

  ?> 
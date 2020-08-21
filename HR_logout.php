<?php
   session_start();
   if(isset($_SESSION['Email']))
   {
       session_destroy();
       echo "You Have been logged out!";
       echo "<a href='HR_login.php'>Login</a>";
   }
   else{
       header("location: HR_login.php ");
   }

  ?> 
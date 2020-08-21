<?php

$db=mysqli_connect("localhost","root","","payrollSystem");
if(isset($_POST['Login']))
{
    session_start();
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);

    $sql="SELECT * FROM Employee WHERE Email='$Email' AND Password='$Password'";
    $verify=mysqli_query($db, $sql);

    if(mysqli_num_rows($verify) == 1)
    {
        $_SESSION['Email']=$Email;
        $_SESSION['Password']=$Password;
        header("location: Employee_show.php");
    }
    else
    {
        echo "Sorry! Incorrect email/password combination.";
    }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Payroll System</title>
  </head>

  <body>
  <a href="HR_login.php">HR Login</a>
    <h1>Employee Login</h1>

    <form method="POST" action="Employee_login.php">
      <table>
        
        <tr>
        <td>Email</td> 
        <td><input type="email" name="Email" required ></td>
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="Password" name="Password" required ></td>  
        </tr>

        <tr>
          <td><input type="submit" name="Login" value="Login" required></td>  
        </tr>
          
      </table>
      
    </form>
    <a href="Employee_signup.php">Signup</a>
  </body>

</html>
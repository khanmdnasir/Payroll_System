<?php

$db=mysqli_connect("localhost","root","","payrollSystem");
if(isset($_POST['Login']))
{
    session_start();
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);

    $sql="SELECT * FROM HR WHERE Email='$Email' AND Password='$Password'";
    $verify=mysqli_query($db, $sql);

    if(mysqli_num_rows($verify) == 1)
    {
        $_SESSION['Email']=$Email;
        $_SESSION['Password']=$Password;
        header("location: viewemp.php");
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
    <a href="Employee_login.php">Employee Login</a>
    <h1>HR Login</h1>

    <form method="POST" action="HR_login.php">
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
    <a href="HR_signup.php">Signup</a>
  </body>

</html>
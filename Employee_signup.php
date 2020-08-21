<?php
  
  $db=mysqli_connect("localhost","root","","payrollSystem");
  if(isset($_POST['Submit']))
  {
      session_start();
      $Name=$_POST['Name'];
      $Email=$_POST['Email'];
      $Mobile=$_POST['Mobile'];
      $DOB=$_POST['DOB'];
      $Address=$_POST['Address'];
      $Password=md5($_POST['Password']);

      $sql="INSERT INTO Employee(Name,Email,Mobile,DOB,Address,Password) values('$Name','$Email','$Mobile',' $DOB','$Address','$Password')";
      mysqli_query($db, $sql);
      $_SESSION['Name']=$Name;
      $_SESSION['Email']=$Email;
      $_SESSION['Mobile']=$Mobile;
      $_SESSION['DOB']=$DOB;
      $_SESSION['Address']=$Address;
      header("location: Employee.php");
  }
  else
  {
      echo "Please Complete The Form";
  }

?>





<!DOCTYPE html>
<html>
  <head>
    <title>Payroll System</title>
  </head>

  <body>
  <a href="Employee_login.php">Login</a>
    <h1>Employee Signup</h1>

    <form method="POST" action="Employee_signup.php">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="Name" required ></td>
        </tr> 
        
        <tr>
        <td>Email</td> 
        <td><input type="email" name="Email" required ></td>
        </tr>

        <tr>
        <td>Mobile</td> 
        <td><input type="tel" name="Mobile"  required ></td>
        </tr>
        
        <tr>
        <td>DOB</td>
        <td><input type="date" name="DOB" required ></td>  
        </tr>

        <tr>
        <td>Address</td>
        <td><input type="text" name="Address" required ></td>  
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="Password" name="Password" required ></td>  
        </tr>

        <tr>
          <td><input type="submit" name="Submit" value="Sign Up" required></td>  
        </tr>
          
      </table>
    </form>
  </body>

</html>
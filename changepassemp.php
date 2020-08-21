<?php

$conn=mysqli_connect("localhost","root","","payrollSystem");
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.Password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['Password']){
            $sql = "UPDATE `employee` SET `Password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
            header("Location:myprofile.php?id=$id"); 
          
        }

        else{
          
        }

  
}
?>




<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<html>
<head>
  <title>Change Password</title>
  
</head>
<body>
  
  
  
  

            <a href="Employee_show.php">Home</a>
                <div >
                    <h2 >Update Password</h2>
                    <form id = "registration" action="changepassemp.php" method="POST">

                          
                                <div >
                                  <p>Old Password</p>
                                     <input type="Password" name = "oldpass" required >
                                </div>
                            
                            
                                <div >
                                  <p>New Password</p>
                                    <input  type="Password" name="newpass" required>
                                </div>
                            
                        

                        
                        <div >
                            <button  type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    
            </div>
        


</body>
</html>

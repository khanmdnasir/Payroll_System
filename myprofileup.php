<?php

$conn=mysqli_connect("localhost","root","","payrollSystem");
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $name = mysqli_real_escape_string($conn, $_POST['firstName']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $contact = mysqli_real_escape_string($conn, $_POST['bithday']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `employee` SET `Name`='$firstname',`Email`='$email',`Mobile`='$contact',`DOB`='$birthday',`Address`='$address' WHERE id=$id");

header("Location:myprofile.php?id=$id");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $email = $res['email'];
  $contact = $res['contact'];
  $birthday = $res['bithday'];
  $address = $res['address'];
 
  // $salary = $res['salary'];
}
}

?>

<html>
<head>
  <title>Update Profile</title>

</head>
<body>
  
<a href="Employee_show.php">Home</a>
                <div >
                    <h2 >Update Employee Info</h2>
                    <form id = "registration" action="myprofileup.php" method="POST">

                    <div >
                          <p>Name</p>
                            <input  type="text"  name="firstName" value="<?php echo $firstname;?>">
                        </div>

                        <div >
                          <p>Email</p>
                            <input  type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                       
                        
                        <div>
                          <p>Contact</p>
                            <input type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        <div>
                          <p>Contact</p>
                            <input type="text" name="birthday" value="<?php echo $birthday;?>">
                        </div>

                       

                        
                         <div>
                          <p>Address</p>
                            <input type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                       
                        
                        <div >
                            <button type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    <br>
                    <button onclick="window.location.href = 'changepassemp.php?id=<?php echo $id?>';">Change Password</button>
                </div>
    


</body>
</html>

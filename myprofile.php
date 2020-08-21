<?php

$conn=mysqli_connect("localhost","root","","payrollSystem");



  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  
  $result = mysqli_query($conn, $sql);
 
 
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $email = $res['email'];
  $contact = $res['contact'];
  
  $birthday = $res['birthday'];
  $address = $res['address']; 
  
}
}

?>

<html>
<head>
  <title>My Profile</title>
 
</head>
<body>
  <div>
    
  <a href="Employee_show.php">Home</a>
                <div>
                    <h2>My Info</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >


                        <div>
                            <div>
                                <div>
                                  <p> Name</p>
                                     <input type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                                </div>
                            </div>
                            
                        </div>





                        <div>
                          <p>Email</p>
                            <input type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                        <div>
                            <div>
                                <div>
                                  <p>Mobile</p>
                                    <input type="number" name="contact" value="<?php echo $contact;?>" readonly>
                                   
                                </div>
                            </div>
                            <div>
                                <div>
                                  <p>Date of Birth</p>
                                  <input type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                          <p>Address</p>
                            <input type="text" name="address" value="<?php echo $address;?>" readonly>
                        </div>

                        
                        <div>
                            <button  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
 
</body>
</html>

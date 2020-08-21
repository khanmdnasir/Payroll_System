<?php
$db=mysqli_connect("localhost","root","","payrollSystem");
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($db, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['Name']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$mobile = mysqli_real_escape_string($conn, $_POST['Mobile']);
	$dob = mysqli_real_escape_string($conn, $_POST['DOB']);
	$address = mysqli_real_escape_string($conn, $_POST['Address']);
	
	


$result = mysqli_query($db, "UPDATE `employee` SET `Name`='$firstname',`email`='$Email',`Mobile`='$mobile',`DOB`='$dob',`Address`='$address' WHERE id=$id");
	header("Location:viewemp.php");
	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($db, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['Name'];
	$email = $res['Email'];
	$mobile = $res['Mobile'];
	$dob = $res['DOB'];
	$address = $res['Address'];
	
	
}
}

?>

<html>
<head>
	<title>View Employee </title>
	
</head>
<body>
	
	

    <div >
        <h2 >Update Employee Info</h2>
        <form id = "registration" action="edit.php" method="POST">

            
                <div >
                    <div >
                            <input type="text" name="Name" value="<?php echo $firstname;?>" >
                    </div>
                </div>
                
            





            <div>
                <input type="email"  name="Email" value="<?php echo $email;?>">
            </div>
            
                <div>
                    <div>
                        <input type="text" name="Mobile" value="<?php echo $mobile;?>">
                        
                    </div>
                </div>
                <div>
                    <div>
                        <input type="text" name="DOB" value="<?php echo $dob;?>">
                    </div>
                </div>
            
            
            <div>
                <input type="text" name="Address" value="<?php echo $address;?>">
            </div>

            
            
            <div>
                <button type="submit" name="update">Submit</button>
            </div>
            
        </form>
    </div>
</body>
</html>

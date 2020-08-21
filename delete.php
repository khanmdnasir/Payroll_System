<?php
//including the database connection file

$db=mysqli_connect("localhost","root","","payrollSystem");
//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($db, "DELETE FROM employee WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewemp.php");
?>


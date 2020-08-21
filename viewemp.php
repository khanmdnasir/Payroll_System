<?php

$db=mysqli_connect("localhost","root","","payrollSystem");
$sql = "SELECT * from `employee`";

//echo "$sql";
$result = mysqli_query($db, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | NK Compnay</title>
	
</head>
<body>
	
	<a href="HR_logout.php">Logout</a>
		<table>
			<tr>

				<th>Emp. ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>DOB</th>
				
				<th>Address</th>
				
				<th>Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['Name']."</td>";
					
					echo "<td>".$employee['Email']."</td>";
					echo "<td>".$employee['Mobile']."</td>";
					echo "<td>".$employee['DOB']."</td>";
					
					echo "<td>".$employee['Address']."</td>";
					

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>
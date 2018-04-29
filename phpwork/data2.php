<html>
	<head>
		<title>My Database</title>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$db="mydb";
			$conn=mysqli_connect($servername,$username,$password,$db);
			if(!$conn)
				echo "Error".mysqli_connect_error;
			else
				echo "Connected successfully";
			$sql="insert into emp (firstname,lastname,password) values ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["pass"]."')";
			if($conn->query($sql)==true)
			{
				echo "value inserted";
			}
			else
			{
				echo "values are not inserted";
			}
		?>
			
	</body>
</html>
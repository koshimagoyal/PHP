<html>
	<head>
		<title>My Database</title>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$conn=mysqli_connect($servername,$username,$password);
			if(!$conn)
				echo "Error".mysqli_connect_error;
			else
				echo "Connected successfully";
			$sql="create database mydb";
			if(mysqli_query($conn,$sql))
			{
				echo "Database Created";
			}
			else
			{
				echo "Database not created";
			}
		?>
			
	</body>
</html>
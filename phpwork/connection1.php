<html>
	<head>
		<title>My Database</title>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$database="mydb";
			$conn=mysqli_connect($servername,$username,$password,$database);
			if(!$conn)
				echo "Error".mysqli_connect_error;
			else
				echo "Connected successfully";
		?>
			
	</body>
</html>
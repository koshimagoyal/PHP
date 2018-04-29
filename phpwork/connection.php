<html>
	<head>
		<title>Database</title>
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
		?>
			
	</body>
</html>
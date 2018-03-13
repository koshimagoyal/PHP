<html>
	<head>
		<title>Make table</title>
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
			$sql="create table emp(id int(6) unsigned AUTO_INCREMENT primary key, firstname varchar(50) not null, lastname varchar(50) not null);";
			if($conn->query($sql)==TRUE)
			{
				echo "Table created successfully";
			}
			else
			{
				echo "Table is not created";
			}
			$sql="insert into emp(firstname,lastname) values ('koshima','goyal');";
			if($conn->query($sql)==TRUE)
			{
				echo "Values inserted successfully";
			}
			else
			{
				echo "Value is not inserted";
			}
			$sql="select * from emp;";
			
		?>
			
	</body>
</html>
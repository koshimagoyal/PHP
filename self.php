<html>
<body>
	<form name="form" method="post" action="self.php">
	Name: <input type="text" value="username" name="username">
	<br><br>
	<input type="submit" name="submit" value="login">
	</form>
	<?php
	if(isset($_POST["submit"]))
	{
		$username=$_POST["username"];
		if($username=="Hello")
		{
			echo "You have entered";
		}
		else 
		{
			echo "try again";
		}
	}
	?>
</body>
</html>
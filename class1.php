<html> 
	<head> 
		<title>Class 1</title> 
	</head>
	<body>     
		<?php 
			class person
			{
				var $name;
				var $age;
				function set_name($nam)
				{
					$this->name=$nam;
				}
				function set_age($age)
				{
					$this->age=$age;
				}
				function get_name()
				{
					return $this->name;
				}
				function get_age()
				{
					return $this->age;
				}
			}
		?> 
	</body> 
</html>
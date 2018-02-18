<html> 
	<head> 
		<title>Class 4</title> 
	</head>
	<body>     
		<?php 
			class place
			{
				var $name;
				var $place;
				function __construct( $par1,$par2)
				{ 
   					$this->name = $par1; 
					$this->place=$par2;
				} 
				function get_name()
				{
					return $this->name;
				}
				function get_place()
				{
					return $this->place;
				}
			}
		?> 
	</body> 
</html>
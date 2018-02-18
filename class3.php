<html> 
	<head> 
		<title>Class 3</title> 
	</head>
	<body>     
		<?php 
			class pet
			{
				var $name;
				function __construct( $par1)
				{ 
   					$this->name = $par1; 
				} 
				function get_pet()
				{
					return $this->name;
				}
			}
		?> 
	</body> 
</html>
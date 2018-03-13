<html> 
	<head> 
		<title>Class 5</title> 
	</head>
	<body>     
		<?php 
			class sibling
			{
				var $bro;
				var $sis;
				function __construct( $bro,$sis)
				{ 
   					$this->bro = $bro; 
					$this->sis = $sis;
				} 
				function get_bro()
				{
					return $this->bro;
				}
				function get_sis()
				{
					return $this->sis;
				}
			}
		?> 
	</body> 
</html>
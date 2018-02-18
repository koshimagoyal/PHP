<html> 
	<head> 
		<title>Class 2</title> 
	</head>
	<body>     
		<?php 
			class book
			{
				var $name;
				var $price;
				function set_details($name,$price)
				{
					$this->name=$name;
					$this->price=$price;
				}
				function get_bname(){
					return $this->name;
				}
				function get_bprice(){
					return $this->price;
				}
			}
		?> 
	</body> 
</html>
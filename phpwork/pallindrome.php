<html>
	<head>
		<title>Pallindrome of String</title>
	</head>
<body>
	<?php
		$a="mallayallam";
		$b=strrev($a);
		echo "Original String is ".$a;
		?><br><?php
		echo "Reverse of String is ".$b;
		if($a==$b)
		{
			echo "<br>Pallindrome";
		}
		else
		{
			echo "<br>Not Pallindrome";
		}
	?>
</body>
</html>
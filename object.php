<html>
	<head>
		<title>Classes & Objects</title>
	</head>
	<body>
		<?php
			include("class1.php");
			include("class2.php");
			include("class3.php");
			include("class4.php");
			include("class5.php");
			$ob1=new person();
			$ob1->set_name("garima");
			$ob1->set_age(18);
			echo "person name is ".$ob1->get_name();
			echo "\n and age is ".$ob1->get_age();
			?><br><?php
			$ob2=new book();
			$ob2->set_details("php tutorial",180);
			echo "book name is ".$ob2->get_bname();
			echo "\n and price is ".$ob2->get_bprice();
			?><br><?php
			$ob3=new pet("dog");
			echo "my pet is ".$ob3->get_pet();
			?><br><?php
			$ob4=new place("garima","market");
			echo $ob4->get_name();
			echo "\n is going to ".$ob4->get_place();
			?><br><?php
			$ob5=new sibling("rahul","rita");
			echo "my brother is ".$ob5->get_bro();
			echo "\n and my sister is ".$ob5->get_sis();
		?>
	</body>
</html>
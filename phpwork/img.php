<?php
	$file_get = $_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	$file_to_saved= "downloads/".$file_get;
	move_uploaded_file($temp, $file_to_saved);
?>
<?php
function random_password( ) 
{
		$length=8;
    	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    	$password = substr( str_shuffle( $chars ), 0, $length );
    	return $password;
}
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
     echo '<script>window.location.href = "app.html";</script>';
} else { 
     $pass = $_POST["pwd"];
     if($pass==null)
     {
     	 $password = random_password();
     	 $pass = $password;
     }
$servername="localhost";
$username="root";
$password="";
try
{
	$conn = new PDO("mysql:host=$servername;dbname=phplab",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connected successfully";
	$smt = $conn->prepare("INSERT INTO student (enrollmentno,name,course,dob,password,email) VALUES (:enrollmentno,:name,:course,:dob,:password,:email)");
	$smt->bindParam(":enrollmentno",$eno1);
	$smt->bindParam(":name",$name1);
	$smt->bindParam(":course",$course1);
	$smt->bindParam(":dob",$dob1);
	$smt->bindParam(":password",$pass);
	$smt->bindParam(":email",$email1);
	$eno1 = $_POST["eno"];
	$name1 = $_POST["name"];
	$course1 = $_POST["cor"];
	$dob1 = $_POST["dob"];
	$email1 = $_POST["email"];
	$smt->execute();
}
catch(PDOException $e)
{
	echo "Connection failed : ".$e->getMessage();
}
$conn = null;
}
?>
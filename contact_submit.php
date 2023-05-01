<?php
$connect=mysqli_connect("localhost","root","password","feva2");
if(mysqli_connect_error()){
	echo("DB err!");
	exit();
}

$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$message=$_POST["message"];

//echo("$name<br>$tel<br>$email<br>$message");

$to="your@email.com";
$subject="website enquiry";
$body="$name\n$tel\n$email\n$message";
$from="From:noreply@fevaworks.net";

if(mail($to,$subject,$body,$from)){
	echo("sent");
}else{
	echo("fail");
}

$date=date("Y-m-d");
$sql="insert into `enquiry` (name,tel,email,message,date) values ('$name','$tel','$email','$message','$date')";

if(mysqli_query($connect,$sql)){
	setcookie("msg","Thank you for your enquiry",time()+60);
	header("location:contact.php#form");
}else{
	setcookie("msg","Fail, pls try again later",time()+60);
	header("location:contact.php#form");
}

?>













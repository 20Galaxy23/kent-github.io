<?php
$connect=mysqli_connect("localhost","root","password","feva");
if(mysqli_connect_error()){
	echo("DB err!");
	exit();
}

$name=$_POST[name];
$score=$_POST[score];
$address=$_POST[address];
$pic=$_POST[pic];

$sql="insert into `stu` (name,score,address,pic) values ('$name','$score','$address','$pic')";

if(mysqli_query($connect,$sql)){
	setcookie("msg","Done",time()+60);
	header("location:add.php");
}else{
	setcookie("msg","Fail",time()+60);
	header("location:add.php");
}

?>
















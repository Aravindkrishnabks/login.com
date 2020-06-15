<?php
$uname=$_POST["user"];
$psd=$_POST['key'];
$gender=$_POST['gender'];
$email=$_POST['emailid'];
$pno=$_POST['num'];
$city=$_POST['cname'];

$conn=new mysqli("localhost","root","","test");
if($conn->connect_error)
{
	die("connection failed:");
}
else
{
	$s=$conn->prepare("insert into usr(usrname,psd,gender,email,phno,city) values(?,?,?,?,?,?)");
	$s->bind_param("ssssis",$uname,$psd,$gender,$email,$pno,$city);
	$s->execute();
	echo "successfully created";
	$s->close();
	$conn->close();
}
?>
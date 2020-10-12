<?php 
session_start();
include('db.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: main.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $bname=$_POST['bname'];
 $acname=$_POST['acname'];
 $acnum=$_POST['acnum'];
 $coin=$_POST['coin'];
 $refname=$_POST['refname'];
 if(mysqli_query($con,"INSERT INTO member(fname, lname, address, username, password, bname, acname, acnum, coin, refname)VALUES('$fname', '$lname','$address', '$username', '$password', '$bname', '$acname', '$acnum', '$coin', '$refname')")){ 
	header("location: index.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: main.php?remarks=error&value=$e");	 
 }
}
?>
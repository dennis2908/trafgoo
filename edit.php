<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>T-Update</title>
</head>
<body>
<header>
</header>
<div id="center"><h1>TRAFGOO</h1>
<div id="center-set">
	<marquee>
<h3>Welcome To Trafgoo Keep Learning Keep Earning!</h3>
</marquee>
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
<div id="contentbox">
<?php
$id = $_GET['id'];
$sql="SELECT * FROM member where mem_id=$id";
$result=mysqli_query($con,$sql);

while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><input type="text" name="username" value = "<?php echo $rows['username']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td class="tl-4"><input type="text" name="password" value = "<?php echo $rows['password']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">First Name:</div></td>
<td class="tl-4"><input type="text" name="fname" value = "<?php echo $rows['fname']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Last Name:</div></td>
<td class="tl-4"><input type="text" name="lname" value = "<?php echo $rows['lname']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><input type="text" name="address" value = "<?php echo $rows['address']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Bank Name:</div></td>
<td class="tl-4"><input type="text" name="bname" value = "<?php echo $rows['bname']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Acct. Name:</div></td>
<td class="tl-4"><input type="text" name="acname" value = "<?php echo $rows['acname']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Acct. No:</div></td>
<td class="tl-4"><input type="text" name="acnum" value = "<?php echo $rows['acnum']; ?>" required /></td>
</tr>

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Ref. Name:</div></td>
<td class="tl-4"><input type="text" name="refname" value = "<?php echo $rows['refname']; ?>" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Status:</div></td>
<td class="tl-4">Paid</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Amount:</div></td>
<td class="tl-4">N1,000</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Payout:</div></td>
<td class="tl-4">N7,000</td>
</tr>
<tr id="lg-1">
<td class="tl-4" id="st-btn" colspan=2><center><input type='submit' name="update" value='update' /></center></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p>2018-2020 Trafgoo.com|18+</p></div>
</body>
</html>

<?php
if(isset($_POST['update']))
{    
//print_r($_POST);die();

$sql = "mem_id=".$_GET['id'];
foreach($_POST as $k=>$v){
	if($k!='update')
		$sql .= ",".$k."='".$v."'";
}

$sql = "UPDATE member SET ".$sql." where mem_id = ".$_GET['id']; 
//echo $sql;die(); 
    
$result = mysqli_query($con, $sql);
	
header("location: welcome.php");

}
?>
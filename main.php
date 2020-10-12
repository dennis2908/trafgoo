<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Login/Register</title>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="paymentgate.html">Buy Pin</a></li>
			<li><a href="terms1.html">T&C's</a></li>
		</ul>
	</nav>
</header>
<div id="center"><h1>TRAFGOO</h1>
<div id="center-set"> 
	<marquee>
<h3>Welcome To Trafgoo Keep Learning Keep Earning!</h3>
</marquee>
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Contact Agent For Registration</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<h3 align="center" style="color: white"><a href="paymentgate.html"><h3 style="color: white"> Click to purchase your Pin</h3></a></h3>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
</div>
</div>
<div id="footer"><p>&copy; 2018-2020 Trafgoo.com|18+ </p></div>
</body>
</html>
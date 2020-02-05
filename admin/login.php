<?php 

session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link rel="stylesheet" href="login.css" type="text/css" />
</head>
<body>
<img src="imageslogin/Manhattan-Bridge-at-Dusk-New-York-USA-Background-Desktop-for-Mac-OS.jpg" />
<br />
<div style="height:400px; width:900px; background-color:; padding:10px;">
<center>
<p class="loginguidemsg">
YOU NEED AUTHORISED USERNAME AND PASSWORD TO GO TO OUR ADMIN PANEL.
</p>
</center>
<center>
<p class="description">
A newspaper is a serial publication containing news, other informative articles (listed below), and usually advertising. A newspaper is usually printed on relatively inexpensive, low-grade paper such as newsprint. The news organizations that publish newspapers are themselves often metonymically called newspapers. Most newspapers are now published online as well as in print. The online versions are called online newspapers or news sites.
Newspapers are typically published daily or weekly. News magazines are also weekly, but they have a magazine format.

General-interest newspapers typically publish news articles and feature articles on national and international news as well as local news. The news includes political events and personalities, business and finance, crime, severe weather, and natural disasters; health and medicine, science, and technology; sports; and entertainment, society, food and cooking, clothing and home fashion, and the arts. Typically the paper is divided into sections for each of those major groupings (labeled A, B, C, and so on, with pagination prefixes yielding page numbers A1-A20, B1-B20, C1-C20, and so on). Most traditional papers also feature an editorial page containing editorials written by an editor, op-eds written by guest writers, and columns that express the personal opinions of columnists, usually offering analysis and synthesis that attempts to translate the raw data of the news into information telling the reader "what it all means" and persuading them to concur.
</p>
<a href="../index.php"><input type="button" value="Home" style="height:45px; width:150px;
	background-color:#4e6875;
	color:#fff;
	border-radius:7px;
	border:2px solid #f36557;
	border-right:6px solid #f36557;" /></a>
</center>
</div>
<form action="login.php" method="post" >
<div class="login_div">
<table class="formlogin">
<tr>
    <td><input type="text" name="user_name" placeholder="Admin Name" class="adminname"/></td>
</tr>
<tr>
    <td><input type="password" name="user_pass" placeholder="Password" class="adminpassword"/></td>
</tr>
<tr>
	<td><input type="submit" name="login" value="Login" class="loginbutton" /></td>
</tr>
</table>
</div>
</form>
</body>
</html>
<?php 
include("includes/database.php");
if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt = md5($user_pass);
	
	$login_query = "select * from admin_login where user_name='$user_name' AND user_password='$user_pass'";
	$run = mysql_query($login_query);
	if(mysql_num_rows($run)>0){
		
		$_SESSION['user_name']=$user_name;
		echo "<script>window.open('index.php','_self')</script>";
		}
		else{
			echo "<script>alert('User Name or Password is incorrect')</script>";
			}
	}

?>




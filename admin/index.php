<?php 
session_start();

if(!isset($_SESSION['user_name'])){
	
	header("location: login.php");
}else{ 
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel</title>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<div class="wrapper">

<a href="index.php">

	<div class="header">
    
    <center>Welcome to Admin Panel</center>
    
    </div>
</a>
    
    <div class="left" >
    Welcome:&nbsp;<font color="#FFFFFF" size="5"><?php echo $_SESSION['user_name']; ?></font>
    <h3 style="padding:5px; color:#fff;">Manage Contents</h3>
   		<a href="index.php?insert_post">Insert New Post</a>
        <a href="index.php?view_posts">View All Post</a>
        <a href="logout.php?logout">Admin Logout</a>
    </div>
	
    <div class="right">
    
    	<?php

if(isset($_GET['insert_post'])){
	include("includes/insert_post.php");
}else if(isset($_GET['view_posts'])){
	
	include("includes/view_posts.php");
}else if(isset($_GET['edit_post'])){
	
	include("includes/edit_post.php");
}else{
	echo '<img src="imageslogin/1-130515050554.jpg" class="imageadmin">';
}


?>
    </div>
</div>
</body>
</html>

<?php } ?>




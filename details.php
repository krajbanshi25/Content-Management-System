<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A cms project</title>
<link rel="stylesheet" href="styles/style.css" />
</head>
<body>

<div class="container">

<div class="header">
<div class="name_of_website">
<a style="text-decoration:none; color:#ff5b54; cursor:pointer;"href="index.php">THE TIMES OF EARTH</a></div></div>

<!--navbar area-->
<?php include("includes/navbar.php"); ?>
<!--end of navbar area-->

<!--content area-->
<div class="post_bar">
<?php 
if (isset($_GET['post'])){
$post_id = $_GET['post'];

$get_posts = "select * from posts where post_id='$post_id'";
$run_posts = mysql_query($get_posts);
while($row_posts = mysql_fetch_array($run_posts)){
	
	$post_title = $row_posts['post_title'];
	$post_date = $row_posts['post_date'];
	$post_author = $row_posts['post_author'];
	$post_image = $row_posts['post_image'];
	$post_content =$row_posts['post_content'];
	
	echo "
	
	<h2>$post_title</a></h2>
	
	<span><i style='color:#ff5b54;'>Posted by:</i>&nbsp;<b><u style='font-size:18px;'>$post_author</u></b>&nbsp;&nbsp;on&nbsp;<span style='font-size:14px; color:#ff5b54;'>$post_date</span></span>
	
	<img src='admin/news_images/$post_image' width='300' height='300'/>
	
	<div>$post_content</div>
	
	";
}
	}
	include("includes/comment_form.php");
?>
</div>
<!--end of content area content area-->

<!--sidebar area-->
<?php include("includes/sidebar.php"); ?>
<!--end of sidebar area-->

<div class="footer">
<h2 style="padding:10px; text-align:center; color:#fff;">&copy; ALL Rights Reserved 2016 - krishna.com</h2>
</div>


</body>
</html>
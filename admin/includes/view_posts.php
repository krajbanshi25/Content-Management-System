<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
a{
	color:rgba(255,0,0,1);}
th{
	color:#fff;
	margin:4px;
	font-size:16px;}
td{
	margin:3px;}
tr,table{padding:0; margin:0;}
</style>
</head>
<body>
<table border="1" style="text-align:center; margin:3px; font-size:14px;" width="900px">
    <tr>
    <th>Post Id</th>
    <th>Title</th>
    <th>Author</th>
    <th>Img</th>
    <th>Comments</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    
    <?php
	include("../includes/database.php");
	$get_posts = "select * from posts";
	$run_posts = mysql_query($get_posts);
	
	$i=1;
	
	while($row_posts = mysql_fetch_array($run_posts)){
		$post_id = $row_posts['post_id'];
		$post_title = $row_posts['post_title'];
		$post_author = $row_posts['post_author'];
		$post_image = $row_posts['post_image'];
	?>
    
    <tr>
    <td style="color:#f93;"><?php echo $i++; ?></td>
    <td style="color:#fff;"><?php echo $post_title; ?></td>
    <td style="color:rgba(255,0,0,1);"><?php echo $post_author; ?></td>
    <td><img src="news_images/<?php echo $post_image;?>" width="40px" height="40px" /></td>
    <td style="color:#f93;">
    <?php
    $get_comments = "select * from comments where post_id = '$post_id'";
	$run_comments = mysql_query($get_comments);
	$count = mysql_num_rows($run_comments);
	echo $count;
    ?>
    </td>
    <td><a href="index.php?edit_post=<?php echo $post_id; ?>">edit</a></td>
    <td><a href="includes/delete_post.php?delete_post=<?php echo $post_id; ?>">delete</a></td>
    </tr>
    <?php }
	
	?>
</table>
</body>
</html>
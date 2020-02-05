<div class="post_bar">
<?php 
if(!isset($_GET['cat'])){
$get_posts = "select * from posts order by rand() LIMIT 0,6";
$run_posts = mysql_query($get_posts);
while($row_posts = mysql_fetch_array($run_posts)){
	
	$post_id = $row_posts['post_id'];
	$post_title = $row_posts['post_title'];
	$post_date = $row_posts['post_date'];
	$post_author = $row_posts['post_author'];
	$post_image = $row_posts['post_image'];
	$post_content =substr( $row_posts['post_content'],0,300);
	
	echo "
	
	<h2><a id='ltitle'href='details.php?post=$post_id'>$post_title</a></h2>
	
	<span><i style='color:#ff5b54;'>Posted by:</i>&nbsp;<b><u style='font-size:18px;'>$post_author</u></b>&nbsp;&nbsp;on&nbsp;<span style='font-size:14px; color:#ff5b54;'>$post_date</span></span>
	
	<img src='admin/news_images/$post_image' width='100' height='100'/>
	
	<div>$post_content<a href='details.php?post=$post_id' id='rmlink'>read more</a></div>
	
	";
	}
}
else

if(isset($_GET['cat'])){
	$cat_id= $_GET['cat'];
$get_posts = "select * from posts where category_id = '$cat_id'";

$run_posts = mysql_query($get_posts);

while($row_posts = mysql_fetch_array($run_posts)){
	
	$post_id = $row_posts['post_id'];
	$post_title = $row_posts['post_title'];
	$post_date = $row_posts['post_date'];
	$post_author = $row_posts['post_author'];
	$post_image = $row_posts['post_image'];
	$post_content =substr( $row_posts['post_content'],0,300);
	
	echo "
	
	<h2><a id='ltitle'href='details.php?post=$post_id'>$post_title</a></h2>
	
	<span><i style='color:#ff5b54;'>Posted by:</i>&nbsp;<b><u style='font-size:18px;'>$post_author</u></b>&nbsp;&nbsp;on&nbsp;<span style='font-size:14px; color:#ff5b54;'>$post_date</span></span>
	
	<img src='admin/news_images/$post_image' width='100' height='100'/>
	
	<div class='subCont'>$post_content<a href='details.php?post=$post_id' id='rmlink'>read more</a></div>
	
	";
	}
}

?>
</div>
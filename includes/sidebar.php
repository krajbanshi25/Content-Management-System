<div class="sidebar">
<div class="stitle">
Subscribe via Email
</div>
<div>
<form style="padding:3px;text-align:center;" 
action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" 
onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=blogspot/rHIgt', 'popupwindow',
 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" 
style="width:215px; height:25px;" name="email"/></p><input type="hidden" value="blogspot/rHIgt" name="uri"/><input type="hidden"
 name="loc" value="en_US"/><input style="height:30px; color:#ff5b54; background-color:#fff; border:1px solid #ff5b54; border-left:5px solid #ff5b54; width:110px;" type="submit" value="Subscribe" /></form>

</div>
<div class='stitle'>Recent posts</div>
<?php 
$get_posts = "select * from posts order by 1 DESC LIMIT 0,5";
$run_posts = mysql_query($get_posts);
while($row_posts = mysql_fetch_array($run_posts)){
	
	$post_id = $row_posts['post_id'];
	$post_title = $row_posts['post_title'];
	$post_image = $row_posts['post_image'];
	
	echo "
	<div class='recent_posts'>
	<h2><a href='details.php?post=$post_id'>$post_title</a></h2>
	
	<img src='admin/news_images/$post_image' width='100' height='100'/>
	</div>
	";
	}

?>
</div>
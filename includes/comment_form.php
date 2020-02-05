<?php
include("includes/database.php");
if (isset($_GET['post'])){
$post_id = $_GET['post'];

$get_posts = "select * from posts where post_id='$post_id'";
$run_posts = mysql_query($get_posts);

$row = mysql_fetch_array($run_posts);

$post_new_id = $row['post_id'];
}
?>
<h2>
comments so far
<?php
$get_comments = "select * from comments where post_id='$post_new_id' AND status='approve'";
$run_comments = mysql_query($get_comments);
 $count = mysql_num_rows($run_comments);
 echo "(".$count.")";
?>

</h2>
<?php
$get_comments = "select * from comments where post_id='$post_new_id' AND status='approve'";
$run_comments = mysql_query($get_comments);
while($row_comments = mysql_fetch_array($run_comments)){
	$comment_name = $row_comments['comment_name'];
	$comment_text = $row_comments['comment_text'];
	
	echo "<div style='background-color:#e1e3e4; padding-left:5px;'><b style='font-size:18px;'><u>$comment_name</u><b>&nbsp;<i style='font-size:16px; color:#FF5B54;'>says</i></div>
	<div style='background:#e1e3e4; padding-left:15px; padding-bottom:2px; font-size:15px;'>$comment_text</div><br>
	
	";
	
	
	}
?>

<form method ="post" action="details.php?post=<?php echo $post_new_id; ?>">
	<table width="730px" align="center" style="background:#e1e3e4; padding-left:7px; padding-top:5px; " >
    	<tr>
            <td><input type="text" placeholder="Enter your Name:" name="comment_name" size="40"/ style="width:707px; border-radius:0 7px 0 7px; text-indent:6px; height:30px; border:1px solid #fff;"></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Your gmail is Mandatory:" name="comment_email" size="40" style="width:707px; border-radius:0 7px 0 7px; text-indent:6px; height:30px; border:1px solid #fff;"/></td>
        </tr>
        <tr>
            <td><textarea name="comment" placeholder="Drop us your coment:" style="width:704px; border-radius:0 9px 0 9px; text-indent:6px; height:200px; resize:none; border:1px solid #fff;"></textarea></td>
        </tr>
        <tr>
            <td align="right" style="padding-right:9px;"><input type="submit" name="submit" value="Post Comment" style="width:150px; height:30px; padding-right:5px; color:#ff5b54; background-color:#fff; border:1px solid #ff5b54; border-left:5px solid #ff5b54;" /></td>
        </tr>
	</table>
</form>
<?php

if(isset($_POST['submit'])){
	
	$post_com_id = $post_new_id;
	$comment_name = $_POST['comment_name'];
	$comment_email = $_POST['comment_email'];
	$comment = $_POST['comment'];
	$status = "approve";
	
	if($comment_name=='' OR $comment_email=='' OR $comment==''){
		echo "<script>alert('ALL FIELDS ARE MANDATORY')</script>";
		echo "<script>window.open('details.php?post=$post_id')</script>";
		exit();
		}
		else{
			$query_comment = "insert into comments(post_id,comment_name, comment_email, comment_text,status) values('$post_com_id','$comment_name','$comment_email','$comment','$status')";
			$run_query = mysql_query($query_comment);
			
				echo "<script>alert('YOUR COMMENT WILL BE APPROVED AFTER APPROVAL')</script>";
				echo "<script>window.open('details.php?post=$post_id')</script>";
				
			}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
	tinymce.init({selector:''});
</script>

<style type="text/css">
td, tr{
	padding:0px;
	margin:0px;	
	}
.editalldata{
	background-color:#4e6875;
	height:25px;
	width:500px;
	color:#fff;
	text-indent:6px;
	margin:5px;
	border:2px solid #4e6875;
	border-radius:0 7px 0 7px;
}
.textareaedit{
	text-indent:6px;
	background-color:#4e6875;
	height:280px;
	width:640px;
	color:#fff;
	margin:5px;
	resize:none;
	border:2px solid #4e6875;
	border-radius:0 9px 0 9px;
	}
.editpostbutton{
	height:28px;
	width:130px;
	margin-top:5px;
	background-color:#4e6875;
	color:#fff;
	border-radius:5px;
	border:2px solid #f93;;
	border-left:10px solid #f93;
	}
</style>
</head>

<body>
<?php

include("database.php");
if(isset($_GET['edit_post'])){
	
	$edit_id = $_GET['edit_post'];
	
	$select_post = "select * from posts where post_id ='$edit_id'";
	$run_query = mysql_query($select_post); 
	while($row_post = mysql_fetch_array($run_query)){
		$post_id = $row_post['post_id'];
		$title = $row_post['post_title'];
		$post_cat = $row_post['category_id'];
		$author = $row_post['post_author'];
		$keywords = $row_post['post_keywords'];
		$image = $row_post['post_image'];
		$content = $row_post['post_content'];
		}
}


?>
    <form action="index.php?edit_post=<?php echo $edit_id; ?>" method="post" enctype="multipart/form-data">
    	<table width="795" align="center" border="0px" style="color:#fff;">
        	<tr>
            	<td colspan="2" align="center">
                	<h3 style="#fff;">UPDATE POST</h3>
                </td>
            </tr>
            <tr>
            	<td align="right"><strong>Post title:</strong></td>                         
                <td><input class="editalldata" type="text" name="post_title" size="60" value="<?php echo $title; ?>" /></td>
            </tr>  
            <tr>
            	<td align="right"><strong>Post Category:</strong></td>                         
                <td>
                	<select class="editalldata" name="cat">
                    	
                        <?php
							
													
							$get_cats="select * from categories where cat_id = '$post_cat'";
					
							$run_cats=mysql_query($get_cats);
							
							while($cats_row=mysql_fetch_array($run_cats)){
							
							$cat_id=$cats_row['cat_id'];
							
							$cat_title=$cats_row['cat_title'];
								
							echo "<option value='$cat_id'>$cat_title</option>";
							
							$get_more_cats = "select * from categories";
							
							$run_more_cats = mysql_query($get_more_cats);
							
							while($row_more_cats = mysql_fetch_array($run_more_cats)){
								
								$cat_id = $row_more_cats['cat_id'];
								$cat_title =$row_more_cats['cat_title'];
								echo "<option value='$cat_id'>$cat_title</option>";
								
								}
								
					}
					
				?>
                    </select>
                </td>
            </tr> 
            <tr>
            	<td align="right"><strong>Post author:</strong></td>                         
                <td><input class="editalldata" type="text" name="post_author"size="60" value="<?php echo $author; ?>"/></td>
            </tr> 
            <tr>
            	<td align="right"><strong>Post Keywords:</strong></td>                         
                <td><input class="editalldata" type="text" name="post_keywords" size="60" value="<?php echo $keywords; ?>"/></td>
            </tr> 
            <tr>
            	<td align="right"><strong>Post Image:</strong></td>                         
                <td><input class="editalldata" type="file" name="post_image" size="50" /><img src="news_images/<?php echo $image; ?>" width="30px" height="30px" style="position:relative; top:12px;"/></td>
            </tr> 
            <tr>
            	<td align="right"><strong>Post Content:</strong></td>                         
                <td><textarea class="textareaedit" name="post_content"><?php echo $content; ?></textarea></td>
            </tr> 
            <tr>
            	<td colspan="6" align="center"><input class="editpostbutton" type="submit" name="update"  value="Update Now"/></td>
            </tr>             
        </table>
</body>
</html>
<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_post'];
	
	$post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat1=$_POST['cat'];
	$post_author=$_POST['post_author'];
	$post_keywords=$_POST['post_keywords'];
	$post_image=$_FILES['post_image']['name'];
	$post_image_tmp=$_FILES['post_image']['tmp_name'];
	$post_content=$_POST['post_content'];	
	if($post_title=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR  $post_image=='' OR $post_content=='' ){
		
		echo "<script> alert('Please fill all the fields')</script>";
		exit();	
		}
	else{
		move_uploaded_file($post_image_tmp,"news_images/$post_image");
		
		$update_posts="update posts set category_id='$post_cat1', post_title='$post_title', post_date='$post_date', post_author='$post_author', post_keywords='$post_keywords', post_image='$post_image', post_content= '$post_content' where post_id='$update_id'";
		
		$run_update=mysql_query($update_posts);
		
			echo"<script>alert('post has been updated')</script>";
			
			echo"<script>window.open('index.php?view_posts','_self')</script>";
		
		
	}
}

?>
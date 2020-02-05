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
.insertinput{
	background-color:#4e6875;
	height:25px;
	width:500px;
	color:#fff;
	text-indent:6px;
	margin:5px;
	border:2px solid #4e6875;
	border-radius:0 7px 0 7px;
}
.textareaofinsert{
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
.publishbutton{
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
	<form  action="index.php?insert_post" method="post" enctype="multipart/form-data">
    	<table width="795" align="center" border="0px" bgcolor="">
        	<tr bgcolor="">
            	<td colspan="2" align="center">
                	<h3 style="color:#fff;">INSERT NEW POST</h3>
                </td>
            </tr>
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post title:</strong></td>                         
                <td><input class="insertinput" type="text" name="post_title" size="60" /></td>
            </tr>  
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post Category:</strong></td>                         
                <td>
                	<select class="insertinput" name="cat">
                    	<option value="null">Select a Category</option>
                        <?php
							include("../includes/database.php");
													
							$get_cats="select * from categories";
					
							$run_cats=mysql_query($get_cats);
							
							while($cats_row=mysql_fetch_array($run_cats)){
							
							$cat_id=$cats_row['cat_id'];
							
							$cat_title=$cats_row['cat_title'];
								
							echo "<option value='$cat_id'>$cat_title</option>";
								
					}
					
				?>
                    </select>
                </td>
            </tr> 
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post author:</strong></td>                         
                <td><input type="text" name="post_author"size="60" class="insertinput"/></td>
            </tr> 
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post Keywords:</strong></td>                         
                <td><input type="text" name="post_keywords" size="60" class="insertinput"/></td>
            </tr> 
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post Image:</strong></td>                         
                <td><input type="file" name="post_image" size="50" class="insertinput"/></td>
            </tr> 
            <tr>
            	<td align="right" style="color:#fff;"><strong>Post Content:</strong></td>                         
                <td><textarea class="textareaofinsert" name="post_content"></textarea></td>
            </tr> 
            <tr bgcolor="">
            	<td colspan="6" align="center"><input class="publishbutton" type="submit" name="submit"  value="Publish Now"/></td>
            </tr>             
        </table>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	
	$post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat=$_POST['cat'];
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
		
		$insert_posts="insert into posts (category_id, post_title, post_date, post_author, post_keywords, post_image, post_content) values ('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";
		
		$run_posts=mysql_query($insert_posts);
		
		
		
	
			echo"<script>alert('post has been published')</script>";
			
			echo"<script>window.open('index.php?insert_post','_self')</script>";
		
		
	}
}

?>
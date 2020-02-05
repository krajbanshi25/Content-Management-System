<div class="navbar">

<?php
	include("includes/database.php");
	$get_cats="select * from categories";
	$run_cats=mysql_query($get_cats);
	while($cats_row=mysql_fetch_array($run_cats)){
		$cat_id=$cats_row['cat_id'];
		$cat_title=$cats_row['cat_title'];
		echo"<li><a href='index.php?cat=$cat_id'><div class='option'>$cat_title</a></a></li>";
	}
	
?>

<form id="form" method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="search_query" class="textBox"/>
<input style="width:80px; height:27px; position:relative; top:-2px; color:#ff5b54; background-color:#fff; border:0px solid #fff;" type="submit"  name="search" value="Search" />
</form>

</div>
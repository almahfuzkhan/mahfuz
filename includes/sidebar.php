<div id="sidebar">

<div id="searchbox">

	<form action="search.php" method="get" enctype="multipart/form-data">
	
	<input type="text" name="value" placeholder="Search this site" size="25px">
	
	<input type="submit" name="search" value="search">
	
	</form>
	
</div>


<div id="social">
	<h2>Follow Us</h2>
	<a href="http://www.facebook.com/taifur09" target="blank"><img src="images/fb-logo.png"/></a>
	<img src="images/google-plus.png"/>
	<img src="images/pin.png"/>
	<img src="images/insta.png"/>




</div>
	<h2 align="center">Recent Posts</h2>
<div>


<?php
include("includes/connect.php");

$query = "select * from posts order by 1 DESC LIMIT 0,5";

	$run = mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($run)){
		

		$post_id = $row['post_id'];
		$title = $row['post_title'];
		$image = $row['post_image'];
		
		
		
		
	

?>

	<center>

		<a href="pages.php?id=<?php echo $post_id; ?>">
		<h3><?php echo $title; ?></h3></a>
		<a href="pages.php?id=<?php echo $post_id; ?>">		
		<img src='images/<?php echo $image; ?>' width='140' height='140'/></a>
	</center>

	<?php } ?>




</div>



</div>
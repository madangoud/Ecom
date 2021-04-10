<?php
include_once('dbconn.php');
if($_GET['id'])
{
	$std=$_GET['id'];
	$sql="delete  FROM `cart` WHERE id='$std'";
	$res=mysqli_query($connect,$sql);
	
	
	echo "<script>
			alert ('Item removed')
			</script>";
			header('Refresh: 0; URL = cart.php');
	}
?>

<?php
include_once('dbconn.php');
if($_GET['id'])
{
	$std=$_GET['id'];
	$sql="SELECT * FROM `product` WHERE id='$std'";
	$res=mysqli_query($connect,$sql);
	$row=mysqli_fetch_row($res);
	
	$sql1="insert into `cart` values('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')";
	//$sql1="insert into `cart` values('001','IPhone','mobile','XR','45000','IOS 14','Black','images/xr.jpg')";
	$res1=mysqli_query($connect,$sql1);
	
	echo "<script>
			alert ('Item added')
			</script>";
			/*header('Refresh: 0; URL = https://razenwork.000webhostapp.com/');*/
	}
?>

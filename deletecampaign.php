<?php
	require('dbconnect.php');
  	$did=$_REQUEST['did'];
	$query = "DELETE FROM tbl_campaign WHERE campaign_id=$did"; 
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	if($result)
    echo "<script>
	alert('Your Campaign Details Deleted Successfully');
	window.location.href='viewcampaign.php';
	</script>";
	else
	echo "<script>
	alert('Something went wrong please check once');
	window.location.href='viewcampaign.php';
	</script>";
?>
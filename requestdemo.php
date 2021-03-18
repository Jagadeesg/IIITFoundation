<?php
require_once "dbconnect.php";

if(isset($_POST['reqdemo_btn']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$interested_course=$_POST['course'];
	$subject=$_POST['subject'];
	
	$selectcountry="select country_name from country where id=$country";
	$result=mysqli_query($conn,$selectcountry);
$row=mysqli_fetch_assoc($result);
$country=$row["country_name"];
$selectstate="select name from states where id=$state";
	$result1=mysqli_query($conn,$selectstate);
$row=mysqli_fetch_assoc($result1);
$state=$row["name"];
$selectcity="select name from city where id=$city";
	$result2=mysqli_query($conn,$selectcity);
$row=mysqli_fetch_assoc($result2);
$city=$row["name"];
$query=mysqli_query($conn,"select *from request_demo where email='$email'");
if(mysqli_num_rows($query)>0)
		{
			echo "<script>
			alert('email already exists!!! try with another email');
			window.location.href='index.php';
			</script>";
		}

		else{

	$register="insert into request_demo(name,email,phone,city,state,country,interested_course,subject) 
	values('$name','$email','$phone','$city','$state','$country','$interested_course','$subject')";
if(mysqli_query($conn,$register))
{
echo "<script>

window.location.href='index.php';
</script>";
}
}
}
?>

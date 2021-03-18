
<?php 
	include("dbconnect.php");
$message="";
$messageerr="";
  $eid=$_GET['eid'];

	if(isset($_POST['apply_btn']))
		{

		$name=$_POST['name'];
   
    if (!empty($_POST['email']))

  {
   $email=$_POST['email'];
  }
  else{
	$email='Null';
  }		
	
	 if (!empty($_POST['location']))

  {
   $location=$_POST['location'];
  }
  else{
	$location='Null';
  }		
		$phoneno=$_POST['phoneno'];	

		 if (!empty($_POST['specificenquiry']))

  {
   $specificenquiry=$_POST['specificenquiry'];
  }
  else{
	$specificenquiry='Null';
  }		
			
	     //mail function
 
      $to = "pratibha.coepd@gmail.com";
      $recipients = "rajesh@sathyamedha.com,venkat.coepd@gmail.com";
        
  
   	  
      $subject = "Coepd.us New Campaign user details";
      $message = "<html><body><b> Name: </b>".$name."<br><b>Email: </b> ".$email.
      "<br><b>Location: </b> ".$location.      
       "<br><b>PhoneNo: </b> ".$phoneno."<br><b>Enquiry Details: </b> ".$specificenquiry."<br>
       </body></html>";
 
     // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: <'.$name.'><'.$email.'>' . "\r\n";
       mail($to,$subject,$message,$headers);
mail($recipients,$subject,$message,$headers);	


	 $success=mysqli_query($conn,"insert into tbl_campaignlead(campaign_id,name,email,location,phoneno,specificenquiry) values('$eid','$name','$email','$location','$phoneno','$specificenquiry')");
  	if($success)
  		  {

		$query2="select * from tbl_campaign where campaign_id='$eid'";
    			$result2=mysqli_query($conn,$query2);
    			$rows=mysqli_fetch_array($result2);	  
    				$res=$rows['campaign_followupurl'];
    				if(!empty($res)){
                  $successMSG = "Details Submitted successfully";
    				header("Location:$res");
    			}
    			else{
    				header("Location:index.php");
    			}
           }

  
   else{
     echo "<script>alert('something went wrong please check once')
      window.location.href='index.php';</script";
    }
 }
	
?>
 	<?php
				require_once "dbconnect.php";
				if(isset($_GET['eid']))
				{
   				$eid=$_GET['eid'];
    			$query="select * from tbl_campaign where campaign_id='$eid'";
    			$result=mysqli_query($conn,$query);
    			$rows=mysqli_fetch_array($result);
    			    			}
    			?>
  <?php 
    if($rows['campaign_radio']==1)
     {
     ?> 		
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Comapaign</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="icon" href="./img/favi.png" />

<!--===============================================================================================-->

<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="">

<div class="limiter" style="">
	
		<div class="lim" style="background-image: url('campaignbackgroundimages/<?php echo $rows['file'];?> ">
			<div class="row">
				<div class="col-md-8">
					<img src="img/coepdllc.jpg" class="limimg">
					<img src="img/iiba.jpg" style=" height: 40px;
  width: 100px;margin-top: 10px; margin-left: -5px;">
			   <div class="login100-form-title1" style=" ">
               
				
					<h2><?php echo $rows['campaign_title']; ?></h2>
                <div class="container">
				<center>
				<ul class="login100-ul">
			  	  <li><?php echo $rows['campaign_usp1']; ?></li>
				    <li><?php echo $rows['campaign_usp2']; ?></li>
				    <li><?php echo $rows['campaign_usp3']; ?></li>
				      <li><?php echo $rows['campaign_usp4']; ?></li>
				        <li><?php echo $rows['campaign_usp5']; ?></li>
				          <li><?php echo $rows['campaign_usp6']; ?></li>
				            <li><?php echo $rows['campaign_usp7']; ?></li>
				              <li><?php echo $rows['campaign_usp8']; ?></li>
				                <li><?php echo $rows['campaign_usp9']; ?></li>
				                  <li><?php echo $rows['campaign_usp10']; ?></li>
				  
				</ul></center></div>
			   </div>
		     </div>
              <div class="col-md-4">
			  <div class="card" style="/*background: url('img/background.jpg');">
	           <h3 class="card-title text-center" style="">Request For Free Demo</h3>
	           	<br>
			  
			  	<div class="card-body">
				<form method="post" action="" class="form-group" onsubmit="req()">
				 <div class="form-group">
						<label>Name:</label>
						<input type="text" class="form-control" type="text" name="name" placeholder="Name..." value="" autofocus="" required="">
						
					</div>
                   <?php 
                   if($rows['check2']==1)
                   {
                   	?><div class="form-group" >
						<label>Email:</label>
						<input type="email" class="form-control" type="text" name="email" placeholder="Email addess..."  value="" autofocus="" required="">
						
					</div>
				<?php }
				?>
				<?php 
                   if($rows['check1']==1)
                   {
                   	?>

				 <div class="form-group">
						<label>Location:</label>
						<input type="text" class="form-control" type="text" name="location" placeholder="Location..." autofocus="" required="">
						
					</div>
					   <?php } ?>
                    	<div class="form-group">
						<label>Phone Number:</label>
						<input type="text" class="form-control" type="text" name="phoneno" pattern="[0-9]{10}" title="Enter 10 digites only" placeholder="Phone Number"  value="" autofocus="" required="">
						
					</div>
                
                    <?php 
                   if($rows['check3']==1)
                   {
                   	?>
					 <div class="form-group">
						<label>Specific Enquiry:</label>
						<input type="text" class="form-control" type="text" name="specificenquiry" placeholder="Specific Enquiry"  value="" required="" autofocus="">
						
					</div>
					<?php } ?>
					
						 <div class="form-group">
							<div class=""></div>
							<input type="submit" class="btn btn-default offset-md-5" name="apply_btn" value="Submit" style="background-color: rgba(33, 50, 68, 0.53); color:white;border: 2px solid #f8f9fa;">
							
								
						
					</div>
				</form>
			</div>
		
		</div>

<!--===============================================================================================-->
	<script src="js/jquery.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript">
     function req()
     {
      alert("Your Details submitted successfully.We will get back to you soon");

     }
   </script>


</body>
</html>
	<?php }
	else
	{
  echo '<center>This link is not activate.Please Activate this link.</center>';
	}
	?>
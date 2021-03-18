<?php 
	include("dbconnect.php");	
     $eid=$_GET['eid'];
 

	  if(isset($_POST['apply_btn']))
		{

		    $name=$_POST['name'];
		     $phoneno=$_POST['phoneno'];	

   
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


		

		    if (!empty($_POST['specificenquiry']))

              {
             $specificenquiry=$_POST['specificenquiry'];
              }
            else{
          	$specificenquiry='Null';
                }		
	
	 $success=mysqli_query($conn,"insert into tbl_campaignlead(campaign_id,name,email,location,phoneno,specificenquiry) values('$eid','$name','$email','$location','$phoneno','$specificenquiry')");
	 
  	if($success)
  		{
  echo "yes";
  
		}
else
	{
  echo  "no";
  
	}
  }
	
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

<!--===============================================================================================-->

<!--===============================================================================================-->
</head>
<body style="">
<div class="limiter">
		<div class="container-login100" style=" background-color: gray; background-image: url('img/bg-02.jpg');width:100%;background-repeat: no-repeat;background-size: cover;">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
			   <div class="login100-form-title1" style=" ">
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

				<center><img src="img/coepd-us.jpg" alt="Smiley face" height="60" width="100">
					<h2><?php echo $rows['campaign_title']; ?></h2></center>
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
              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			  <div class="card">
			  	<h3 class="card-title text-center">Request for free demo</h3>
			  	<div class="card-body">
				<form method="post" action="" class="form-group">
				<div class="" >
						<label>Name</label>
						<input class="form-control" type="text" name="name" placeholder="Name..." value="" autofocus="">
						
					</div>
                   <?php 
                   if($rows['check2']==1)
                   {
                   	?><div class="" >
						<label>Email</label>
						<input class="form-control" type="text" name="email" placeholder="Email addess..."  value="" autofocus="">
						
					</div>
				<?php }
				?>
				<?php 
                   if($rows['check1']==1)
                   {
                   	?>
				      <div class="" >
						<label>Location</label>
						<input class="form-control" type="text" name="location" placeholder="Location..." autofocus="">
						
					    </div>
					 <?php } ?>
                    
					<div class="">
						<label>Phone Number</label>
						<input class="form-control" type="text" name="phoneno" placeholder="Phone Number"  value="" autofocus="">
						
					</div>
                  
                    <?php 
                   if($rows['check3']==1)
                   {
                   	?>
					<div class="" >
						<label>Specific Enquiry</label>
						<input class="form-control" type="text" name="specificenquiry" placeholder="Specific Enquiry"  value="">
						
					</div>
					<?php } ?>
					
						<div class="">
							<div class=""></div>
							<input type="submit" class="btn btn-primary offset-md-3" name="apply_btn" value="Submit">
							
								
						
					</div>
				</form>
			</div>
		
		</div>
<!--===============================================================================================-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--===============================================================================================-->



</body>
</html>
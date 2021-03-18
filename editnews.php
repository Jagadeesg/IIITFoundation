<?php
session_start();

include('dbconnect.php');
if(strlen($_SESSION['email'])==0)
    {   
header('location:index.php');
}
else{
    ?>
    <?php
include("dbconnect.php");
if(isset($_GET['eid']))
{
	$eid=$_GET['eid'];
	
	$query="select *from news where news_id='$eid'";
	$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_array($result);
}	
if(isset($_REQUEST["submit"]))
{
	$news=$_REQUEST["news"];
	$results=mysqli_query($conn,"update news set newsDescription='$news' where news_id='$eid'");
    if($results)
    {
        header("location:newsReport.php"); 
    }
    else
    {
        alert("Your Details are not Updated");
	header("location:newsReport.php");
}
}
	
?>
<html>
<head>
        <title>Training Calendar</title>
        <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/dashboard.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="icon" href="./img/favi.png" />
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    
</head>
    

<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">

                    <h3 style="color: white;">Welcome <?php require_once('dbconnect.php');
                        $query="select * from users";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result);
                        print_r($row['name']);
                        ?></h3>

                </span>

            </div>
            <a href="logout.php">
           <button type="button" class="btn btn-primary pull-right" style="border-radius: 10px;color:white;margin-top: 30px;">Sign Out</button></a>
           
            <a href="change_password.php">
           <button type="button" class="btn btn-primary  pull-right" style="border-radius: 10px;color:white;margin-top: 30px;">Change Password</button></a>
                        
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                      


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                             <li><a  href="AdminDashboard.php" >Dashboard</a></li>
                            <li><a  href="viewContactlist.php">Contact Leads</a></li>
                            <li><a href="viewRequestDemo.php">Demo Registrations</a></li>
                            <li><a href="newsReport.php" class="menu-top-active">Training News</a></li>
                             <li><a href="viewtrainingdetailsinscroll.php" >Scrolling News</a></li>
                            <li><a href="viewTestimonials.php">Testimonials</a></li>
                             <li><a href="viewcampaign.php">Campaign</a></li>
                             <li><a  href="viewcampaignleaddetails.php">CampaignLead</a></li>
                             <li><a href="viewoffers.php">Offers</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    	<div class="container">
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<h4 align="center">Edit news</h4>
					</div>
					<div class="panel-body">
					<form method="post" action="">
						 <div class="form-group">
                        <label for="fname" class="col-md-2 control-label">News:</label>
					  <textarea name="news" class="col-md-10" rows="8" cols="50"><?php echo $rows['newsDescription']?></textarea>
						</div>
				

                   </br>
                         <div class="col-md-6 col-md-offset-4">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="newsEdit()" >
                    <a href="newsReport.php" class="btn btn-primary" style="color:#fff;text-decoration: none;">Back</a>
          </div>
					</form>
				</div>
			</div>
		</div>
          <script type="text/javascript">
     function newsEdit()
     {
      alert("Training Calender Updated Successfully");

     }
   </script> 
   <?php } ?>
	</body>
</html>


<?php 
include("dbconnect.php");
if(isset($_GET['eid']))
{
    $eid=$_GET['eid'];
   
    $query="select * from scrolltrainingdetails_tbl where trainingdetails_id='$eid'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_array($result);
    if(isset($_POST['batch_btn']))
    {
    $training_text=$_POST['training_text'];;
    date_default_timezone_set('Asia/Calcutta'); 
    $dt= date('Y-m-d H:i:s');
        
        $update="update scrolltrainingdetails_tbl set trainingdetails_text='$training_text',DateTime='$dt' where trainingdetails_id='$eid'";
        $updated=mysqli_query($conn,$update);
        if($updated){
            echo "<script>
            alert ('Scroll Training Details updated successfully');
               window.location.href='viewtrainingdetailsinscroll.php';
                </script>";
              }
            else{
             echo "<script>
                   alert('Scroll Training Details are Not Updated');
                    window.location.href='viewtrainingdetailsinscroll.php';
                   </script>";
                          }
            
  }
    }
    ?>

<?php
session_start();

include('dbconnect.php');
if(strlen($_SESSION['email'])==0)
    {   
header('location:index.php');
}
else{
    ?>
<html>
<head>
    <title>Training News Scroll</title>
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
<link rel="icon" href="./img/favi.png" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="css/dashboard.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
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
                            <li><a href="newsReport.php">Training News</a></li>
                             <li><a href="viewtrainingdetailsinscroll.php" class="menu-top-active">Scrolling News</a></li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary" style="background-color: #f9f9f9;">
                            <div class="panel-heading" align="center">
                           <h4>Edit Scroll Training Details</h4></div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST">
                                  
                                   
                                    <div class="form-group">
                                        <label for="description" class="col-md-4 control-label">Training Details</label>

                                        <div class="col-md-6">
                                            <textarea name="training_text" class="form-control" style="height:200px;width:470px;" value=""><?php echo $rows["trainingdetails_text"]; ?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="submit" name="batch_btn" class="btn btn-primary" value="Edit">
                                              <a href="viewtrainingdetailsinscroll.php" class="btn btn-primary" style="color:#fff;text-decoration: none;">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </body>
        </html>
        <?php } ?>
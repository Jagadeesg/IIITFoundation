
<?php 
include("dbconnect.php");
if(isset($_GET['tid']))
{
    $tid=$_GET['tid'];
   
    $query="select * from testimonials where testimonial_id='$tid'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_array($result);
        if(isset($_POST['testimonial_btn']))
      {
   
    $testimonials_text=$_POST['testimonial_text'];
    $authorName=$_POST['author_name'];
     date_default_timezone_set('Asia/Calcutta'); 
    $dt= date('Y-m-d H:i:s');
      $slider_check=$_POST['radio_check'];
        
         $update="update testimonials set testimonialstext='$testimonials_text',authorName=' $authorName',DateTime='$dt',slider='$slider_check' where 

testimonial_id='$tid'";
         $updated=mysqli_query($conn,$update);

              if($updated){

             echo "<script>
               
                window.location.href='viewTestimonials.php';
                </script>";
              }
            else{
             echo "<script>
                   alert('Your details are Not Updated');
                    window.location.href='viewTestimonials.php';
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
    <title>Testimonials</title>
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
 <script type="text/javascript">
            function testimonialFun(){
                alert("Testimonials Updated Successfully");
            }
        </script>
  
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
                             <li><a href="viewtrainingdetailsinscroll.php" >Scrolling News</a></li>
                            <li><a href="viewTestimonials.php" class="menu-top-active">Testimonials</a></li>
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
                           <h4> Edit Testimonial</h4></div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="#" onsubmit="testimonialFun()">
                                  
                                   
                                    <div class="form-group">
                                        <label for="description" class="col-md-4 control-label">Testimonial Content</label>

                                        <div class="col-md-6">
                                            <textarea name="testimonial_text" class="form-control" style="height:200px;width:470px;" value=""><?php echo 

$rows["testimonialstext"]; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label">Author Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" value="<?php echo $rows["authorName"]; ?>" name="author_name" >
                                        </div>
                                    </div>
                                 
                                 <div class="form-group form-check" style="padding-left: 250px;">
                                  <label class="col-md-6 form-check-label">
                                  Do You Want To Display in slider
                                </label>
                                
                                <input type="radio" name="radio_check" id="radio_experience" value="1" <?php echo ($rows['slider'] == '1') ? 'checked' : '' ?>/>
                                        YES
                                <input type="radio" name="radio_check" id="radio_experience" value="0" <?php echo ($rows['slider'] == '0') ? 'checked' : '' ?>/>
                                        NO
                                  </div>    
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="submit" name="testimonial_btn" class="btn btn-primary" value="Edit">
                                             <button  type="button" class="btn btn-primary"><a href="viewTestimonials.php" style="color:#fff;text-decoration: 

none;">Back</a></button>
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
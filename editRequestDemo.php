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
require_once "dbconnect.php";
if(isset($_GET['eid']))
{
    $eid=$_GET['eid'];
    
    $query="select * from request_demo where request_id='$eid'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_array($result);
    if(isset($_POST['demo_btn']))
   {
       $name=$_POST['name'];
      $email=$_POST['email'];
    
     $country=$_POST['country'];
     $subject=$_POST['subject'];
   
        
         $update="update request_demo set name='$name',email='$email',country='$country',subject='$subject' where request_id='$eid'";
         $updated=mysqli_query($conn,$update);

            if($updated){

             echo "<script>
               
                window.location.href='viewRequestDemo.php';
                </script>";
              }
            else{
             echo "<script>
                   alert('Your details are Not Updated');
                    window.location.href='viewRequestDemo.php';
                   </script>";
                          }
            
  }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    <script type="text/javascript">
     function myfunction()
     {
      alert("Details Updated Successfully");

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
                            <li><a  href="viewContactlist.php" >Contact Leads</a></li>
                            <li><a href="viewRequestDemo.php" class="menu-top-active">Demo Registrations</a></li>
                            <li><a href="newsReport.php">Training News</a></li>
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
      <div class="panel panel-primary">
        <div class="panel-heading">
         <h4 align="center">Edit Request For Demo</h4>
        </div>
        <div class="panel-body">
     <form  class="form-horizontal" name="request_demo" method="post"  action="">
     
    <div class="form-group">
    <label for="name" class="col-md-4 control-label">Name:<span class="demostar">*</span></label><br>
    <input type="text" id="name1" name="name" placeholder="Your name.." value="<?php echo $rows["name"]; ?>" class="col-md-6"><br>
   </div>
     <div class="form-group">
    <label for="email" class="col-md-4 control-label">Email Address:<span class="demostar">*</span></label><br>
    <input type="text" id="email1" name="email" placeholder="Your email.." value="<?php echo $rows["email"]; ?>" class="col-md-6"><br>
  </div>
    
   <div class="form-group">
    <label for="country" class="col-md-4 control-label">country:</label><br>
    <input type="text" id="phone1" name="country" value="<?php echo $rows["country"]; ?>" class="col-md-6"><br>
  </div>

    
<div class="form-group">
      <label for="subject" class="col-md-4 control-label">Subject:</label>
            <textarea id="subject" name="subject" value="" ng-model="user.sub"  style="height:50px" class="col-md-6"><?php echo $rows["subject"]; ?></textarea>
          </div>
   <div class="col-md-6 col-md-offset-4">
<input type="submit" name="demo_btn" value="Submit" id="demobutton" class="btn btn-primary" onclick="myfunction()" >
             <a href="viewRequestDemo.php" class="btn btn-primary" style="color:#fff;text-decoration: none;">Back</a>

  </div>
    </form>
       </div>
     </div>
    </div>
   
   <script type="text/javascript">
     function myfunction()
     {
      alert("Details Updated Successfully");

     }
   </script>  
   <?php } ?>
</body>
</html>


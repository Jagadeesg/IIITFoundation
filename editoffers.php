    <?php
require_once "dbconnect.php";
if(isset($_GET['eid']))
{
    $eid=$_GET['eid'];
     $query="select * from tbl_offer where id='$eid'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_array($result);
    if(isset($_POST['offer_edit']))
   {
    
    $offer_enddate=$_POST['offer_enddate'];
    $hours=$_POST['hours'];
    $minutes=$_POST['minutes'];
    $seconds=$_POST['seconds'];
   
    $offer_check=$_POST['offer_check'];
    

    $targetDir = "offersimg/";
$fileName1 = basename($_FILES["offer_image"]["name"]);
if($fileName1){  
$targetFilePath1 = $targetDir . $fileName1;
if($_FILES["offer_image"]["size"]>1000000) //1 mb
  {
echo  "File size should be less than 1 mb"; 
  }
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg','gif');
if(in_array($fileType1, $allowTypes)=== false)
{
echo '<script>alert("Please choose jpeg, png, gif format")
window.location.href="viewoffers.php";
</script>';
}
if(in_array($fileType1, $allowTypes) )
{
// Upload file to server
if(move_uploaded_file($_FILES["offer_image"]["tmp_name"], $targetFilePath1) ){
 
    $update="update tbl_offer set offer_enddate='$offer_enddate',hours='$hours',minutes='$minutes',seconds='$seconds',offer_check='$offer_check',offer_image='$fileName1' where id='$eid'";
    $updated=mysqli_query($conn,$update);
    if($updated){
    echo "<script>alert('Offers Details Updated sucessfully')
    window.location.href='viewoffers.php';
    </script>";
    }
    else{
    echo "<script>
    alert ('Something went wrong.Please Try Againa!!!');
    window.location.href='viewoffers.php';
    </script>";
        }
  
}
}

}
else{
    $update="update tbl_offer set offer_enddate='$offer_enddate',hours='$hours',minutes='$minutes',seconds='$seconds',offer_check='$offer_check' where id='$eid'";
    $updated=mysqli_query($conn,$update);
    if($updated){
    echo "<script>alert('Offers Details Updated sucessfully')
    window.location.href='viewoffers.php';
    </script>";
    }
    else{
    echo "<script>
    alert ('Something went wrong.Please Try Againa!!!');
    window.location.href='viewoffers.php';
    </script>";
        }

}
}
}
?>


<html>
<head>
    <title>Offer</title>
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
                            <li><a href="newsReport.php">Training News</a></li>
                             <li><a href="viewtrainingdetailsinscroll.php" >Scrolling News</a></li>
                            <li><a href="viewTestimonials.php" >Testimonials</a></li>
                             <li><a href="viewcampaign.php" >Campaign</a></li>
                             <li><a  href="viewcampaignleaddetails.php" >CampaignLead</a></li>
                             <li><a href="viewoffers.php" class="menu-top-active">Offers</a></li>
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
                           <h4>Edit Offer</h4></div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                             
                                      <div class="form-group">
                                        <label for="offer_enddate" class="col-md-4 control-label">End Date</label>

                                        <div class="col-md-6">
                                            <input id="offer_enddate" type="text" class="form-control" name="offer_enddate" required value="<?php echo $rows["offer_enddate"];?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group"> 
                                         <label for="offer_endtime" class="col-md-4 control-label">End Time</label>
                                    <div class="col-md-2">
                                         <label for="Hours"> Hours</label>
                                        <select class="form-control" name="hours" required>
                                           
                                                        <option value="<?php echo $rows['hours'];?>"><?php echo $rows['hours'];?></option>
                                                        <?php
                                                        for($i = 1; $i <= 24; $i++){
                                                           echo "<option value=".$i.">$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                     <label for="minutes"> Minutes </label>
                                                    <select class="form-control" name="minutes" required>
                                                       
                                                        <option value="<?php echo $rows['minutes'];?>"><?php echo $rows['minutes'];?></option>
                                                        <?php
                                                        for($i = 1; $i <= 60; $i++){
                                                           echo "<option value=".$i.">$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="seconds">Seconds</label>
                                                    <select class="form-control" name="seconds" required>
                                                        <option value="<?php echo $rows['seconds'];?>"><?php echo $rows['seconds'];?></option>
                                                        <?php
                                                        for($i = 1; $i <= 60; $i++){
                                                           echo "<option value=".$i.">$i</option>";
                                                        }
                                                        ?>
                                                    </select>             
                                    </div> 
                                </div>
                                    
                                      <div class="form-group">
                                        <label for="file" class="col-md-4 control-label">Offer Image</label>

                                        <div class="col-md-6">
                                           <span><img src="offersimg/<?php echo $rows["offer_image"]; ?>" width="100px" height="80px;"></span>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <label for="file" class="col-md-4 control-label">Offer Image</label>

                                        <div class="col-md-6">
                                           <input type="file"  name="offer_image" class="form-control" value=""/>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                       <label for="offer_file" class="col-md-4 control-label">Choose Offer</label>
                                       <div class="col-md-6">
                                       <input type="radio" name="offer_check" id="radio_experience" value="1" <?php if($rows["offer_check"]=='1')
                                    { echo "checked";} 
                                    ?>>Active
                                       <input type="radio" name="offer_check" id="radio_experience" value="0" <?php if($rows["offer_check"]=='0')
                                    { echo "checked";} 
                                    ?>>Deactive
                                        </div>  
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="submit" name="offer_edit" class="btn btn-primary" value="Save">
                                             <button  type="button" class="btn btn-primary"><a href="viewoffers.php" style="color:#fff;text-decoration: none;">Back</a></button>
                                        </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
 <script>
 $( function() {
$( "#offer_startdate" ).datepicker({
 dateFormat: 'yy-mm-dd',
changeMonth: true,
 changeYear: true
  });
 $( "#offer_enddate" ).datepicker({
  dateFormat: 'yy-mm-dd',
 changeMonth: true,
  changeYear: true
  });
  } );
</script>
</body>
</html>

<!-- end form-->

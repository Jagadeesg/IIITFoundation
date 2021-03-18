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
if(isset($_GET['eid']))
{
  include('dbconnect.php');
  $eid=$_GET['eid'];
  $query="select * from tbl_campaign where campaign_id='$eid'";
  $res=mysqli_query($conn,$query);
  $rows=mysqli_fetch_array($res);
  $old_image=$rows['file'];

  
  if(isset($_POST['campaign_update']))
  { 
    $title=$_POST['title'];
  $keywords=$_POST['keywords'];
  $startdate=$_POST['startdate'];
  $enddate=$_POST['enddate'];
  $usp1=$_POST['usp1']; 
  $usp2=$_POST['usp2']; 
  $usp3=$_POST['usp3']; 
  $usp4=$_POST['usp4']; 
  $usp5=$_POST['usp5'];
  $usp6=$_POST['usp6']; 
  $usp7=$_POST['usp7']; 
  $usp8=$_POST['usp8'];
  $usp9=$_POST['usp9']; 
  $usp10=$_POST['usp10']; 
  $check1=$_POST['radio_check1']; 
   $check2=$_POST['radio_check2']; 
  $check3=$_POST['radio_check3']; 
  $radio_check=$_POST['radio_check'];
  $followupurl=$_POST['followupurl'];


  $profile_name= $_FILES['profile']['name'];
      $tmp_dir= $_FILES['profile']['tmp_name'];
    $size = $_FILES['profile']['size'];
     $fileinfo = @getimagesize($_FILES["profile"]["tmp_name"]);
      $width = $fileinfo[0];
        $height = $fileinfo[1];

    $type = $_FILES['profile']['type'];
   
       if($profile_name)
    {
      $upload_dir = 'campaignbackgroundimages/'; // upload directory 
      $imgExt = strtolower(pathinfo($profile_name,PATHINFO_EXTENSION)); // get image extension
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
       // rename uploading image

      
      if(in_array($imgExt, $valid_extensions))
      {     
         if( $width == "1000" || $height == "700")      
          {

         
           move_uploaded_file($tmp_dir,$upload_dir.$profile_name);
    
          }
          else
          {
              $profile_name=$old_image;
          $errMSG = "Sorry,please choose 1000 * 700 resolution image.";
          }
      }
      else
      {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      } 
      
    }

    else
    {
      $profile_name=$old_image;
    }
    $update=mysqli_query($conn,"UPDATE tbl_campaign 
                       SET  campaign_title='$title',campaign_key='keywords',campaign_startdate='$startdate',campaign_enddate='$enddate', campaign_usp1='$usp1', campaign_usp2='$usp2' , campaign_usp3='$usp3' , campaign_usp4='$usp4' , campaign_usp5='$usp5' , campaign_usp6='$usp6' ,campaign_usp7='$usp7' ,campaign_usp8='$usp8' ,campaign_usp9='$usp9' ,campaign_usp10='$usp10' , check1='$check1' ,check2='$check2' ,check3='$check3' , campaign_radio='$radio_check' , campaign_followupurl='$followupurl' , file='$profile_name' where campaign_id='$eid'");
    if($update)
    {
      $successMSG= "Compaign Details Updated Successfully";
    }
    else{
     $errMSG= "Something went wrong.Please try again later.";
    }

    
    
}
}

?>


<html>
<head>
    <title>Campaign</title>
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

   <script>
  $( function() {
    $( "#datepicker" ).datepicker(
        {
         dateFormat: 'yy-mm-dd',
         changeMonth: true,
         changeYear: true   
        });
    $( "#datepicker1" ).datepicker(
        {
         dateFormat: 'yy-mm-dd',
         changeMonth: true,
         changeYear: true   
        });
  } );
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
                            <li><a href="viewTestimonials.php" >Testimonials</a></li>
                             <li><a href="viewcampaign.php" class="menu-top-active">Campaign</a></li>
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
         <h4 align="center">Edit Compaign</h4>
         <?php
  if(isset($errMSG)){
      ?>
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
  }
  else if(isset($successMSG)){
    ?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
  }
  ?>   
        </div>
        <div class="panel-body">
        <form method="post" action="" enctype="multipart/form-data" >
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="Title"  value="<?php echo $rows["campaign_title"]; ?>">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Campaign Keywords</label>
              <div class="col-sm-10">
                <input type="text" name="keywords" class="form-control" placeholder="Keywords" value="<?php echo $rows["campaign_key"]; ?>">
              </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
              <input type="text" name="startdate" class="form-control" placeholder="StartDate" id="startdate" value="<?php echo $rows["campaign_startdate"]; ?>">
        </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
              <input type="text" name="enddate" class="form-control" placeholder="EndDate" id="enddate" value="<?php echo $rows["campaign_enddate"]; ?>">
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP1</label>
            <div class="col-sm-10">
              <input type="text" name="usp1" class="form-control" placeholder="Enter UPS1" value="<?php echo $rows["campaign_usp1"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP2</label>
            <div class="col-sm-10">
              <input type="text" name="usp2" class="form-control" placeholder="Enter UPS2" value="<?php echo $rows["campaign_usp2"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP3</label>
            <div class="col-sm-10">
              <input type="text" name="usp3" class="form-control" placeholder="Enter UPS3" value="<?php echo $rows["campaign_usp3"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP4</label>
            <div class="col-sm-10">
              <input type="text" name="usp4" class="form-control" value="<?php echo $rows["campaign_usp4"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP5</label>
            <div class="col-sm-10">
              <input type="text"  name="usp5" class="form-control" value="<?php echo $rows["campaign_usp5"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP6</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="usp6" value="<?php echo $rows["campaign_usp6"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP7</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="usp7" value="<?php echo $rows["campaign_usp7"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP8</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="usp8" value="<?php echo $rows["campaign_usp8"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP9</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="usp9" value="<?php echo $rows["campaign_usp9"]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">USP10</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="usp10" value="<?php echo $rows["campaign_usp10"]; ?>">
            </div>
          </div>
        <div class="form-group row" style="">
          <label class="col-md-6 form-check-label">
           Location Field Required?
        </label>
        
        <input type="radio" name="radio_check1" id="radio_check1"  <?php echo ($rows['check1']=='1')?'checked':'' ?> value="1"
        >
                YES
        <input type="radio" name="radio_check1" id="radio_check1" <?php echo ($rows['check1']=='0')?'checked':'' ?> value="0">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-6 form-check-label">
          Email Field Required?
        </label>
        
        <input type="radio" name="radio_check2" id="radio_check2"  <?php echo ($rows['check2']=='1')?'checked':'' ?> value="1">
                YES
        <input type="radio" name="radio_check2" id="radio_check2"  <?php echo ($rows['check2']=='0')?'checked':'' ?> value="0">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-6 form-check-label">
         Enquiry Field Required?
        </label>
        
        <input type="radio" name="radio_check3" id="radio_check3" <?php echo ($rows['check3']=='1')?'checked':'' ?> value="1">
                YES
        <input type="radio" name="radio_check3" id="radio_check3" <?php echo ($rows['check3']=='0')?'checked':'' ?> value="0">
                NO
          </div>  
        <div class="form-group row" style="">
          <label class="col-md-6 form-check-label">
         URL Active OR Deactive
        </label>
        
        <input type="radio" name="radio_check" id="radio_experience"  <?php echo ($rows['campaign_radio']=='1')?'checked':'' ?> value="1">
                Active
        <input type="radio" name="radio_check" id="radio_experience"   <?php echo ($rows['campaign_radio']=='0')?'checked':'' ?> value="0">
                Deactive
          </div>  

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">URL:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="url"   value="<?php echo $rows["campaign_url"]; ?>" disabled="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Follow Up URL:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="followupurl"   value="<?php echo $rows["campaign_followupurl"]; ?>">
            </div>
          </div>
          <div class="form-group row">
             <label class="col-sm-2 col-form-label">Old Background Image:</label>
            <div class="col-sm-10">
          <p><img src="campaignbackgroundimages/<?php echo $rows['file']; ?>" height="150" width="150" /></p>
         </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Background Image Edit:</label>
            <div class="col-sm-10">
          <input class="input-group" type="file" name="profile" accept="image/*" />
          </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-10">
              <center><input type="submit" name="campaign_update" value="submit" class="btn btn-primary offset-md-3">
               <a href="viewcampaign.php" class="btn btn-primary" style="color:#fff;text-decoration: none;">Back</a></center>
            </div>
          </div>

</form>
    </div>
  </div>
</div>
  <script>
  $( function() {
    $( "#startdate" ).datepicker();
    $( "#enddate" ).datepicker();
  } );
  </script>

  </script>
   <?php } ?>
</body>
</html>


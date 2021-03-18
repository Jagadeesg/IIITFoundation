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
include('dbconnect.php');
if(isset($_POST['campaign_submit']))
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




    if (!empty($_POST['url']))

  {
   $url=$_POST['url'];
  }
  else{
   $query1="select * from tbl_campaign";
   $res1=mysqli_query($conn,$query1);
          while($row=mysqli_fetch_array($res1))
          {
            $campaign_id=$row['campaign_id'];
          
                 
      $url="https://www.coepd.us/campaign.php?eid=$campaign_id";
     $url++;
      
  }   

     if (!empty($_POST['followupurl']))

  {
   $followupurl=$_POST['followupurl'];
  }
  else{
  $followupurl='Null';
  }   
  
        
  }

   $imgFile = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    $imgSize = $_FILES['file']['size'];
    $fileinfo = @getimagesize($_FILES["file"]["tmp_name"]);
      $width = $fileinfo[0];
        $height = $fileinfo[1];
    
    if(empty($imgFile)){
      $errMSG = "Please Select Image File.";
    }
    else
    {
      $upload_dir = 'campaignbackgroundimages/'; // upload directory
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    
      // rename uploading image

      $bgpic = rand(1000,1000000).".".$imgExt;
        
      // allow valid image file formats
      if(in_array($imgExt, $valid_extensions)){     
        // Check file size '5MB'
        if( $width > "1000" || $height > "700")       
         {
          move_uploaded_file($tmp_dir,$upload_dir.$bgpic);
            
        }
        else{
          $errMSG = "Sorry, your file is too small please choose equal to 1000*768.";
        }
      }
      else{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      }
    }
    



  /*insert data into database*/
  if(!isset($errMSG))
    {
  $insert_data="insert into tbl_campaign(campaign_title,campaign_key,campaign_startdate,campaign_enddate,campaign_usp1,campaign_usp2,campaign_usp3,campaign_usp4,campaign_usp5,campaign_usp6,campaign_usp7,campaign_usp8,campaign_usp9,campaign_usp10,check1,check2,check3,campaign_radio,campaign_url,campaign_followupurl,file) values('$title','$keywords','$startdate','$enddate','$usp1','$usp2','$usp3','$usp4','$usp5','$usp6','$usp7','$usp8','$usp9','$usp10','$check1','$check2','$check3','$radio_check','$url','$followupurl','$bgpic') ";

  $query_data=mysqli_query($conn,$insert_data);
  if($query_data){
    echo "<script>alert('campaign data inserted successfully')
    window.location.href='viewcampaign.php';</script";
  }
    else{
    echo "<script>alert('something went wrong please check once')
      window.location.href='viewcampaign.php';</script>";
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
         <h4 align="center">Add Compaign</h4>
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
            <label class="col-sm-3 col-form-label">Compaign Title:&nbsp;<b style="color:red;">*</b></label>
              <div class="col-sm-9">
                <input type="text" name="title" class="form-control" placeholder="Title" required="">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign Keywords:&nbsp;<b style="color:red;">*</b></label>
              <div class="col-sm-9">
                <input type="text" name="keywords" class="form-control" placeholder="Keywords" required="">
              </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Start Date:&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="startdate" id="datepicker" class="form-control" placeholder="StartDate" id="startdate" required="">
        </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">End Date:&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="enddate" id="datepicker1" class="form-control" placeholder="EndDate" id="enddate" required="">
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP1:&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="usp1" class="form-control" placeholder="Enter UPS1" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP2&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="usp2" class="form-control" placeholder="Enter UPS2" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP3&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="usp3" class="form-control" placeholder="Enter UPS3" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP4&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" name="usp4" class="form-control" placeholder="Enter UPS4" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP5</label>
            <div class="col-sm-9">
              <input type="text"  name="usp5" class="form-control" placeholder="Enter UPS5">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP6</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="usp6" placeholder="Enter UPS6">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP7</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="usp7" placeholder="Enter UPS7">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP8</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="usp8" placeholder="Enter UPS8">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP9</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="usp9" placeholder="Enter UPS9">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP10</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="usp10" placeholder="Enter UPS10">
            </div>
          </div>
        

          <div class="form-group row" style="" >
          <label class="col-md-4 form-check-label">
          Location Field Required?&nbsp;<b style="color:red;">*</b>
        </label>
        
        <input type="radio" name="radio_check1" id="radio_check1" value="1" required="">
                YES
        <input type="radio" name="radio_check1" id="radio_check1" value="0" required="">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          Email Field Required?&nbsp;<b style="color:red;">*</b>
        </label>
        
        <input type="radio" name="radio_check2" id="radio_check2" value="1" required="">
                YES
        <input type="radio" name="radio_check2" id="radio_check2" value="0" required="">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          Enquiry Field Required?&nbsp;<b style="color:red;">*</b>
        </label>
        
        <input type="radio" name="radio_check3" id="radio_check3" value="1" required="">
                YES
        <input type="radio" name="radio_check3" id="radio_check3" value="0" required="">
                NO
          </div>  



          <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          URL Active OR Deactive&nbsp;<b style="color:red;">*</b>
        </label>
        
        <input type="radio" name="radio_check" id="radio_experience" value="1" required="">
                Active
        <input type="radio" name="radio_check" id="radio_experience" value="0" required="">
                Deactive
          </div>  

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign URL:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="url" disabled="" placeholder="Automatically generated URL">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign Follow Up URL:&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="followupurl" required="" placeholder="Enter full URL ex:http://....">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-3 col-form-label">Choose Background image:&nbsp;<b style="color:red;">*</b></label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="file" required=""  accept="image/*">
            </div>
          </div>
          <br>
          <div class="form-group">
            <div class="col-sm-10">
              <center><input type="submit" name="campaign_submit" value="submit" class="btn btn-primary btn-lg col-md-offset-4">
                  <a href="viewcampaign.php" class="btn btn-primary  btn-lg" style="color:#fff;text-decoration: none;">Back</a>
               </center>
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


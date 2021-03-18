
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
if(isset($_POST['campaign_submit'])){


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
          
                 
     $url="localhost/coepdus live 17-11-2018/campaign.php?eid=$campaign_id";
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
    $targetDir = "campaignbackgroundimages/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    if($_FILES["file"]["size"]>1000000) //1 mb
    {
        echo '<script>alert("File size should be less than 4MB")
        window.location.href="viewcampaign.php";</script>'; 
    }
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);    
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)=== false)
    {
        echo '<script>alert("Please choose jpeg,png,gif file format")
        window.location.href="viewcampaign.php";
       </script>';
    }
    if(in_array($fileType, $allowTypes))
    {
     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
      {
/*insert data into database*/

  $insert_data="insert into tbl_campaign(campaign_title,campaign_key,campaign_startdate,campaign_enddate,campaign_usp1,campaign_usp2,campaign_usp3,campaign_usp4,campaign_usp5,campaign_usp6,campaign_usp7,campaign_usp8,campaign_usp9,campaign_usp10,check1,check2,check3,campaign_radio,campaign_url,campaign_followupurl,file) values('$title','$keywords','$startdate','$enddate','$usp1','$usp2','$usp3','$usp4','$usp5','$usp6','$usp7','$usp8','$usp9','$usp10','$check1','$check2','$check3','$radio_check','$url','$followupurl','$fileName') ";

  $query_data=mysqli_query($conn,$insert_data);
  if($query_data){
    echo "<script>alert('campaign data inserted successfully')
    window.location.href='viewcampaign.php';</script";
  }
  else{
    echo "<script>alert('something went wrong please check once')
      window.location.href='viewcampaign.php';</script";
  

  }
}}

  

}

?>    


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin Panel</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/dashboard.css"/>
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     




     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                     <script>
                          $(document).ready(function () {
                            var date = new Date();
                            var currentMonth = date.getMonth();
                            var currentDate = date.getDate();
                            var currentYear = date.getFullYear();

                            $('#datepicker').datepicker({
                                minDate: new Date(currentYear, currentMonth, currentDate),
                                dateFormat: 'yy-mm-dd'
                            });
                             $('#datepicker1').datepicker({
                                minDate: new Date(currentYear, currentMonth, currentDate),
                                dateFormat: 'yy-mm-dd'
                            });
                        });
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
                <span class="navbar-brand" >

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
           <button type="button" class="btn btn-primary pull-right" style="border-radius: 10px;color:white;margin-top: 30px;">Change Password</button></a>
                        
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                   
                                </div>
                                <hr />
                                

                            </div>
                        </li>


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
                            <li><a  href="AdminDashboard.php">Dashboard</a></li>
                            <li><a  href="viewContactlist.php">Leads List</a></li>
                            <li><a  href="viewRequestDemo.php">Demo Registrations</a></li>
                            <li><a href="newsReport.php">Training News</a></li>
                             <li><a href="viewTestimonials.php">Testimonials</a></li>
                              <li><a class="menu-top-active" href="viewcampaign.php">Compagins</a></li>
                            <li><a href="viewcampaignleaddetails.php">CampaignLead</a></li>
                            <li><a href="viewoffers.php">Offers</a></li>
                            

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
<br>
   <div class="container">
      <div class="panel panel-info">
        <div class="panel-heading">
         <h4 align="center">Add Compaign</h4>
        </div>
        <div class="panel-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Compaign Title:&nbsp;<b>*</b></label>
              <div class="col-sm-9">
                <input type="text" name="title" class="form-control" placeholder="Title" required="">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign Keywords:</label>
              <div class="col-sm-9">
                <input type="text" name="keywords" class="form-control" placeholder="Keywords" required="">
              </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Start Date:</label>
            <div class="col-sm-9">
              <input type="text" name="startdate" id="datepicker" class="form-control" placeholder="StartDate" id="startdate" required="">
        </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">End Date:</label>
            <div class="col-sm-9">
              <input type="text" name="enddate" id="datepicker1" class="form-control" placeholder="EndDate" id="enddate" required="">
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP1:</label>
            <div class="col-sm-9">
              <input type="text" name="usp1" class="form-control" placeholder="Enter UPS1" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP2</label>
            <div class="col-sm-9">
              <input type="text" name="usp2" class="form-control" placeholder="Enter UPS2" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP3</label>
            <div class="col-sm-9">
              <input type="text" name="usp3" class="form-control" placeholder="Enter UPS3" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Campaign USP4</label>
            <div class="col-sm-9">
              <input type="text" name="usp4" class="form-control" placeholder="Enter UPS4">
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
        

          <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          Location Field Required?
        </label>
        
        <input type="radio" name="radio_check1" id="radio_check1" value="1" required="">
                YES
        <input type="radio" name="radio_check1" id="radio_check1" value="0" required="">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          Email Field Required?
        </label>
        
        <input type="radio" name="radio_check2" id="radio_check2" value="1" required="">
                YES
        <input type="radio" name="radio_check2" id="radio_check2" value="0" required="">
                NO
          </div>  

            <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          Enquiry Field Required?
        </label>
        
        <input type="radio" name="radio_check3" id="radio_check3" value="1" required="">
                YES
        <input type="radio" name="radio_check3" id="radio_check3" value="0" required="">
                NO
          </div>  



          <div class="form-group row" style="">
          <label class="col-md-4 form-check-label">
          URL Active OR Deactive
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
            <label class="col-sm-3 col-form-label">Campaign Follow Up URL:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="followupurl" required="" placeholder="Enter full URL ex:http://....">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-3 col-form-label">Choose Background image:</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="file" required="" accept="image/*">
            </div>
          </div>
          <br>
          <div class="form-group">
            <div class="col-sm-10">
              <center><input type="submit" name="campaign_submit" value="submit" class="btn btn-primary btn-lg col-md-offset-4">
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


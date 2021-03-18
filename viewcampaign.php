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
    $eid=$_GET['eid'];
    
    $query="select * from tbl_campaign where campaign_id='$eid'";
    $result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);


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
	 <div class="row">
          <a href="addcampaign.php">
           <button type="button" class="btn btn-default  pull-right" style="border-radius: 10px;color:black;margin-top: 10px;">Add Campaign</button></a>
	   <div class="panel panel-primary" >
	   	<div class="panel-heading"> 
		 <h4 align="center" >Campaign Details</h4>
		
	    </div>
	    <div class="panel-body">
		<table class="table table-bordered" id="campaign">
			<thead>
				<tr>
                    <th>Sr No</th>
					<th>Title</th>
					<th>URL</th>
					<th>StartDate</th>
					<th>EndDate</th>
					<th>Active/Deactive</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php require_once "dbconnect.php"; 
				$query = "select * from tbl_campaign";
				$res=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($res))
				{
				?>
				<tr>
                    <td><?php echo $row['campaign_id'];?></td>
					<td><?php echo $row['campaign_title'];?></td>
					<td><?php echo $row['campaign_url'];?></td>
					<td><?php echo $row['campaign_startdate'];?></td>
					<td><?php echo $row['campaign_enddate'];?></td>
					<td><?php echo $row['campaign_radio'];?></td>
					<td><a class="fa fa-pencil edit-link" href="editcampaign.php?eid=<?php echo $row['campaign_id']; ?>">&nbsp;&nbsp;
                    <a class="fa fa-trash delete-link" href="deletecampaign.php?did=<?php echo $row['campaign_id']; ?>"></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	    </div>
       </div>
     </div>
	
<script>
$(document).ready(function()
{
    $(".edit-link").click(function(){
            return confirm("Are you sure want to edit this data");
        });
      $(".delete-link").click(function(){
            return confirm("Are you sure want to delete this data");
        });
        
    });
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function()
    {
    $("#campaign").DataTable({
        order:[],
        columnDefs:[{orderable:false,
            targets:[6]}]
     
        });
});
    
</script>
<?php } ?>
</body>
</html>

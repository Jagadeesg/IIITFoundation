<html>
<head>
		<title>Dashboard</title>
		<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="assets/css/style.css" rel="stylesheet" />
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
                        	 <li><a  href="AdminDashboard.php" class="menu-top-active">Dashboard</a></li>
                            <li><a  href="viewContactlist.php">Contact Leads</a></li>
                            <li><a href="viewRequestDemo.php">Demo Registrations</a></li>
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
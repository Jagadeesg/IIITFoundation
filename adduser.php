<!-- session start -->
<?php
session_start();
include('db_connect.php');
	if(strlen($_SESSION['email'])==0)
	{   
		header('location:../index.php');
	}
	else
	{
?>

<?php 
include_once("includes/adminsidebar.php");
include("db_connect.php");
	//error_reporting( ~E_NOTICE );
	//messages are empty
	$message_sucess="";
	$message_danger="";
	$message_warning="";
		if(isset($_POST['adduser_btn']))
		{
		 $user_name=$_POST['user_name'];
	     $user_email=$_POST['user_email'];
		$user_password=md5($_POST['user_password']);
	     $imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
	
		$user_role=$_POST['user_role'];
		date_default_timezone_set('Asia/Calcutta'); 
		$user_createdOn= date('Y-m-d H:i:s');
		$user_modifiedOn="0000-00-00 00:00:00";
		$user_isDeleted="No";				//Bydefault the value is no 
		$user_modifiedBy="null";			//Bydefault the value is null
		$user_roleId= $_SESSION['role_id'];//assign session value

$upload_dir = 'user_images/';

$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000){
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
			
		
		/*select role name based on id*/

		$select_role="SELECT role_name FROM role_tbl WHERE role_id='$user_roleId'";
		$user_query=mysqli_query($conn,$select_role);
		$row_user=mysqli_fetch_assoc($user_query);
		$user_createdBy=$row_user['role_name'];
		/*end role query*/

		/*select user name from table*/
		$select_user="SELECT user_email FROM user_tbl WHERE user_email='$user_email'";
		$user_query=mysqli_query($conn,$select_user);
		$user_select=mysqli_fetch_assoc($user_query);

		/*check wheather user name exit or not*/ 
		if($user_select['user_email']){

		$message_warning="Email Id is already exit,please try another email.";
		}

		else{
		$insert="insert into user_tbl(user_name,user_email,user_password,userPic,role_id,user_createdOn,user_modifiedOn,user_createdBy,user_modifiedBy,user_isDeleted) values('$user_name','$user_email','$user_password','$userpic','$user_role','$user_createdOn','$user_modifiedOn','$user_createdBy','$user_modifiedBy','$user_isDeleted')";
		$user_query=mysqli_query($conn,$insert);
		if($user_query){
		$message_sucess="user created sucessfully";
		}
		else{
		$message_danger="something went wrong,please try again!!";
		}

		}
		/*end user name query*/ 
		}

		?>


<!-- Dashboard Boxes -->
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header bg-orange">
						<h2>ADD USER</h2></div>
						<div class="body">
							<form method="post" enctype="multipart/form-data">
								<div class="msg"></div>
								<?php if($message_warning!="") { ?>
								<div class="alert alert-warning">
									<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $message_warning; ?></center></div>
									<?php } ?>
									<?php if($message_sucess!="") { ?>
									<div class="alert alert-success">
										<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $message_sucess; ?></center></div>
										<?php } ?>
										<?php if($message_danger!="") { ?>
										<div class="alert alert-danger">
											<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $message_danger; ?></center></div><?php } ?>
											<div class="form-group">
												<label for="name" class="control-label col-sm-2">User Name</label>
												<div class="col-sm-10">
													<input type="text" name="user_name" class="form-control" required="">
												</div>
											</div>
											<div class="form-group">
												<label for="email" class="control-label col-sm-2">User Email</label>
												<div class="col-sm-10">
													<input type="text" name="user_email" class="form-control" required="">
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="control-label col-sm-2">User Password</label>
												<div class="col-sm-10">
													<input type="password" name="user_password" class="form-control" required="">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="control-label col-sm-2">User Image</label>
												<div class="col-sm-10">
													
        <input type="file" name="user_image" accept="image/*" class="form-control" required="" />
												</div>
											</div>
											<div class="form-group">
												<label for="role" class="control-label col-sm-2">Role</label><div class="col-sm-10">
													<select class="form-control" name="user_role">
														<option>--Select Role---</option>
														<?php include("db_connect.php");
														$query="select * from role_tbl";
														$res=mysqli_query($conn,$query);
														while($row=mysqli_fetch_assoc($res))
														if($row['role_isDeleted']=='No')
{
															{?> 
														<option value="<?php echo $row['role_id'];?>" ><?php echo $row['role_name'];?></option>
														<?php }}?>
													</select>
												</div>
											</div>
											<center><input type="submit" class="btn btn-warning" name="adduser_btn" value="Submit">
												<button  type="button" class="btn btn-warning"><a href="viewusers.php" style="color:#fff;text-decoration: none;">Back</a></button>
											</center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php require_once "includes/adminsidebarfooter.php"; ?>
			<?php }?>
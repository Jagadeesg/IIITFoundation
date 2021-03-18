<?php
require_once "dbconnect.php";

if(isset($_POST['reqdemo_btn']))
{
	date_default_timezone_set('Asia/Calcutta'); 
    $dt= date('Y-m-d H:i:s');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];
	$country=$country.$phone;
	
		$register="insert into request_demo(name,email,country,subject,DateTime) 
				values('$name','$email','$country','$subject','$dt')";
			if(mysqli_query($conn,$register))
			{
				echo "<script>
				window.location.href='certified-IT-Scrum-Developer.php';
			</script>";
			}
			else
			{
				echo "<script>
				alert ('Something went wrong.Please Check Once !!!');
			window.location.href='certified-IT-Scrum-Developer.php';
			</script>";
			}
			}
		
			?>


<?php 
include("dbconnect.php");
if(isset($_POST['contact']))
{
	date_default_timezone_set('Asia/Calcutta'); 
    $dt= date('Y-m-d H:i:s');
    $name=$_POST['myName'];
    $number= $_POST['country'].$_POST['myNumber'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $insert="insert into contact_user(name,contact_number,email,subject,DateTime) values('$name','$number','$email','$subject','$dt')";
$data=mysqli_query($conn,$insert);
if($data)
{
echo "<script>
window.location.href='certified-IT-Scrum-Developer.php';
</script>";
}
else{
	echo "<script>
	alert ('Something went wrong.Please Check Once !!!');
window.location.href='certified-IT-Scrum-Developer.php';
</script>";
}
}
?>



<?php
require_once("dbconnect.php");

$query ="SELECT * FROM country";
$results =mysqli_query($conn,$query);
?><!DOCTYPE html>
<html>
	<head>
		<title>Certified IT Scrum Developer | CITSD | IIBA Certificate</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="Certified IT Scrum Developer,CITSD,certified scrum developer,iiba certification,agile scrum master certification,scrum master certification,scrum master training,scrum training,agile scrum master,scrum certification."/>
		<meta name="description" content="CITSD – Certified IT Scrum Developer, an Internationally Recognised Certificate of Developers from IVY Global Academy to work on Agile/Scrum projects."/>
<meta name="msvalidate.01" content="41D3FCA23F7ECCC428300B28659B5E4A" />
 <link rel="canonical" href="https://www.coepd.us/certified-it-scrum-developer.html" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/theme.css"/>
		 <link rel="icon" href="./img/favi.png" />
		<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>  
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110125952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110125952-1');
</script>

		

 <!--Start of Zopim Live Chat Script-->
   <script>
       window.$zopim || (function (d, s) {s
           var z = $zopim = function (c) { z._.push(c) }, $ = z.s =
d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
   z.set.
_.push(o)
}; z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");
           $.src = 'https://v2.zopim.com/?3Kwl4vq5bdp1Cond1srbgQDa9qhPM5Fg'; z.t = +new Date; $.
type = "text/javascript"; e.parentNode.insertBefore($, e)
       })(document, "script");
   </script>
   <!--End of Zopim Live Chat Script-->
<script>

       $zopim(function () {
           $zopim.livechat.theme.setTheme('simple');
           $zopim.livechat.theme.setColor('#2a3990');
           $zopim.livechat.badge.setLayout('image_right');
           $zopim.livechat.badge.setText('Online - Click here to chat');
           $zopim.livechat.window.setColor('#2a3990');
           $zopim.livechat.concierge.setAvatar('www.coepd.us/assets/COEPD-LLC-FAVICON.png');
           $zopim.livechat.concierge.setName('Coepd Agent1');
           $zopim.livechat.concierge.setTitle('Coepd LLC');
           $zopim.livechat.badge.setImage('http://coepd.us/assets/COEPD-LLC-FAVICON.png');
           $zopim.livechat.theme.reload(); // apply new theme settings
       });

   </script>   

	</head>
	<body>
<header>
	<div class="img-coepd"><img src="img/coepd-us.jpg" alt="coepdicon"></div>
	<div class="img-coepdus"><img src="img/coepd.png" alt="coepdusicon"></div>
	<div class="img-iiba"><img src="img/iiba.jpg" alt="iibaicon"></div>
	<!--banner code-->
	<?php include_once('banner.php') ?>
	<div class="header-list">
		<ul>
			<li id="OPborder"><a href="#form-inline">Contact Us</a></li>
			
			<li id="demo1"><a href="#">Request Demo</a></li>
			<li data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>
		</ul>
	</div>
			<div class="phone">
				<img src="./img/call.png" alt="mobileicon"/>469-287-7949
			</div>
			<div class="email">
				<img src="./img/email.png" alt="emailicon"/>trainings@coepd.us
			</div>
			<div class="onlinepayment">
				<form class="top-main-right-row" name='PrePage' method='post' action='https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx'
                               target="_blank">
                               <input type='hidden' name='LinkId' value='e4fa0160-ab82-4467-a32f-b7763b6e76ee' />
                               <button class="btn btn-warning btn-sm" value='Online Payment'>Online Payment</button>
				</form>
			</div>
	
</header>
	<!-- navigation include -->
	<?php include_once("navigation.php");?>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
           <p class="modal-title nav-heading1">LOGIN PAGE</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
		  <form action="login.php" method="post" id="frmLogin">
		  	
			  <div class="form-group">
				<label>Email address:</label>
				<input type="email" class="form-control" name="email" id="email" value="<?php if(isset($_COOKIE["login"])) { echo $_COOKIE["login"]; } ?>"  required>
			  </div>
			  <div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" name="password" id="pwd" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"  required>
			  </div>
			  <div class="form-group form-check">
				<label class="form-check-label">
				  <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["login"])) { ?> checked <?php } ?> />Remember Me
				</label>
			  </div>
			  <input type="submit" name="login_btn" class="btn btn-primary" value="Login">
		  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</div>

<div class="demo2" id="demo2">
	<div class="container demo-container">	
		<div class="demobox">
			<div class="democross">X</div>
		</div>
		<p class="nav-heading1 text-center">Request for Demo</p>
	  <form  name="request_demo" method="post" id="location" onsubmit="reqdemo()">
	  	 <?php require_once"contactuser3.php";?>
	  	<div class="col-md-12 ">
	  			<label>Name:<span class="demostar">*</span></label>
		<input type="text" id="name1" name="name" placeholder="Your name.." required></div>
		<div class="col-md-12 ">
		<label>Email Address:<span class="demostar">*</span></label>
		<input type="text" id="email1" name="email" placeholder="Your email.." required></div>
	
	<div class="row">
		<div class="col-md-6">
		<label>Country:<span class="demostar">*</span></label>
			<select name="country" id="country-list" class="demoInputBox" required="">
				<option value="">Select Country</option>
						<option value="Andorra (+376)">AD - Andorra (+376)</option>
				<option value="United Arab Emirates (+971)">AE - United Arab Emirates (+971)</option>
				<option value="Afghanistan (+93)">AF - Afghanistan (+93)</option>
				<option value="Antigua And Barbuda (+1268)">AG - Antigua And Barbuda (+1268)</option>
				<option value="Anguilla (+1264)">AI - Anguilla (+1264)</option>
				<option value="Albania (+355)">AL - Albania (+355)</option>
				<option value="Armenia (+374)">AM - Armenia (+374)</option>
				<option value="Netherlands Antilles (+599">AN - Netherlands Antilles (+599)</option>
				<option value="Angola (+244)">AO - Angola (+244)</option>
				<option value="Antarctica (+672)">AQ - Antarctica (+672)</option>
				<option value="Argentina (+54)">AR - Argentina (+54)</option>
				<option value="American Samoa (+1684)">AS - American Samoa (+1684)</option>
				<option value="Austria (+43)">AT - Austria (+43)</option>
				<option value="Australia (+61)">AU - Australia (+61)</option>
				<option value="Aruba (+297)">AW - Aruba (+297)</option>
				<option value="Azerbaijan (+994)">AZ - Azerbaijan (+994)</option>
				<option value="Bosnia And Herzegovina (+387)">BA - Bosnia And Herzegovina (+387)</option>
				<option value="Barbados (+1246)">BB - Barbados (+1246)</option>
				<option value="Bangladesh (+880)">BD - Bangladesh (+880)</option>
				<option value="Belgium (+32)">BE - Belgium (+32)</option>
				<option value="Burkina Faso (+226)">BF - Burkina Faso (+226)</option>
				<option value="Bulgaria (+359)">BG - Bulgaria (+359)</option>
				<option value="Bahrain (+973)">BH - Bahrain (+973)</option>
				<option value="Burundi (+257)">BI - Burundi (+257)</option>
				<option value="Benin (+229)">BJ - Benin (+229)</option>
				<option value="Saint Barthelemy (+590)">BL - Saint Barthelemy (+590)</option>
				<option value="Bermuda (+1441)">BM - Bermuda (+1441)</option>
				<option value="Brunei Darussalam (+673)">BN - Brunei Darussalam (+673)</option>
				<option value="Bolivia (+591)">BO - Bolivia (+591)</option>
				<option value="Brazil (+55)">BR - Brazil (+55)</option>
				<option value="Bahamas (+1242)">BS - Bahamas (+1242)</option>
				<option value="Bhutan (+975)">BT - Bhutan (+975)</option>
				<option value="Botswana (+267)">BW - Botswana (+267)</option>
				<option value="Belarus (+375)">BY - Belarus (+375)</option>
				<option value="Belize (+501)">BZ - Belize (+501)</option>
				<option value="Canada (+1)">CA - Canada (+1)</option>
				<option value="Cocos (keeling) Islands (+61)">CC - Cocos (keeling) Islands (+61)</option>
				<option value="Congo, The Democratic Republic Of The (+243)">CD - Congo, The Democratic Republic Of The (+243)</option>
				<option value="Central African Republic (+236)">CF - Central African Republic (+236)</option>
				<option value="Congo (+242)">CG - Congo (+242)</option>
				<option value="Switzerland (+41)">CH - Switzerland (+41)</option>
				<option value="Cote D Ivoire (+225)">CI - Cote D Ivoire (+225)</option>
				<option value="Cook Islands (+682)">CK - Cook Islands (+682)</option>
				<option value="Chile (+56)">CL - Chile (+56)</option>
				<option value="Cameroon (+237)">CM - Cameroon (+237)</option>
				<option value="China (+86)">CN - China (+86)</option>
				<option value="Colombia (+57)">CO - Colombia (+57)</option>
				<option value="Costa Rica (+506)">CR - Costa Rica (+506)</option>
				<option value="Cuba (+53)">CU - Cuba (+53)</option>
				<option value="Cape Verde (+238)">CV - Cape Verde (+238)</option>
				<option value="Christmas Island (+61)">CX - Christmas Island (+61)</option>
				<option value="Cyprus (+357)">CY - Cyprus (+357)</option>
				<option value="Czech Republic (+420)">CZ - Czech Republic (+420)</option>
				<option value="Germany (+49)">DE - Germany (+49)</option>
				<option value="Djibouti (+253)">DJ - Djibouti (+253)</option>
				<option value="Denmark (+45)">DK - Denmark (+45)</option>
				<option value="Dominica (+1767)">DM - Dominica (+1767)</option>
				<option value="Dominican Republic (+1809)">DO - Dominican Republic (+1809)</option>
				<option value="Algeria (+213)">DZ - Algeria (+213)</option>
				<option value="Ecuador (+593)">EC - Ecuador (+593)</option>
				<option value="Estonia (+372)">EE - Estonia (+372)</option>
				<option value="Egypt (+20)">EG - Egypt (+20)</option>
				<option value="Eritrea (+291)">ER - Eritrea (+291)</option>
				<option value="Spain (+34)">ES - Spain (+34)</option>
				<option value="Ethiopia (+251)">ET - Ethiopia (+251)</option>
				<option value="Finland (+358)">FI - Finland (+358)</option>
				<option value="Fiji (+679)">FJ - Fiji (+679)</option>
				<option value="Falkland Islands (malvinas) (+500)">FK - Falkland Islands (malvinas) (+500)</option>
				<option value="Micronesia, Federated States Of (+691)">FM - Micronesia, Federated States Of (+691)</option>
				<option value="Faroe Islands (+298)">FO - Faroe Islands (+298)</option>
				<option value="France (+33)">FR - France (+33)</option>
				<option value="Gabon (+241)">GA - Gabon (+241)</option>
				<option value="United Kingdom (+44)">GB - United Kingdom (+44)</option>
				<option value="Grenada (+1473)">GD - Grenada (+1473)</option>
				<option value="Georgia (+995)">GE - Georgia (+995)</option>
				<option value="Ghana (+233)">GH - Ghana (+233)</option>
				<option value="Gibraltar (+350)">GI - Gibraltar (+350)</option>
				<option value="Greenland (+299)">GL - Greenland (+299)</option>
				<option value="Gambia (+220)">GM - Gambia (+220)</option>
				<option value="Guinea (+224)">GN - Guinea (+224)</option>
				<option value="Equatorial Guinea (+240)">GQ - Equatorial Guinea (+240)</option>
				<option value="Greece (+30)">GR - Greece (+30)</option>
				<option value="Guatemala (+502)">GT - Guatemala (+502)</option>
				<option value="Guam (+1671)">GU - Guam (+1671)</option>
				<option value="Guinea-bissau (+245)">GW - Guinea-bissau (+245)</option>
				<option value="Guyana (+592)">GY - Guyana (+592)</option>
				<option value="Hong Kong (+852)">HK - Hong Kong (+852)</option>
				<option value="Honduras (+504)">HN - Honduras (+504)</option>
				<option value="Croatia (+385)">HR - Croatia (+385)</option>
				<option value="Haiti (+509)">HT - Haiti (+509)</option>
				<option value="Hungary (+36)">HU - Hungary (+36)</option>
				<option value="Indonesia (+62)">ID - Indonesia (+62)</option>
				<option value="Ireland (+353)">IE - Ireland (+353)</option>
				<option value="Israel (+972)">IL - Israel (+972)</option>
				<option value="Isle Of Man (+44)">IM - Isle Of Man (+44)</option>
				<option value="India (+91)">IN - India (+91)</option>
				<option value="Iraq (+964)">IQ - Iraq (+964)</option>
				<option value="Iran, Islamic Republic Of (+98)">IR - Iran, Islamic Republic Of (+98)</option>
				<option value="Iceland (+354)">IS - Iceland (+354)</option>
				<option value="Italy (+39)">IT - Italy (+39)</option>
				<option value="Jamaica (+1876)">JM - Jamaica (+1876)</option>
				<option value="Jordan (+962)">JO - Jordan (+962)</option>
				<option value="Japan (+81)">JP - Japan (+81)</option>
				<option value="Kenya (+254)">KE - Kenya (+254)</option>
				<option value="Kyrgyzstan (+996)">KG - Kyrgyzstan (+996)</option>
				<option value="Cambodia (+855)">KH - Cambodia (+855)</option>
				<option value="Kiribati (+686)">KI - Kiribati (+686)</option>
				<option value="Comoros (+269)">KM - Comoros (+269)</option>
				<option value="Saint Kitts And Nevis (+1869)">KN - Saint Kitts And Nevis (+1869)</option>
				<option value="Korea Democratic Peoples Republic Of (+850)">KP - Korea Democratic Peoples Republic Of (+850)</option>
				<option value="Korea Republic Of (+82)">KR - Korea Republic Of (+82)</option>
				<option value="Kuwait (+965)">KW - Kuwait (+965)</option>
				<option value="Cayman Islands (+1345)">KY - Cayman Islands (+1345)</option>
				<option value="Kazakstan (+7)">KZ - Kazakstan (+7)</option>
				<option value="Lao Peoples Democratic Republic (+856)">LA - Lao Peoples Democratic Republic (+856)</option>
				<option value="Lebanon (+961)">LB - Lebanon (+961)</option>
				<option value="Saint Lucia (+1758)">LC - Saint Lucia (+1758)</option>
				<option value="Liechtenstein (+423)">LI - Liechtenstein (+423)</option>
				<option value="Sri Lanka (+94)">LK - Sri Lanka (+94)</option>
				<option value="Liberia (+231)">LR - Liberia (+231)</option>
				<option value="Lesotho (+266)">LS - Lesotho (+266)</option>
				<option value="Lithuania (+370)">LT - Lithuania (+370)</option>
				<option value="Luxembourg (+352)">LU - Luxembourg (+352)</option>
				<option value="Latvia (+371)">LV - Latvia (+371)</option>
				<option value="Libyan Arab Jamahiriya (+218)">LY - Libyan Arab Jamahiriya (+218)</option>
				<option value="Morocco (+212)">MA - Morocco (+212)</option>
				<option value="Monaco (+377)">MC - Monaco (+377)</option>
				<option value="Moldova, Republic Of (+373)">MD - Moldova, Republic Of (+373)</option>
				<option value="Montenegro (+382)">ME - Montenegro (+382)</option>
				<option value="Saint Martin (+1599)">MF - Saint Martin (+1599)</option>
				<option value="Madagascar (+261)">MG - Madagascar (+261)</option>
				<option value="Marshall Islands (+692)">MH - Marshall Islands (+692)</option>
				<option value="Macedonia, The Former Yugoslav Republic Of (+389)">MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
				<option value="Mali (+223)">ML - Mali (+223)</option>
				<option value="Myanmar (+95)">MM - Myanmar (+95)</option>
				<option value="Mongolia (+976)">MN - Mongolia (+976)</option>
				<option value="Macau (+853)">MO - Macau (+853)</option>
				<option value="Northern Mariana Islands (+1670)">MP - Northern Mariana Islands (+1670)</option>
				<option value="Mauritania (+222)">MR - Mauritania (+222)</option>
				<option value="Montserrat (+1664)">MS - Montserrat (+1664)</option>
				<option value="Malta (+356)">MT - Malta (+356)</option>
				<option value="Mauritius (+230)">MU - Mauritius (+230)</option>
				<option value="Maldives (+960)">MV - Maldives (+960)</option>
				<option value="Malawi (+265)">MW - Malawi (+265)</option>
				<option value="Mexico (+52)">MX - Mexico (+52)</option>
				<option value="Malaysia (+60)">MY - Malaysia (+60)</option>
				<option value="Mozambique (+258)">MZ - Mozambique (+258)</option>
				<option value="Namibia (+264)">NA - Namibia (+264)</option>
				<option value="New Caledonia (+687)">NC - New Caledonia (+687)</option>
				<option value="Niger (+227)">NE - Niger (+227)</option>
				<option value="Nigeria (+234)">NG - Nigeria (+234)</option>
				<option value="Nicaragua (+505)">NI - Nicaragua (+505)</option>
				<option value="Netherlands (+31)">NL - Netherlands (+31)</option>
				<option value="Norway (+47)">NO - Norway (+47)</option>
				<option value="Nepal (+977)">NP - Nepal (+977)</option>
				<option value="Nauru (+674)">NR - Nauru (+674)</option>
				<option value="Niue (+683)">NU - Niue (+683)</option>
				<option value="New Zealand (+64)">NZ - New Zealand (+64)</option>
				<option value="Oman (+968)">OM - Oman (+968)</option>
				<option value="Panama (+507)">PA - Panama (+507)</option>
				<option value="Peru (+51)">PE - Peru (+51)</option>
				<option value="French Polynesia (+689)">PF - French Polynesia (+689)</option>
				<option value="Papua New Guinea (+675)">PG - Papua New Guinea (+675)</option>
				<option value="Philippines (+63)">PH - Philippines (+63)</option>
				<option value="Pakistan (+92)">PK - Pakistan (+92)</option>
				<option value="Poland (+48)">PL - Poland (+48)</option>
				<option value="Saint Pierre And Miquelon (+508)">PM - Saint Pierre And Miquelon (+508)</option>
				<option value="PN - Pitcairn (+870)">PN - Pitcairn (+870)</option>
				<option value="Puerto Rico (+1)">PR - Puerto Rico (+1)</option>
				<option value="Portugal (+351)">PT - Portugal (+351)</option>
				<option value="Palau (+680)">PW - Palau (+680)</option>
				<option value="Paraguay (+595)">PY - Paraguay (+595)</option>
				<option value="Qatar (+974)">QA - Qatar (+974)</option>
				<option value="Romania (+40)">RO - Romania (+40)</option>
				<option value="Serbia (+381)">RS - Serbia (+381)</option>
				<option value="Russian Federation (+7)">RU - Russian Federation (+7)</option>
				<option value="Rwanda (+250)">RW - Rwanda (+250)</option>
				<option value="Saudi Arabia (+966)">SA - Saudi Arabia (+966)</option>
				<option value="Solomon Islands (+677)">SB - Solomon Islands (+677)</option>
				<option value="Seychelles (+248)">SC - Seychelles (+248)</option>
				<option value="Sudan (+249)">SD - Sudan (+249)</option>
				<option value="Sweden (+46)">SE - Sweden (+46)</option>
				<option value="Singapore (+65)">SG - Singapore (+65)</option>
				<option value="Saint Helena (+290)">SH - Saint Helena (+290)</option>
				<option value="Slovenia (+386)">SI - Slovenia (+386)</option>
				<option value="Slovakia (+421)">SK - Slovakia (+421)</option>
				<option value="Sierra Leone (+232)">SL - Sierra Leone (+232)</option>
				<option value="San Marino (+378)">SM - San Marino (+378)</option>
				<option value="Senegal (+221)">SN - Senegal (+221)</option>
				<option value="Somalia (+252)">SO - Somalia (+252)</option>
				<option value="Suriname (+597)">SR - Suriname (+597)</option>
				<option value="Sao Tome And Principe (+239)">ST - Sao Tome And Principe (+239)</option>
				<option value="El Salvador (+503)">SV - El Salvador (+503)</option>
				<option value="Syrian Arab Republic (+963)">SY - Syrian Arab Republic (+963)</option>
				<option value="Swaziland (+268)">SZ - Swaziland (+268)</option>
				<option value="Turks And Caicos Islands (+1649)">TC - Turks And Caicos Islands (+1649)</option>
				<option value="Chad (+235)">TD - Chad (+235)</option>
				<option value="Togo (+228)">TG - Togo (+228)</option>
				<option value="Thailand (+66)">TH - Thailand (+66)</option>
				<option value="Tajikistan (+992)">TJ - Tajikistan (+992)</option>
				<option value="Tokelau (+690)">TK - Tokelau (+690)</option>
				<option value="Timor-leste (+670)">TL - Timor-leste (+670)</option>
				<option value="Turkmenistan (+993)">TM - Turkmenistan (+993)</option>
				<option value="Tunisia (+216)">TN - Tunisia (+216)</option>
				<option value="Tonga (+676)">TO - Tonga (+676)</option>
				<option value="Turkey (+90)">TR - Turkey (+90)</option>
				<option value="Trinidad And Tobago (+1868)">TT - Trinidad And Tobago (+1868)</option>
				<option value="Tuvalu (+688)">TV - Tuvalu (+688)</option>
				<option value="Taiwan, Province Of China (+886">TW - Taiwan, Province Of China (+886)</option>
				<option value="Tanzania, United Republic Of (+255)">TZ - Tanzania, United Republic Of (+255)</option>
				<option value="Ukraine (+380)">UA - Ukraine (+380)</option>
				<option value="Uganda (+256)">UG - Uganda (+256)</option>
				<option value="United States (+1)">US - United States (+1)</option>
				<option value="Uruguay (+598)">UY - Uruguay (+598)</option>
				<option value="Uzbekistan (+998)">UZ - Uzbekistan (+998)</option>
				<option value="Holy See (vatican City State) (+39)">VA - Holy See (vatican City State) (+39)</option>
				<option value="Saint Vincent And The Grenadines (+1784)</">VC - Saint Vincent And The Grenadines (+1784)</option>
				<option value="Venezuela (+58)">VE - Venezuela (+58)</option>
				<option value="Virgin Islands, British (+1284)">VG - Virgin Islands, British (+1284)</option>
				<option value="Virgin Islands, U.s. (+1340)">VI - Virgin Islands, U.s. (+1340)</option>
				<option value="Viet Nam (+84)">VN - Viet Nam (+84)</option>
				<option value="Vanuatu (+678)">VU - Vanuatu (+678)</option>
				<option value="Wallis And Futuna (+681)">WF - Wallis And Futuna (+681)</option>
				<option value="Samoa (+685)">WS - Samoa (+685)</option>
				<option value="Kosovo (+381)">XK - Kosovo (+381)</option>
				<option value="Yemen (+967)">YE - Yemen (+967)</option>
				<option value="Mayotte (+262)">YT - Mayotte (+262)</option>
				<option value="South Africa (+27)">ZA - South Africa (+27)</option>
				<option value="Zambia (+260)">ZM - Zambia (+260)</option>
				<option value="Zimbabwe (+263)">ZW - Zimbabwe (+263)</option>
			</select>
		</div>
			<div class="col-md-6">
	     <label>Phone number:<span class="demostar">*</span></label><br>
		     <input type="text" id="phone1" name="phone" placeholder="Your phone number.." pattern="[0-9]{10}" title="Phone number must be 10 digits" required>
		 </div>
	</div>
<div class="col-md-12 ">
		<label>Your Query</label><br>
		<textarea id="message1" name="subject" placeholder="Write something.."  style="height:100px" ></textarea><br>
	</div>
                 <input type="hidden" name="sendmethod" value="smtp">
		<input class="center-block " id="demobutton" type="submit" value="Submit" name="reqdemo_btn" >
	  </form>
	</div>

</div>

      <!-- Start Body Content -->
	 <div class="container-fluid page-heading">
		<div class="row">
			<h1>CERTIFIED IT SCRUM DEVELOPER (CITSD)</h1>
		</div>
	</div> 
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-7 col-lg-9 col-xl-9">
			<div class="page-content1">
				<b>Certified IT Scrum Developer (CITSD)</b>
                <p><strong>Exam Code : </strong>CITSD</p>
                <p><img src="img/CISTD.png" alt="CITSD"/ class="img-fluid"></p>
                <strong>About Exam Course</strong>
                <p>The Scrum Developer role is one who actually develops software following the agile framework. She/he is basically a programmer with hands on experience on programming languages and understands the business logic.</p>
                <strong>Target Audience</strong>
                <p>Software professionals who come from core technical background and who has strong knowledge in developing software applications can opt for CITSD certification</p>
                <strong>The Roles may include:</strong>
                <ul>
                  <li>Software Developers</li>
                  <li>Team Leads</li>
                  <li>Tech Leads</li>
                </ul>
                <strong>Register for Exam </strong>
                <p>CITSD - Certified IT Scrum Developer – USD 119</p>
               <img src="img/CertificateCITSD.jpg" alt="CITSD Certificate" width="600" class="img-fluid" style=" display: block;margin-left: auto;margin-right: auto;"/>
			</div>
		</div>
		<div class="col-sm-12 col-md-5 col-lg-3 col-xl-3 floating-box"> <?php
			include("dbconnect.php");
			$select_news="select * from news";
			$query=mysqli_query($conn,$select_news);

			while($news=mysqli_fetch_assoc($query)){
			
			?>

			<div class="floating-box1">
				<b><center>Training Calender</center></b>
				<?php echo ($news['newsDescription']); }?>
			</div>
			<div class="floating-box2">
					<b style="font-family:callibri;font-size:30px;color:#CD7F32;"><center>Quick Links</center></b>
					<ul class="quick-links">
					<!-- Trigger the modal with a button -->
						<li><a data-toggle="modal" data-target="#quick">Who is a Business Analyst?</a></li>						
							  <!-- Modal -->
							  <div class="modal fade" id="quick" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">Who is a Business Analyst?</p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <p>A Business Analyst is someone who Analyses business domain (real or hypothetical) and documents its 
									  business or processes or systems by assessing the performance, behavior of the organization and the business 
									  Model. Business analyst provides solutions by integrating with technology and Process improvements. Business 
									  Analysis is a tool which helps new or Existing Businesses to reach the next level with the help of technology. 
									  It helps to understand what current position is and what needs to be done to grow as an organization and to grow in the market.</p>
									</div>
								  </div>
								  
								</div>
							  </div>						
						<li><a data-toggle="modal" data-target="#quick1">Where and what is the importance of a business analyst ? </a></li>
						 <!-- Modal -->
							  <div class="modal fade" id="quick1" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">Where and what is the importance of a business analyst ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <b>Business Analysis can be used in following areas & Industries</b>
									  <ul class="quick1">
										<li>Finance, Banking, Insurance, Telecoms, IT& Software services, Government and so on.</li>
										<li>BA’s work is mostly on projects at a fairly high level of abstraction, Requirements and Business Modeling, so
										BA’s can switch between any and all industries.</li>
										<li>NON-IT organizations with BA professionals can help to find smart solutions and grow in the Business Areas and markets.</li>
										<li>BA skills helps IT industry in process re-engineering and Cost effective solutions to fasten the reachability in the industries.</li>
										<li>Business Analysts can take a shape in sales planning, operations scaling, and strategy devising or even in developmental process.</li>
										<li>Business Analysis's can grow in Management Areas, Technological areas, Sales, Strategic planning for organization, senior executive positions, Business Architects, Analytical areas.</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
							  </div>		
						<li><a data-toggle="modal" data-target="#quick2">What are the core skills of a business analyst ? </a></li>
						<div class="modal fade" id="quick2" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What are the core skills of a business analyst ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <b>BA core skills to have are</b>
									  <ul class="quick1">
										<li>Communication skills</li>
										<li>Documentation skills – RWR(Read-Write-Review)</li>
										<li>Problem Solving skills</li>
										<li>Adoptability</li>
										<li>Negotiation skills</li>
										<li>Drawing skills of flow diagrams for the process with help of tools</li>
										<li>Management skills – People/Requirements</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>		
						<li><a data-toggle="modal" data-target="#quick3">What is business analysis ? </a></li>
						<div class="modal fade" id="quick3" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What is business analysis ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <ul class="quick1">
										<li>Business analysis is a process of identifying the business needs and provide IT solutions to business problems.</li>
										<li>IT Solutions often include development component or process improvement or organizational change.</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick4">Who can become a Business analyst ? </a></li>
						<div class="modal fade" id="quick4" role="dialog"tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">Who can become a Business analyst ?</p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <ul class="quick1">
										<li>Resources who have Good communication Skills, Some work experience in any process and Manage Team.</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick5">What are the Prerequisites to become a BA ? </a></li>
							<div class="modal fade" id="quick5" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What are the Prerequisites to become a BA ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									<b>Resource who have</b>
									  <ul class="quick1">
										<li>Good Communication Skills</li>
										<li>Graduation (minimum)</li>
										<li>Desirable-Work experience on any process or Domain or IT projects</li>
										<li>BA Skills ( we provide training on this)</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick6">Skill set required by a BA ? </a></li>
						<div class="modal fade" id="quick6" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">Skill set required by a BA ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									<b>8 Skill Areas</b>
									  <ul class="quick1">
										<li>BA Directives</li>
										<li>BA Competencies</li>
										<li>Software Development Life Cycles</li>
										<li>Functional Skills ( BPM , Domain Model)</li>
										<li>Technical Skills ( OOA, UML)</li>
										<li>Requirements Engineering</li>
										<li>Tools and Document</li>
										<li>BA Strategy</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick7">What is the difference between Business Analyst & SME ? </a></li>
							<div class="modal fade" id="quick7" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What is the difference between Business Analyst & SME ?  </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <ul class="quick1">
										<li>A Business Analyst job is to make sure that the IT project is developed and delivered as per the Client’s Need whereas an SME provides knowledge and gives clarity on the process or the Domain.</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick8">What are the BA Certifications available and eligibility criteria ? </a></li>
						<div class="modal fade" id="quick8" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What are the BA Certifications available and eligibility criteria ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									  <ul class="quick1">
										<li>There are number of International certification Bodies for BA Vertical, like IIBA, IVY Global Academy, PMI which have recommended Body of Knowledge and they conduct exams and Certify Professionals on the knowledge.</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>	
						<li><a data-toggle="modal" data-target="#quick9">What are the major roles and responsibilities of a BA ? </a></li>
						<div class="modal fade" id="quick9" role="dialog" tabindex="-1">
								<div class="modal-dialog modal-lg">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <p class="modal-title">What are the major roles and responsibilities of a BA ? </p>
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
									<b>Three Main Responsibilities</b>
									  <ul class="quick1">
										<li>Client Interactions</li>
										<li>Ownership of requirements</li>
										<li>Process Re-Engineering</li>
									  </ul>
									</div>
								  </div>
								  
								</div>
						</div>
					</ul>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
	
	<?php include_once("footer.php");?>
	</body>
</html>

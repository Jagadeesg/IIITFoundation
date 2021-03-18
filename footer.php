<!--Testimonials-->
<h2 class="testimonials-heading" style="text-align:center;">Our Happy <span style="color:#08C;">Clients</span> Say it All</h2>
<div class="slideshow-container">

        <?php
          $query='select * from testimonials  where slider="1" ORDER BY testimonial_id DESC';
          $res=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($res))
          {
            
            $text=$row['testimonialstext'];
            $testimonialsauthor=$row['authorName'];
    
          ?>
        <div class="mySlides">
          <q><?php echo $text ?></q>
          <p class="author">- <?php echo $testimonialsauthor ?></p>
        </div>
        <?php } ?> 
</div>

    <div class="dot-container" style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
    </div>
<!--end of testimonials--> 
<footer class="container-fluid text-center">
	<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 help">
            <h2>Help and Information</h2>
            <p><a href="business-analyst-online-training.html">IIT Advisory Services</a></p>
            <p><a href="business-analyst-online-mentoring.html">IIT Pool Share Money</a></p>
            <p><a href="certifications.html">Organic Agro</a></p>   
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 usefullinks">
            <h2>Useful Links</h2>
            <p><a href="privacy-policy.html">Privacy Policy</a></p>
            <p><a href="refund-policy.html">Refund Policy</a></p>
            <p><a href="terms-of-use.html">Terms of Use</a></p>
            
        </div>
        
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <h2>Stay Connected</h2>
           <a target="_blank" href="https://www.facebook.com/COEPDOnlineTraining/"> <img class="zoom" src="img/facebook.png" width="50" height="50" alt="facebook"/> </a>
           <a target="_blank" href="https://twitter.com/CoepdLLC"><img class="zoom" src="img/Twitter.png" width="50" height="50" alt="twitter"/></a>
           <a target="_blank" href="https://plus.google.com/+CenterOfExcellenceforProfessionalDevelopmentCOEPD"><img class="zoom" src="img/google.png" width="50" height="50" alt="googleplus"/></a><br /><br />
           <a target="_blank" href="https://www.pinterest.com/coepdllc/"><img class="zoom" src="img/Pinterest.png" width="50" height="50" alt="pinterest"/></a>
           <a target="_blank" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFKpuol-bL1GAAAAWQnMEwQbH7BQrgdm_XR3nNkAm3TsCz9w735HFXEJnZfnCx3ORzVh0WUuSeCqlx3brQMGkmzQnFYiI_LGgQdbXkT-oDmpurcOwINjgs4Fb0VxLwdDEwj4aQ=&originalReferer=http://coepd.us/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fcoepdus"> <img class="zoom" src="img/Linkedin.png" width="50" height="50" alt="linkedin"></a>
           <a target="_blank" href="https://www.youtube.com/channel/UCnxhgN0CUMoK0J-mzp4C5KA"> <img class="zoom" src="img/Youtube.png" width="50" height="50" alt="youtube"/></a>
        </div>
	</div>
	
</footer>
<div class="footer">
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
             <div class="footer-chatbox">
               <div class="container" >
					  <form class="form-inline" name="myForm" id="form-inline" action="index.php" method="post" onsubmit="reqcontact()" >
					  	<?php require_once"Contactuser2.php";?>
       
						<div class="col-md-12 row">
						<label for="fname">Name:</label>
						<input type="text" id="fname" name="myName"  placeholder="Your name.." required >
					    
            </div>
            <div class="col-md-6 row">
              <label>Country:</label>
              <select name="country"  class="demoInputBox" required="">
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
      <div class="col-md-6 row">
					<label>Phone:</label>
					<input type="text" id="number" name="myNumber"  placeholder="Your contact number.." pattern= "[0-9]{10}" title="Phone number must be 10 digits" required>
						</div>
            <div class="col-md-12 row">
  						<label>Email:</label>
  						<input type="email" name="email"  placeholder="Your email.." required><br />
          </div>
          <div class="col-md-12 row">
						<label>Your Query:</label>
						<textarea id="subject" name="subject"  placeholder="Write something.." required style="height:50px"></textarea>
						
          </div>   <input type="hidden" name="sendmethod" value="smtp" />
						<!--  <button class="btn-primary form-submit" ng-disabled="myForm.$invalid" type="button" id="submit">Submit</button> -->
						<input type="submit" class="form-submit" name="contact" value="Submit" >
					  </form>
					 
				</div>
             </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
             <div class="footer-address">
                 <div class="footer-image">
						<img src="img/coepd-us.jpg"  alt="coepd icon"/>
				</div><br/>
                 <div class="a">SR Nagar</div>
                 <div class="b">Hyderabad</div>
                 <div class="c">IND : +91 934024593</div>
                 <div class="b">Email: contactus@iitfoundation.org</div>
                 <br/>
			 <div class="footer-logo">
				<i>Powered by</i><a href="http://sathyamedha.com/" target="_blank"><img src="img/90-75-01.png"   alt="smbs icon"/></a>
			 </div>
			 
        </div>
       

    </div>
    
</div>
</div>


<div class="scroll-sticky-bottom">
	<div class="row">
		<div  class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-xl-2  scroll-sticky-bottom1"  onclick="topFunction()" id="myBtn">
			<img src="./img/demo.png" alt="icon"/><p>Request&nbsp;Demo</p>
		</div>
		<div  class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 scroll-sticky-bottom2">
			<img src="./img/call.png" alt="icon"/><p>+91 934024593</p>
		</div>
		<div  class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 scroll-sticky-bottom3">
			<img src="./img/email.png" alt="icon"/><p>contactus@iit.com</p>
		</div>
		
	</div>
</div>
<script>
     function reqdemo()
     {
      alert("Your Details submitted successfully.We will get back to you soon");

     }
   </script>
   <script>
     function reqcontact()
     {
      alert("Your Details submitted successfully.We will get back to you soon");

     }
   </script>
<script>
var slideIndex = 1;
var timer = null;
showSlides(slideIndex);

function plusSlides(n) {
  clearTimeout(timer);
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  clearTimeout(timer);
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n==undefined){n = ++slideIndex}
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  timer = setTimeout(showSlides, 9000);
} 
</script>

	 <script> 
	     window.sr = ScrollReveal();  
		 sr.reveal('#g1', {
		  duration: 2000, 
		   distance:'300px', 
		   origin:'right', 
		   viewFactor: 0.2 
		 }); 	
		sr.reveal('#g2', {
		  duration: 2000, 
		   distance:'300px', 
		   origin:'left', 
		   viewFactor: 0.2 
		 }); 		
	 </script>

 
      
      


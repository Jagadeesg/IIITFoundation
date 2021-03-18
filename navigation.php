<nav class="navbar navbar-expand-md  sticky-top navbar1">
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse-target">
			<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapse-target">
		<ul class="navbar-nav div1">
			<li class="nav-item">
				<a class="nav-link" href="index.html">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="dropdown" data-target="dropdown_target" href="#">About Us	
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">About Us</p>
								<p>Our Team will helps in increse your trade margin,Earn in stock market, Increase your sensex today, Get advisor while trading, Can decrease your risk-Risk advisory, Auto trading to increase profits, Know the forecasts while tradin..</p>
							
							<a href="about-us.html" class="btn btn-info btn-lg nav-btn">About Us</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Highlights</p>
								<ul class="bullet-arrow">
									<li>Do trading by tech and dal advisory</li>
									<li>Profits are shared - Risk Analysis</li>
									<li> Can use different card </li>
									<li>Will update the financial transaction</li>
								</ul>
							</div>
							<div class="col-sm-hide col-md-hide col-lg-2 col-xl-2 block3">
							<img src="img/coepd-us.jpg" width="200" height="100" style=" display: block;margin-left: auto;margin-right: auto;" alt="coepd icon">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item ">
				<a class="nav-link " data-toggle="dropdown" data-target="dropdown_target" href="#">IIT Advisory Services
					
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">BA Online Training</p>
								<p>COEPD Offers the best IT Business Analyst Instructor led online training program to professionals who aspire to become a business Analyst .Our course is tailored keeping in mind of professionals objectives and help learners quickly become working BA’s. Training is conducted by real time experienced Instructors who are passionate towards teaching and follow the best standards and practices in delivering the necessary Knowledge/skills needed to survive in the job market. </p>
							<a href="business-analyst-online-training.html" class="btn btn-info btn-lg nav-btn">BA Online Training</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Highlights</p>
								<ul class="bullet-arrow">
									<li>100% Job oriented training</li>
									<li>Instructor led Interactive sessions</li>
									<li>Course In line with IIBA BABOK v3</li>
									<li>Explanation with Real time scenarios </li>
									<li>Assignments to ensure participants understanding </li>
									<li>Access to recorded sessions </li>
									<li>Tools session for practice</li>
								</ul>
								<div> <br/>
								</div>
							</div>
							<div class="col-sm-hide col-md-2 col-lg-1 col-xl-1 block3">
									<img src="img/coepd-us.jpg" width="160" height="80" alt="coepd icon" style=" display: block;margin-left: auto;margin-right: auto;"><br>
									<?php
										include("dbconnect.php");
										$select_news="select * from news";
										$query=mysqli_query($conn,$select_news);

										while($news=mysqli_fetch_assoc($query)){
			
									?>

									<div class="trainings hight">
										
										 <?php echo ($news['newsDescription']); }?>
									</div>
							</div>
						</div>
					</div>
				</div>
				
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="dropdown" data-target="dropdown_target" href="#">IIT Pool Share Money
					
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">BA Online Mentoring<p>
								<p>As an extension of BA theoretical knowledge coepd offers online Mentoring program to gain hands on practice on real time case studies. Mentors will guide through UML Diagrams, Preparing documents, Tools, Situation Handling and Role plays on BA tasks to experience the real time work scenario and achieve your goal in becoming a successful BA.</p>
							<a href="business-analyst-online-mentoring.html" class="btn btn-info btn-lg nav-btn">BA Online Mentoring</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Highlights</p>
								<ul class="bullet-arrow">
									<li>End to End hands on real time case studies</li>
									<li>Practice using tools</li>
									<li>Preparation of various documents</li>
									<li>Access to 200+ practice exams </li>
									<li>Resume preparation & Mock interviews</li>
									<li>40 PD Hours course completion certificate</li>
								</ul><br/>
								<p class="hight"><span style="font-weight:bold">Contact</span>: +1 469-287-7949 for Schedule</p>
							</div>
							<div class="col-sm-hide col-md-hide col-lg-2 col-xl-2 block3">
							<img src="img/coepd-us.jpg" width="200" height="100" alt="coepd icon" style=" display: block;margin-left: auto;margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="dropdown" data-target="dropdown_target" href="#">Organic Agro
					
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">Certifications</p>
								<p>COEPD is Premier EEP of IIBA. Students will be awarded 40 PD Hours Certificate which enables them to write ECBA, CCBA, CBAP Certifications from IIBA. </p>
								<p>COEPD is Authorized Training Partner (ATP) and Accredited Examination Centre ( AEC) for IVY Global Academy. After our BA Training, Students are eligible to take CITBA, CITBAP, CITPO, CITSM Certifications from IVY Global Academy</p>
							<!-- <button class="btn btn-primary btn-lg nav-btn"><a href="Certified-IT-Business-Analyst.html">Certifications</a></button> -->
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Popular Certifications</p>
									<a class="hight" href="certified-it-business-analyst.html">Certified IT Business Analyst (CITBA)<br></a>
									<a class="hight" href="certified-it-business-analyst-practitioner.html">Certified IT Business Analyst <span>Practitioner(CITBAP)</span><br></a>
									<a class="hight" href="certified-it-product-owner.html">Certified IT Product Owner (CITPO)<br></a>
									<a class="hight" href="certified-it-scrum-developer.html">Certified IT Scrum Developer (CITSD)<br></a>
									<a class="hight" href="certified-it-scrum-master.html">Certified IT Scrum Master (CITSM)</a>
							</div>
							<div class="col-sm-hide col-md-hide col-lg-2 col-xl-2 block3">
							<img src="img/coepd-us.jpg" width="200" height="100" alt="coepd icon" style=" display: block;margin-left: auto;margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="dropdown" data-target="dropdown_target" href="#">Testimonials
					
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">Testimonials</p>
								<p>Our Happy Students always say that COEPD is the best Learning Partner and helped to understand the Concepts in the right way. At COEPD, we use simple real life examples for BA Concepts so that the students connect to the Subject and for easy remembrance. COEPD is committed to impart the BA Knowledge through Case Studies, Situation Handling and Roleplays to give the Student the real time experience. Our Syllabus always starts from Ground Zero and we weave advanced topics through basics.</p>
						<a href="testimonials.html" class="btn btn-info btn-lg nav-btn">Testimonials</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Highlights</p>
								<ul class="bullet-arrow">
									<li>Explanation from Basics</li>
									<li>Simple real life examples</li>
									<li>Interactive teaching method</li>
									<li>Role-plays & Situation Handling</li>
									<li>Real time Case studies</li>
									<li>Assignments & Evaluations</li>
									<li>Best Learning Partner</li>
									<li>Success Proven approach</li>
								</ul>
							</div>
							<div class="col-sm-hide col-md-hide col-lg-2 col-xl-2 block3">
						  <img src="img/coepd-us.jpg" width="200" height="100" alt="coepd icon" style=" display: block;margin-left: auto;margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="dropdown" data-target="dropdown_target" href="#">FAQ's
					
				</a>
				<div class="dropdown-menu">
					<div class="container-fluid ">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 block1">
								<p class="nav-heading1">FAQ's</p>
								<p>COEPD always strives to bring in Transparent Communication. So COEPD has captured all Frequently Asked Questions and our Answers at one place so that Students can clarify their Queries if any.  COEPD advises our Students to go through the FAQs and understand how BA Online Training works and the related concepts like Mentoring and Certifications. Information about Qualifications Required, Demo Classes, Resume preparation and Payments is presented here  </p>
							<a href="faqs.html" class="btn btn-info btn-lg nav-btn">FAQ's</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 block2">
								<p class="hight nav-heading1">Highlights</p>
								<ul class="bullet-arrow">
									<li>Transparent Communication</li>
									<li>Policy Adherence </li>
									<li>Student Friendly</li>
									<li>Learning Mission</li>
									<li>Online Training Process</li>
									<li>Best Practices </li>
									
								</ul>
							</div>
							<div class="col-sm-hide col-md-hide col-lg-2 col-xl-2 block3">
						      <img src="img/coepd-us.jpg" width="200" height="100" alt="coepd icon" style=" display: block;margin-left: auto;margin-right: auto;">
							</div>
						</div>
					</div>
				</div>
			</li>
			
		</ul>
	</div>
</nav>	

<nav class="navbar navbar-expand-md bg-dark navbar-dark nav-bar2">
  <!-- Brand -->
 

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
		<a class="nav-link" href="index.html" >
			Home
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="#">Link 3</a>
		  </div>
      </li>
      <li class="nav-item">
		<a class="nav-link " href="about-us.html"  >
			About Us
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="#">Link 3</a>
		  </div>
      </li>
      <li class="nav-item">
		<a class="nav-link" href="business-analyst-online-training.html">
			BA Online Training
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="#">Link 3</a>
		  </div>
      </li>
	  
	  <li class="nav-item">
		<a class="nav-link " href="ba-mentoring.html" >
			BA Mentoring
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="#">Link 3</a>
		  </div>
      </li>
	  <li class="nav-item">
		<a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
			Certifations
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="Certified-IT-Business-Analyst.html">Certified-IT-Business-Analyst</a>
			<a class="dropdown-item" href="Certified-IT-Business-Analyst-practitioner-professional.php">Certified-IT-Business-Analyst<br>-practitioner-professional</a>
			<a class="dropdown-item" href="certified-it-product-owner.html">Certified-IT-product-owner</a>
			<a class="dropdown-item" href="certified-IT-Scrum-Developer.html">Certified-IT-Scrum-Developer</a>
			<a class="dropdown-item" href="Certified-IT-Scrum-Master.html">Certified-IT-Scrum-Master</a>
		  </div>
      </li>
	  <li class="nav-item">
		<a class="nav-link " href="Faqs.html">
			FAQ's
		</a>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="#">Link 3</a>
		  </div>
      </li>
    </ul>
  </div> 
</nav>

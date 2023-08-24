<?php

	$name = 'Ethan Fossmeyer';
	$jobTitle = 'Full-Stack Software Developer';
	$eMail = 'ethan@fossmeyer.com';
	$phoneNumber = '+1 (859) 630-7752';
	$linkedIn = 'linkedin.com/in/efossmeyer/';
	$gitHub = 'github.com/EthanF000';
	$fakeWebsite = 'ethanfossmeyer.com';
	$picture = 'assets/images/Ethan.jpg';

	$summary = 'Experienced technology worker with a strong foundation in IT support, seeking entry level position in Software Development/Engineering. Possesses a proven track record of top-notch technical assistance to high priority users, looking now to provide analytical thinking, problem-solving skills and determination to the realm of software development. Loves to play basketball, play video games, weightlift, collect trading cards, and hike/travel. Has a 15-year old black Dachshund named Indy.';

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $name . '\'s Resume' ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $name . '\'s Resume'?>>
    <meta name="author" content=<?php echo $name ?>>    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?php echo $picture ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name?></h1>
							    <div class="title mb-3"><?php echo $jobTitle?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $eMail?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phoneNumber ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $linkedIn ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $gitHub ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $fakeWebsite ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $summary ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Help Desk Technician</h3>
										        <div class="resume-company-name ms-auto">Answers in Genesis</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2022 - Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Providing excellent enterprise IT support to executive customers as well as being the lead of ActiveDirectory account creations and maintenance. Regularly involved in typical and atypical software and hardware problem-solving endeavors.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Key Achievement:</h4>
										    <ul>
											    <li>Designed and implemented a documentation flow using Power Automate, resulting in a measured 30% boost to overall worker productivity.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Windows/Linux/Mac</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Power Automate</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">PowerShell</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">ActiveDirectory</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">ZenDesk</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">ManageEngine</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Museum Host</h3>
										        <div class="resume-company-name ms-auto">Answers in Genesis</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2016 - 2022</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Serving thousands of guests daily out of the many food venues that the Creation Museum owns and operates. Regular top-performer in employee efficiency metrics such as: positive guest interactions, least difference in register cashout tills, and employee of the month awards.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Galaxy</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Revel</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Windows</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Java</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">Python</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">VSCode</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">IntelliJ</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">BSc in Computer Information Technology</div>
										<div class="resume-degree-org">with a Minor in Finance</div>
								        <div class="resume-degree-org">Northern Kentucky University</div>
								        <div class="resume-degree-time">2020 - 2024</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">President's Honor List</div>
								        <div class="resume-award-desc">Spring 2021, Fall 2021, and Spring 2022. For receiving a GPA of 4.0 in a semester.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Dean's List</div>
								        <div class="resume-award-desc">Fall 2020, Fall 2022, and Spring 2023. For receiving a GPA of 3.5-3.99 in a semester.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Weightlifting</li>
								    <li class="mb-1">Basketball</li>
								    <li class="mb-1">Hiking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Resume Project" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">PHP Resume</h5>
									<p class="card-text">Resume created using PHP.</p>
									<a href="btn btn-outline-primary" href="#">https://github.com/EthanF000/ase230</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your name</small>
    </footer>

    

</body>
</html> 


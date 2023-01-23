<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Quizzy | StudentPortal CM</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div class="page-loader" id="page-loader">
  <div class="loader">
  	<span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
  </div>
</div><!-- page loader -->
<div class="theme-layout">
	<div class="responsive-header">
		<div class="logo res"><span>StudPort CM</span></div>
		<div class="right-compact">
			<div class="sidemenu">
				<i><svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
			</div>
			<div class="res-search">
				<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
			</div>
			
		</div>
		<div class="restop-search">
			<span class="hide-search"><i class="icofont-close-circled"></i></span>
			<form method="post">
				<input type="text" placeholder="Search...">
			</form>
		</div>
	</div><!-- responsive header -->
	
	<header class="fixed-top">
		<div class="topbar">
			<div class="logo"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
			<div class="searches">
				<form method="post">
					<input type="text" placeholder="Search...">
					<button type="submit"><i class="icofont-search"></i></button>
					<span class="cancel-search"><i class="icofont-close"></i></span>
					<div class="recent-search">
						<h4 class="recent-searches">Your's Recent Search</h4>
						<ul class="so-history">
							<li>
								<div class="searched-user">
									<span>Maria K</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<span>Fawad Khan</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
							<li>
								<div class="searched-user">
									<span>Jack Carter</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>
						</ul>
					</div>
				</form>
			</div>
			<ul>
				<li><a href="{{ route('plans') }}" title="" target="_target">Plans</a></li>
				<li><a href="https://help.studentportal-cm.com" title="">contact</a></li>
				<li><a href="{{ route('help') }}" title="">help center</a></li>
				@if(Auth::guest())
					<li><a href="{{route('register')}}" title="">Sign Up</a></li>
					<li><a class="join-butn" href="{{route('login')}}" title=""><i class="icofont-lock"></i> Login</a></li>
				@endif
				<li><a href="#" title=""><img src="images/flags/US.png" alt=""> En</a></li>
			</ul>
		</div>
	</header>
	<section>
		<div class="gap mt-5">
			<div class="container">
				<div class="row remove-ext30" style="border-radius:5px;">
					<div class="col-lg-12">
						<div class="title">
							<h1>Choose your <span style="color:#6C63FF;font-size:5rem;">Quizzy Plan</span></h1>
							<figure><img alt="" src="images/resources/three-lines2.svg"></figure>
                            <p>Everything you need to motivate every student, whether you <br /> manage a classroom or an entire district.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-right">
						<div class="card-body mt-3 br-10 shadow-index">
                            <figure><img alt="" src="images/resources/individuals.svg"></figure>
                            <h4>Individual</h4><br />
                            <p>All the activities and creative tools teachers need to start motivating students.</p>
                            <a href="" class="btn btn-outline-plan btn-block py-3">Sign up for free <i class="icofont-rounded-right h4 float-right"></i></a>
                            <hr>
                            <h6 class="p-3 text-secondary">Everything Teachers get:</h6>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Limited Activities</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Interactive Lessons</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Asynchronous Assignments</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Engaging Assessments</p>
                        </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4" data-aos="slide-up">
						<div class="card-body border-plan br-10 shadow-index">
                            <div class="recommended mb-3">RECOMMENDED</div>
                            <figure><img alt="" src="images/resources/schools.svg"></figure>
                            <h4>Schools</h4><br />
                            <p>Unlimited access for every teacher to motivate every student, plus LMS integrations and standards tagging.</p>
                            <a href="" class="btn btn-plan btn-block py-3">Get a Quote <i class="icofont-rounded-right h4 float-right"></i></a>
                            <hr>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Unlimited Storage</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> All Question Types</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Answer Explanations</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> LMS Integrations to sync grades and class rosters</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Standards-Aligned Content and Reporting</p>
                        </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-left">
						<div class="card-body mt-3 br-10 shadow-index">
                            <figure><img alt="" src="images/resources/district.svg"></figure>
                            <h4>Districts</h4><br />
                            <p>Sitewide tools and dedicated support for districts that need to improve collaboration and measure impact.</p>
                            <a href="" class="btn btn-plan btn-block py-3">Get a Quote <i class="icofont-rounded-right h4 float-right"></i></a>
                            <hr>
                            <h6 class="p-3 text-secondary">Everything for Schools, plus:</h6>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Rostering Integrations that keep everyone in sync</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> District-Level Sharing and Collaboration</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> District-Level User Management and Reporting</p>
                            <p><i class="icofont-check px-2 h3 text-main"></i> Live Professional Development and Dedicated Success Manager</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section>
		<div class="gap mt-5">
			<div class="container">
				<div class="row remove-ext30" style="border-radius:5px;">
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="fade-right">
                        <h1 style="font-size: 52px;font-weight:900;">FAQs</h1>
					</div>
                    <div class="col-lg-3 col-md-3 col-sm-3" data-aos="fade-right">
                        <figure><img alt="" src="images/resources/arrow6.svg"></figure>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7">
						<div class="question-collaps">
							<div id="accordion">
							  <div class="card" data-aos="slide-up">
								<div class="card-header" id="headingOne">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  FAQ #1
									</button>
								  </h5>
								</div>
			
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								  <div class="card-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
									<ul class="help-qst">
										<li><a href="#" title="">Can't login to Socimo</a></li>
										<li><a href="#" title="">Account settings</a></li>
										<li><a href="#" title="">Edit Account Name</a></li>
										<li><a href="#" title="">Following and unfollowing</a></li>
										<li><a href="#" title="">Logout from Socimo</a></li>
										<li><a href="#" title="">Deactive or close your account</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="card" data-aos="slide-up">
								<div class="card-header" id="headingTwo">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  FAQ #2
									</button>
								  </h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								  </div>
								</div>
							  </div>
							  <div class="card" data-aos="slide-up">
								<div class="card-header" id="headingThree">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  FAQ #3
									</button>
								  </h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								  </div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="gap">
			<div class="bg-image" style="background-image: url(images/resources/footer-bg.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="web-info">
							<div class="logo"><img src="images/logo.png" alt=""><span>StudPort CM</span></div>
							<p>Subscribe our newsletter for getting notifications and alerts</p>
							<div class="contact-little">
								<span><i class="icofont-phone-circle"></i> +237-672-0769-995</span>
								<span><i class="icofont-email"></i> <a href="mailto: contact@studentportal-cm.com" class="__cf_email__">contact@studentportal-cm.com</a></span>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Company</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">About Us</a></li>
								<li><a href="#" title="">Career</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Terms</a></li>
								<li><a href="#" title="">FAQ</a></li>
								<li><a href="#" title="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Quick Links</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">Product</a></li>
								<li><a href="#" title="">Market</a></li>
								<li><a href="#" title="">Courses</a></li>
								<li><a href="#" title="">Services</a></li>
								<li><a href="#" title="">Enterprise</a></li>
								<li><a href="#" title="">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Follow Us</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title=""><i class="icofont-facebook"></i>facebook</a></li>
								<li><a href="#" title=""><i class="icofont-twitter"></i>twitter</a></li>
								<li><a href="#" title=""><i class="icofont-instagram"></i>instagram</a></li>
								<li><a href="#" title=""><i class="icofont-google-plus"></i>google +</a></li>
								<li><a href="#" title=""><i class="icofont-whatsapp"></i>whatsapp</a></li>
								<li><a href="#" title=""><i class="icofont-reddit"></i>reddit</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Download App</h4>
							</div>
							<div class="news-lettr">
								<a href="#" title=""><img src="images/android.png" alt=""></a>
								<a href="#" title=""><img src="images/apple.png" alt=""></a>
								<a href="#" title=""><img src="images/windows.png" alt=""></a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
	
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved <script>document.write(new Date().getFullYear())</script> StudentPortal</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->
	
</div>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script src="js/counterup-t-waypoint.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
</body>	
</html>
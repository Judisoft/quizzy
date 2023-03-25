<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Quizzy Home</title>
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
	
	<header class="transparent">
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
				<li><a href="{{ route('dashboard') }}" title="">Dashboard</a></li>
				<li><a href="{{ route('plans') }}" title="">Plans</a></li>
				<li><a href="{{ route('contact') }}" title="">contact</a></li>
				<li><a href="{{ route('help') }}" title="">help center</a></li>
				@if(Auth::guest())
					<li><a href="{{route('register')}}" title=""> Sign Up</a></li>
					<li><a class="join-butn" href="{{route('login')}}" title=""><i class="icofont-lock"></i> Login</a></li>
				@endif
				<li><a href="#" title=""><img src="images/flags/US.png" alt=""> En</a></li>
			</ul>
		</div>
	</header>
	
	<section>
		<div class="gap overlap nogap mate-black low-opacity">
			<div class="bg-image" style="background-image: url(images/resources/index.svg)"></div>
			<div class="feature-meta">
				<h1>Engaging <span>Learners</span> through interactive quizzes</h1>
				<h3><span></span> quizzes</h3>
				<a href="{{route('register')}}" title="" class="main-btn" data-ripple="">Get started for FREE!</a>
			</div>
		</div>	
	</section>
	
	<section>
		<div class="gap no-bottom grey-bg nogap" data-aos="fade-in" data-aos-delay="50">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-users-alt-3"></i>
							<div>
								<h6>Engage everyone, everywhere!</h6>
								<p>Free tools to teach and learn anything, on any device, in‑person or remotely.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-ui-clock"></i>
							<div>
								<h6>Assessment and eLearning</h6>
								<p>Set a deadline so your students can learn on their own time or create an evergreen link.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="info-sec">
							<i class="icofont-chart-bar-graph"></i>
							<div>
								<h6>Realtime Feedback</h6>
								<p>Instantly identify problem areas by participant, class, question, and more.</p>
							</div>
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
					<div class="col-lg-12">
						<div class="title">
							<h1>Getting started is <span style="color:#6C63FF;text-decoration:underline;">FREE</span> and easy!</h1>
							<figure><img alt="" src="images/resources/underline.svg"></figure>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3" data-aos="fade-right">
						<figure><img alt="" src="images/resources/create-questions.svg" class="shadow-index"></figure>
						<h1>1.</h1>
						<h5>Create quiz <br>questions</h5>
					</div>
					<div class="col-lg-1" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow3.svg"></figure>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3" data-aos="slide-up">
						<figure><img alt="" src="images/resources/device.png"></figure>
						<h1>2.</h1>
						<h5>Participants engage from any device</h5>
					</div>
					<div class="col-lg-1" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow4.svg"></figure>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3" data-aos="fade-left">
						<figure><img alt="" src="images/resources/feedback.png" class="shadow-index"></figure>
						<h1>3.</h1>
						<h5>Get instant Feedback</h5>
					</div>
				</div>
				<div class="row remove-ext30 mt-5">
					<div class="col-lg-4 col-md-4 col-sm-4 mt-5" data-aos="fade-right">
						<h1 style="font-weight:900;">Explore Solutions</h1>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 mt-5" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow2.svg"></figure>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="d-flex flex-colum">
							<div class="p-2 mt-2">
								<div class="card-body br-10 shadow-index" data-aos="slide-up">
									<div class="d-flex justify-content-around">
										<div class="p-2"><figure class="br-10" style="background-color:#F2F2F2;padding:10px;"><img alt="" src="images/resources/explore1.svg"></figure></div>
										<div class="pt-2">
											<h4>Student Training and Education &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
											<div class="p-2"><a href="#">Learn More <i class="icofont-stylish-right"></i></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-2 mt-2">
							<div class="card-body br-10 shadow-index" data-aos="slide-up">
								<div class="d-flex justify-content-around">
									<div class="p-2"><figure class="br-10" style="background-color:#F2F2F2;padding:10px;"><img alt="" src="images/resources/explore2.svg"></figure></div>
									<div class="pt-2">
										<h4>Institution and Community Engagement</h4>
										<div class="p-2"><a href="#">Learn More <i class="icofont-stylish-right"></i></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-2 mt-2">
							<div class="card-body br-10 shadow-index" data-aos="slide-up">
								<div class="d-flex justify-content-around">
									<div class="p-2"><figure class="br-10" style="background-color:#F2F2F2;padding:10px;"><img alt="" src="images/resources/explore3.svg"></figure></div>
									<div class="pt-2">
										<h4>Institution and Community Engagement</h4>
										<div class="p-2"><a href="#">Learn More <i class="icofont-stylish-right"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="verticle-center">
							<div class="measure">
								<h1>Make it stick with <span style="color:#6C63FF;">motivating assessment and practice.</span></h1>
								<div class="text-center"><figure><img src="images/resources/three-lines2.svg" alt=""></figure></div>
								<div class="d-flex flex-colum">
									<div class="p-2 mt-2">
										<div data-aos="slide-up">
											<div class="d-flex justify-content-around">
												<div class="p-2"><figure><img alt="" src="images/resources/practice1.svg"></figure></div>
												<div class="pt-2">
													<h4>For Every Learning Environment</h4>
													<div class="p-2">
														<p>Deliver student-paced activities to all devices, in and out of class.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex flex-colum">
									<div class="p-2 mt-2">
										<div data-aos="slide-up">
											<div class="d-flex justify-content-around">
												<div class="p-2"><figure><img alt="" src="images/resources/practice2.svg"></figure></div>
												<div class="pt-2">
													<h4>Real-Time Insights</h4>
													<div class="p-2">
														<p>Get live feedback when teachers (and students!) need it most.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>	
					</div>
					<div class="col-lg-5 col-md-5" data-aos="zoom-in">
						<img src="images/resources/practice.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row m-auto" style="background-color:#212121;border-radius:10px;padding:5px;">
				<div class="title pt-3">
					<h4 class="text-light">Top uses</h4>
					<figure><img alt="" src="images/resources/three-lines2.svg"></figure>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Formative assessment</p></div>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Summative assessment</p></div>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Homework</p></div>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Review</p></div>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Independent practice</p></div>
				</div>
				<div class="d-flex flex-row px-3" data-aos="zoom-in">
					<div class="px-2"><figure><img alt="" src="images/resources/check.svg" class="shadow-index"></figure></div>
					<div><p class="text-light">Group learning</p></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="verticle-center">
							<div class="measure">
								<h1>Quizzy is used accross the <span style="color:#6C63FF;">globe</span></h1>
								<div><figure><img src="images/resources/three-lines2.svg" alt=""></figure></div>
								<div class="p-3">
									<div class="d-flex flex-row">
										<div class="p-2">
											<figure><img src="images/resources/user5.jpg" alt="" class="testimonial-img"></figure>
										</div>
										<div class="p-2">
											<p>
												Quizy motivates [students], increases confidence, and can help to establish a culture of learning and growing from mistakes
											</p>
										</div>
									</div>
								</div>
								<div class="mt-2 mb-5">
									<a href="{{ URL::to('resources/past-questions') }}" class="button p-3" style="background-color:#6C63FF;font-weight:700;">FIND OUT MORE<i class="icofont-arrow-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-5 col-md-5" data-aos="zoom-in">
						<img src="images/resources/globe2.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5" data-aos="fade-right">
						<img src="images/resources/interaction.svg" alt="">
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="verticle-center">
							<div class="measure">
								<div data-aos="fade-right">
									<h6 style="font-weight:700;">ASSESSMENT AND PRACTICE</h6>
									<h1><span style="color:#6C63FF;">Beyond </span>Multiple Choice</h1>
								</div>
								<div class="p-3">
									<div class="info-sec mt-2" data-aos="slide-up">
										<i class="icofont-question"></i>
										<div>
											<h5>Every question type</h5>
											<p style="font-size:14px;">Engage students with question types at every level of Bloom's taxonomy</p>
										</div>
									</div>
									<div class="info-sec mt-2" data-aos="slide-up">
										<i class="icofont-thunder-light"></i>
										<div>
											<h5>Powerful micro-motivators</h5>
										</div>
									</div>
									<div class="info-sec mt-2" data-aos="slide-up">
										<i class="icofont-badge"></i>
										<div>
											<h5>Low-stakes competition</h5>
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
	<section>
		<h1 class="text-center p-3" style="font-size:48px;font-weight:900;">We've got ready-made <span style="color:#6C63FF;">Quizzes</span> for you</h1>
		<div class="text-center"><figure><img src="images/resources/three-lines2.svg" alt=""></figure></div>
		<div class="gap mate-black">
			<div class="bg-image" style="background-image: url(images/resources/profile-banner.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="books-caro">
							<div class="book-post shadow-index">
								<figure><a href="book-detail.html" title=""><img src="images/resources/maths.png" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3 text-light">Mathematics</a>
							</div>
							<div class="book-post shadow-index">
								<figure><a href="book-detail.html" title=""><img src="images/resources/chemistry.png" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3 text-light">Chemistry</a>
							</div>
							<div class="book-post shadow-index">
								<figure><a href="book-detail.html" title=""><img src="images/resources/biology.png" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3 text-light">Biology</a>
							</div>
							<div class="book-post shadow-index">
								<figure><a href="book-detail.html" title=""><img src="images/resources/physics.png" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3 text-light">Physics</a>
							</div>
							<div class="book-post shadow-index">
								<figure><a href="book-detail.html" title=""><img src="images/resources/economics.png" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3 text-light">Economics</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap">
			<div class="container">
				<figure><img src="images/resources/hat.svg" alt=""></figure>
				<div class="row">
					<div class="col-lg-6 col-md-6" data-aos="fade-right">
						<img src="images/resources/create_quiz.svg" alt="">
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="verticle-center">
							<div class="measure right">
								<div data-aos="fade-left"><h1>Explore what drives your <span style="color: #6C63FF;">passion</span></h1></div>
								<div data-aos="zoom-in">
									<p class="pt-4">
										<a href="#" title="">English Language and Arts</a>
										<a href="#" title="">Social Studies</a>
										<a href="#" title="">Science</a>
										<a href="#" title="">World Languages</a>
										<a href="#" title="">Creative Arts</a>
										<a href="#" title="">Computer Science and Skills</a>
										<a href="#" title="">Career and Technical Education</a>
										<div data-aos="flip-right"><a href="#" title="" class="bg-info text-light">Explore More <span class="icofont-plus"></span></a></div>
									</p>
								</div>
							</div>	
						</div>
					</div>
					<figure><img src="images/resources/hat.svg" alt=""></figure>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="gap" style="background-color:#0e477b;">
			<div class="bg-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8" >
						<div class="welcome-parallax" data-aos="fade-right">
							<h2  class="text-left">Ready for meaningful engagement?</h2>
							<div class="text-left mt-5">
								<a href="{{ route('register') }}" title="" class="main-btn">GET STARTED FOR FREE <i class="icofont-swoosh-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="welcome-parallax" data-aos="zoom-in">
							<figure><img src="images/resources/experience.webp" alt=""></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- parallax section -->
	<section>
		<div class="gap mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<h1>Why you should be using <span style="color:#6C63FF;text-decoration:underline;">Quizzy</span></h1>
							<figure><img alt="" src="images/resources/three-lines2.svg"></figure>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="fade-right">
						<figure><img alt="" src="images/resources/clock.svg" style="width:50px!important;height:50px!important;"></figure>
						<h5>Saves teachers <span style="color:#6C63FF">4hrs/week</span></h5>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow3.svg"></figure>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="slide-up">
						<figure class="mt-5"><img alt="" src="images/resources/memo.svg"></figure>
						<h5>Improve test scores up to <span style="color: #6C63FF">50%</span></h5>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow4.svg"></figure>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="fade-left">
						<figure><img alt="" src="images/resources/baloon.svg"></figure>
						<h5>Reduce test-taking anxiety</h5>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow3.svg"></figure>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" data-aos="zoom-in">
						<figure class="mt-5"><img src="images/resources/money.webp" alt=""></figure>
						<h5>Earn Money</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="d-flex justify-content-center">
			<div class="p-1">
				<h1 class="text-center p-3 mt-5" style="font-size:48px;font-family: 'Pacifico', cursive;color:#212121;">Loved by <span style="color:#6C63FF;">teachers</span> and <span style="color:#6C63FF;">school admins</span></h1>
			</div>
			<div class="p-1 pt-3 mt-5">
				<figure><img src="images/resources/heart-fun.svg" alt=""></figure>
			</div>
		</div>
		<div class="text-center"><figure><img src="images/resources/three-lines2.svg" alt=""></figure></div>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="books-caro">
							<div class="book-post">
								<figure><a href="book-detail.html" title=""><img src="images/resources/user.jpg" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3">Teacher name</a>
							</div>
							<div class="book-post">
								<figure><a href="book-detail.html" title=""><img src="images/resources/user.jpg" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3">Teacher name</a>
							</div>
							<div class="book-post">
								<figure><a href="book-detail.html" title=""><img src="images/resources/user.jpg" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3">Teacher name</a>
							</div>
							<div class="book-post">
								<figure><a href="book-detail.html" title=""><img src="images/resources/user.jpg" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3">Teacher name</a>
							</div>
							<div class="book-post">
								<figure><a href="book-detail.html" title=""><img src="images/resources/user.jpg" alt=""></a></figure>
								<a href="book-detail.html" title="" class="h3">Teacher name</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					@if(Session::has('success'))
						<p class="alert alert-info">{{ Session('success') }}</p>
					@endif
					@if(Session::has('error'))
						<p class="alert alert-danger">{{ Session('error') }}</p>
					@endif
					<div class="col-lg-12">
						<h1 class="text-center">Sign Up for our Newsletter Now!</h1>
						<div class="text-center"><figure><img src="images/resources/three-lines2.svg" alt=""></figure></div>
						<div class="newsletter-sec">
							<figure><img src="images/news-icon.png" alt=""></figure>
							<div class="leter-meta">
								<span>Be the first to hear from us</span>
								<h3>subscribe now!</h3>
							</div>	
							<form action="{{ route('newsletter') }}" method="post">
								@csrf
								<input type="email" name="email" placeholder="e.g johndoe@example.com" value="{{ old('email') }}">
								<button type="submit"  class="main-btn"><i class="icofont-paper-plane"></i></button>
								<p><small class="text-danger text-center">@if($errors->has('email')) {{ $errors->first('email') }} @endif</small></p>
							</form>
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
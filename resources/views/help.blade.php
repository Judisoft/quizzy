<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Help Center</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="logo res"><img src="images/logo.png" alt=""><span>Logo</span></div>
		<div class="user-avatar mobile">
			<a href="profile.html" title="View Profile"><img alt="" src="images/resources/user.jpg"></a>
			<div class="name">
				<h4>Danial Cardos</h4>
				<span>Ontario, Canada</span>
			</div>
		</div>
		<div class="right-compact">
			<div class="sidemenu">
				<i>
<svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
			</div>
			<div class="res-search">
				<span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
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
				<li><a href="{{ route('plans') }}" title="">Plans</a></li>
				<li><a href="https://help.studentportal-cm.com" title="" target="_target">contact</a></li>
				<li><a href="{{ route('help') }}" title="" target="_target">help center</a></li>
				@if(Auth::guest())
					<li><a href="{{route('register')}}" title=""> Sign Up</a></li>
					<li><a class="join-butn" href="{{route('login')}}" title=""><i class="icofont-lock"></i> Login</a></li>
				@endif
				<li><a href="#" title=""><img src="images/flags/US.png" alt=""> En</a></li>
			</ul>
		</div>
	</header>
	
	<section>
		<div class="gap no-bottom help-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="search-section">
							<h1>How can we help you?</h1>
							<form method="post">
								<input type="text" placeholder="Describe Your Issue">
								<button><i class="icofont-search"></i></button>
							</form>
                            <p>
                                Popular searches: 
                                <a href="#" title="">Create a Quiz</a>
                                <a href="#" title="">Social Studies</a>
                                <a href="#" title="">View Quiz analysis</a>
                                <a href="#" title="">Memes</a>
                            </p>
						</div>
					</div>
				</div>
			</div>
			{{-- <figure class="bottom-image"><img src="images/bg-4.png" alt=""></figure> --}}
		</div>
	</section>
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/get-started.png" alt=""></figure>
                                <h1>Get Started</h1>
                                <p class="p-3">Welcome to Quizzy! Let's start creating, teleporting and sharing quizzes</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/technical-info.png" alt=""></figure>
                                <h1 class="pt-5">Technical Information</h1>
                                <p class="p-3">Welcome to Quizzy! Let's start creating, teleporting and sharing quizzes</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/account-details.png" alt=""></figure>
                                <h1 class="pt-4">Account Details</h1>
                                <p class="p-3">Welcome to Quizzy! Let's start creating, teleporting and sharing quizzes</p>
                            </a>
                        </div>
                    </div>                      
				</div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/security.png" alt=""></figure>
                                <h1>Safety, Privacy, Accessibility & Inclusion</h1>
                                <p class="p-3">How Quizzy Protects student Data, Privacy principles, Read accessibility and inclusion statement</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/contact-us.png" alt=""></figure>
                                <h1 class="pt-2">Contact Us</h1>
                                <p class="p-3">Report Inappropriat Content, Help with Translations, Quizzy for Work, Troubleshooting </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="search-sub">
                            <a href="#">
                                <figure><img src="images/resources/faqs.png" alt=""></figure>
                                <h1 class="pt-4">FAQs</h1>
                                <p class="p-3">Get answers to specific questions here. Scroll through to find questions and answers</p>
                            </a>
                        </div>
                    </div>                      
				</div>
			</div> 
			{{-- <figure class="bottom-image"><img src="images/bg-4.png" alt=""></figure> --}}
		</div>
	</section>
    <section>
		<div class="gap no-bottom gray-bg border-top border-bottom">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12">
                        <h3>Featured Articles</h3>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4">
                        <p class="p-2"><a href="#"><i class="icofont-caret-right"></i> Create a Lesson</a></p>
                        <p class="p-2"><a href="#"><i class="icofont-caret-right"></i> Report on Quizzy</a></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p class="p-2"><a href="#"><i class="icofont-caret-right"></i> Using Quizzy Lessons</a></p>
                        <p class="p-2"><a href="#"><i class="icofont-caret-right"></i> Quiz Settings</a></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p class="p-2"><a href="#"><i class="icofont-caret-right"></i> Adding Students to a Team</a></p>
                    </div>
				</div>
			</div>
			{{-- <figure class="bottom-image"><img src="images/bg-4.png" alt=""></figure> --}}
		</div>
	</section>
	
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved by Quizzy 2023</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->
	
</div>
	
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	

</body>	
</html>
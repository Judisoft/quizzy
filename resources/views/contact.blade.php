<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Contact Quizzy</title>
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

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="logo res"><img src="images/logo.png" alt=""><span>Socimo</span></div>
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
		<div class="gap mt-5">
			<div class="container">
				<div class="row remove-ext30" style="border-radius:5px;">
					<div class="col-lg-12">
						<div class="title">
							<h1>Contact a <span style="color:#6C63FF;font-size:4rem;">Quizzy Team</span></h1>
							<figure><img alt="" src="images/resources/three-lines2.svg"></figure>
                            <h6 class="p-3">Fill the form below and we'll respond to you in less than 48hrs</h6>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 mt-5" data-aos="fade-right">
                        <h1 style="font-weight:900;">Contact Us</h1>
					</div>
                    <div class="col-lg-3 col-md-3 col-sm-3 mt-5" data-aos="fade-left">
						<figure><img alt="" src="images/resources/arrow7.svg"></figure>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6" data-aos="slide-up">
						<div class="card-body border-plan br-10 shadow-index">
                            <div class="recommended mb-3"><i class="icofont-envelope-open"></i> CONTACT FORM</div>
                            @if(Session::has('success'))
                                <p class="alert alert-info"><i class="icofont-check-circled"></i> {{ Session('success') }}</p>
                            @endif
                            @if(Session::has('error'))
                                <p class="alert alert-danger"><i class="icofont-close-circled"></i> {{ Session('error') }}</p>
                            @endif
                            <form action="{{ route('post-contact') }}" method="POST" class="contact-form">
                                @csrf
                                <div class="uk-margin p-2">
                                    <input class="uk-input" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                    <p><small class="text-danger text-center">@if($errors->has('name')) {{ $errors->first('name') }} @endif</small></p>
                                </div>
                                <div class="uk-margin p-2">
                                    <input class="uk-input" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                    <p><small class="text-danger text-center">@if($errors->has('email')) {{ $errors->first('email') }} @endif</small></p>
                                </div>
                                <div class="uk-margin p-2">
                                    <input class="uk-input" type="text" placeholder="Institution" name="institution" value="{{ old('institution') }}">
                                    <p><small class="text-danger text-center">@if($errors->has('institutiion')) {{ $errors->first('institution') }} @endif</small></p>
                                </div>
                                <div class="uk-margin p-2">
                                    <select class="uk-select" name="role">
                                        <option value="">-- select role --</option>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="school admin">Administrator</option>
                                        <option name="regional/regional admin">Regional/District Administrator</option>
                                    </select>
                                    <p><small class="text-danger text-center">@if($errors->has('role')) {{ $errors->first('role') }} @endif</small></p>
                                </div>
                                <div class="uk-margin p-2">
                                    <textarea class="uk-textarea" rows="5" placeholder="Enter Message" name="message" value="{{ old('message') }}"></textarea>
                                    <p><small class="text-danger text-center">@if($errors->has('message')) {{ $errors->first('message') }} @endif</small></p>
                                </div>
                                <div class="uk-margin p-2 align-center">
                                    <button type="submit" class="btn btn-plan btn-block py-3">Send Message</button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved by Socimo 2020</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->
	
	<div class="wraper-invite">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
				</div>
				<div class="invitation-meta">
					<p>
						Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
					</p>
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Email">
						<button type="submit" class="main-btn">Invite</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- invite colleague popup -->
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	<div class="side-slide">
		<span class="popup-closed"><i class="icofont-close"></i></span>
		<div class="slide-meta">
			<ul class="nav nav-tabs slide-btns">
				 <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
				 <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active fade show" id="messages" >
					<h4><i class="icofont-envelope"></i> messages</h4>
					<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
					<ul class="new-messages">
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
				<div class="tab-pane fade" id="notifications">
					<h4><i class="icofont-bell-alt"></i> notifications</h4>
					<ul class="notificationz">
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
			</div>
		</div>
	</div><!-- side slide message & popup -->
	
	<div class="post-new-popup">
		<div class="popup" style="width: 800px;">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>Create New Post</h5>
				</div>
				<div class="post-new">
					<div class="post-newmeta">
						<ul class="post-categoroes">
							<li><i class="icofont-camera"></i> Photo / Video</li>
							<li><i class="icofont-google-map"></i> Post Location</li>
							<li><i class="icofont-file-gif"></i> Post Gif</li>
							<li><i class="icofont-ui-tag"></i> Tag to Friend</li>
							<li><i class="icofont-users"></i> Share in Group</li>
							<li><i class="icofont-link"></i> Share Link</li>
							<li><i class="icofont-video-cam"></i> Go Live</li>
							<li><i class="icofont-sale-discount"></i> Post Online Course</li>
							<li><i class="icofont-read-book"></i> Post A Book</li>
							<li><i class="icofont-globe"></i> Post an Ad</li>
						</ul>
						<form method="post" class="dropzone" action="http://wpkixx.com/upload-target">
							<div class="fallback">
								<input name="file" type="file" multiple />
							</div>
						</form>
					</div>	
					<form method="post" class="c-form">
						<textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
						<div class="activity-post">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>Activity Feed</span></label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox2" checked>
								<label for="checkbox2"><span>My Story</span></label>
							</div>
						</div>
						<div class="select-box">
							<div class="select-box__current" tabindex="1">
								<div class="select-box__value"><input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined Groups</p>
								</div>
								<img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon" aria-hidden="true" />
							</div>
							<ul class="select-box__list">
								<li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i> Public</label></li>
								<li><label class="select-box__option" for="1"><i class="icofont-lock"></i> Private</label></li>
								<li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific Friend</label></li>
								<li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only Friends</label></li>
								<li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i> Joined Groups</label></li>
							</ul>
						</div>
						<input class="schedule-btn" type="text" id="datetimepicker" readonly>
						<input type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&amp;t=56s">
						<button type="submit" class="main-btn">Publish</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- New post popup -->
	
	<div class="new-question-popup">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></i> Ask Question</h5>
				</div>
				<div class="post-new">
					<form method="post" class="c-form">
						
						<input type="text" placeholder="Question Title">
						<textarea placeholder="Write Question"></textarea>
						
						<select>
							<option>Select Your Question Type</option>
							<option>Article</option>
							<option>Book</option>
							<option>Chapter</option>
							<option>Code</option>
							<option>conference Paper</option>
							<option>Cover Page</option>
							<option>Data</option>
							<option>Exprement Finding</option>
							<option>Method</option>
							<option>Poster</option>
							<option>Preprint</option>
							<option>Technicial Report</option>
							<option>Thesis</option>
							<option>Research</option>
						</select>
						<div class="uploadimage">
							<i class="icofont-eye-alt-alt"></i>
							<label class="fileContainer">
								<input type="file">Upload File
							</label>
						</div>
						
						<button type="submit" class="main-btn">Post</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- ask question -->
	
	<div class="share-wraper">
		<div class="share-options">
			<span class="close-btn"><i class="icofont-close-circled"></i></span>
			<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
			<form method="post">
				<textarea placeholder="Write Something"></textarea>
			</form>
			<ul>
				<li><a title="" href="#">Your Timeline</a></li>
				<li class="friends"><a title="" href="#">To Friends</a></li>
				<li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
			</ul>
			<div style="display: block;" class="social-media">
				<ul>
					<li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
					<li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
					<li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
					<li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
					<li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
					<li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
					<li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
				</ul>
			</div>
			<div style="display: none;" class="friends-to">
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user1.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Jack Carter</a></h5>
						<span>family member</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user2.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Xang Ching</a></h5>
						<span>Close Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user3.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Emma Watson</a></h5>
						<span>Matul Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
			</div>
			<button type="submit" class="main-btn">Publish</button>
		</div>
	</div><!-- share post -->
	
	<div class="chat-live">
		<a class="chat-btn" href="#" title="Start Live Chat" data-toggle="tooltip"><i class="icofont-facebook-messenger"></i></a>
		<span>07</span>
	</div><!-- chat button -->
	
	<div class="chat-box">
		<div class="chat-head">
			<h4>New Messages</h4>
			<span class="clozed"><i class="icofont-close-circled"></i></span>
			<form Method="post">
				<input type="text" placeholder="To..">
			</form>
		</div>
		<div class="user-tabs">
			<ul class="nav nav-tabs">
			<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">All Friends</a></li>

			<li class="nav-item"><a class="" href="#link2" data-toggle="tab">Active</a><em>3</em></li>
			<li class="nav-item"><a class="" href="#link3" data-toggle="tab">Groups</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active fade show " id="link1" >
				<div class="friend">
					<a href="#" title="">
						<figure>
							<img src="images/resources/user1.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Oliver</span>
						<i class=""><img src="images/resources/user1.jpg" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user2.jpg" alt="">
							<span class="status away"></span>
						</figure>
						<span>Amelia</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user3.jpg" alt="">
							<span class="status offline"></span>
						</figure>
						<span>George</span>
						<i class=""><img src="images/resources/user3.jpg" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user4.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Jacob</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user5.jpg" alt="">
							<span class="status away"></span>
						</figure>
						<span>Poppy</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user6.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Sophia</span>
						<i class=""><img src="images/resources/user6.jpg" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user7.jpg" alt="">
							<span class="status away"></span>
						</figure>
						<span>Leo king</span>
						<i class=""><img src="images/resources/user7.jpg" alt=""></i>
					</a>
				</div>
			</div>
			<div class="tab-pane fade" id="link2" >
				<div class="friend">
					<a href="#" title="">
						<figure>
							<img src="images/resources/user1.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Samu Jane</span>
						<i class=""><img src="images/resources/user1.jpg" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user6.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Tina Mark</span>
						<i class=""><img src="images/resources/user6.jpg" alt=""></i>
					</a>
					<a href="#" title="">
						<figure>
							<img src="images/resources/user7.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Ak William</span>
						<i class=""><img src="images/resources/user7.jpg" alt=""></i>
					</a>
				</div>
			</div>
			<div class="tab-pane fade" id="link3">
				<div class="friend">
					<a href="#" title="">
						<figure class="group-chat">
							<img src="images/resources/user5.jpg" alt="">
							<img class="two" src="images/resources/user3.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>Boys World</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure class="group-chat">
							<img src="images/resources/user2.jpg" alt="">
							<img class="two" src="images/resources/user3.jpg" alt="">
							<span class="status online"></span>
						</figure>
						<span>KK university Fellows</span>
						<i class="icofont-check-circled"></i>
					</a>
					<a href="#" title="">
						<figure class="group-chat">
							<img src="images/resources/user3.jpg" alt="">
							<img class="two" src="images/resources/user2.jpg" alt="">
							<span class="status away"></span>
						</figure>
						<span>Education World</span>
						<i class="icofont-check-circled"></i>
					</a>
				</div>
			</div>
		</div>
		</div>
		<div class="chat-card">
			<div class="chat-card-head">
				<img src="images/resources/user13.jpg" alt="">
				<h6>George Floyd</h6>
				<div class="frnd-opt">
					<div class="more">
						<div class="more-post-optns">
							<i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
							<ul>
								<li>
									<i class="icofont-pen-alt-1"></i>Edit Post
									<span>Edit This Post within a Hour</span>
								</li>
								<li>
									<i class="icofont-ban"></i>Hide Chat
									<span>Hide This Post</span>
								</li>
								<li>
									<i class="icofont-ui-delete"></i>Delete Chat
									<span>If inappropriate Post By Mistake</span>
								</li>
								<li>
									<i class="icofont-flag"></i>Report
									<span>Inappropriate Chat</span>
								</li>
							</ul>
						</div>
					</div>
					<span class="close-mesage"><i class="icofont-close"></i></span>
				</div>
			</div>
			<div class="chat-list">
				<ul>
					<li class="me">
						<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
						<div class="notification-event">
							<div class="chat-message-item">
								<figure><img src="images/resources/album5.jpg" alt=""></figure>
								<div class="caption">4.5kb <i class="icofont-download" title="Download"></i></div>
							</div>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="images/d-tick.png" alt=""></i>
							</span>
						</div>
					</li>
					<li class="me">
						<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="images/d-tick.png" alt=""></i>
							</span>
						</div>
					</li>
					<li class="you">
						<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="images/d-tick.png" alt=""></i>
							</span>
						</div>
					</li>
					<li class="me">
						<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
						<div class="notification-event">
							<span class="chat-message-item">
								Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
							</span>
							<span class="notification-date">
								<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
								<i><img src="images/d-tick.png" alt=""></i>
							</span>
						</div>
					</li>
					
				</ul>
				<form class="text-box">
					<textarea placeholder="Write Mesage..."></textarea>
					<div class="add-smiles">
						<span><img src="images/smiles/happy-3.png" alt=""></span>
					</div>
					<div class="smiles-bunch">
						<i><img src="images/smiles/thumb.png" alt=""></i>
						<i><img src="images/smiles/angry-1.png" alt=""></i>
						<i><img src="images/smiles/angry.png" alt=""></i>
						<i><img src="images/smiles/bored-1.png" alt=""></i>
						<i><img src="images/smiles/confused-1.png" alt=""></i>
						<i><img src="images/smiles/wink.png" alt=""></i>
						<i><img src="images/smiles/weep.png" alt=""></i>
						<i><img src="images/smiles/tongue-out.png" alt=""></i>
						<i><img src="images/smiles/suspicious.png" alt=""></i>
						<i><img src="images/smiles/crying-1.png" alt=""></i>
						<i><img src="images/smiles/crying.png" alt=""></i>
						<i><img src="images/smiles/embarrassed.png" alt=""></i>
						<i><img src="images/smiles/emoticons.png" alt=""></i>
						<i><img src="images/smiles/happy-2.png" alt=""></i>
					</div>
					<button type="submit"><i class="icofont-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div><!-- chat box -->
	
</div>	
<script src="js/main.min.js"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>	
</html>
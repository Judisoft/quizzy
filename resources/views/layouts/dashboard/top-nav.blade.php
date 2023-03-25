<div class="responsive-header">
    <div class="res-logo">Logo</div>
    
    <div class="user-avatar mobile">
        <a href="{{ route('profile.show') }}" title="View Profile"><img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}"></a>
        <div class="name">
            <h4>Saim Turan</h4>
            <span>Antalaya, Turky</span>
        </div>
    </div>
    <div class="right-compact">
        <div class="menu-area">
            <div id="nav-icon3">
                <i>
                    <svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3"/><rect height="7" width="7" y="3" x="14"/><rect height="7" width="7" y="14" x="14"/><rect height="7" width="7" y="14" x="3"/></svg>
                    </i>
            </div>
            <ul class="drop-menu">
                  <li><a title="profile.html" href="{{ route('profile.show') }}"><i class="icofont-user-alt-1"></i>My account</a></li>
                <li><a title="" href="{{ route('help') }}"><i class="icofont-question-circle"></i>Help</a></li>
                <li><a title="" href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icofont-logout"></i>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="res-search">
            <span><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
        </div>
    </div>
    <div class="restop-search">
        <span class="hide-search"><i class="icofont-close-circled"></i></span>
        <form method="post">
            <input type="text" placeholder="Search...">
        </form>
    </div>
</div><!-- responsive header -->

<header class="">
    <div class="topbar stick">
        <div class="logo"><span>Logo</span></div>
        <div class="searches">
            <form method="post">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="icofont-search"></i></button>
            </form>
        </div>
        <ul class="web-elements">
            <li>
                <div class="user-dp">
                    <a href="{{ route('profile.show') }}" title="">
                        <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                        <div class="name">
                            <h4>{{auth()->user()->name}}</h4>
                        </div>
                    </a>	
                </div>
            </li>
            <li>
                <a title="" href="#">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    </i>
                </a>
                <ul class="dropdown">
                    <li><a href="{{ route('profile.show') }}" title=""><i class="icofont-user-alt-3"></i> My Account</a></li>
                    <li><a href="{{ route('create.quiz') }}" title=""><i class="icofont-plus"></i> Create Quiz</a></li>
                    <li><a class="invite-new" href="#" title=""><i class="icofont-brand-slideshare"></i> Invite Collegue</a></li>
                    <li><a href="#" title=""><i class="icofont-price"></i> Payout</a></li>
                    <li><a href="{{route('price.plans')}}" title=""><i class="icofont-flash"></i> Upgrade</a></li>
                    <li><a href="{{ route('help') }}" title=""><i class="icofont-question-circle"></i> Help</a></li>
                    <li><a href="#" title=""><i class="icofont-gear"></i> Setting</a></li>
                    <li><a href="{{ route('policy.show') }}" title=""><i class="icofont-notepad"></i> Privacy</a></li>
                    <li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i> Dark Mode</a></li>
                    <li class="logout"><a href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icofont-power"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    
</header><!-- header -->

<div class="top-sub-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="menu-btn">
                    <i class="">
                    <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
                </div>
                <div class="page-title">
                    <h4>Menu</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" title="">Manage Teams</a></li>
                </ul>
            </div>
        </div>
    </div>	
</div><!-- top sub bar -->
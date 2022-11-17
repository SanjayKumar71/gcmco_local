<style>
    /*body{*/
    /*    overflow-x: hidden!important;*/
    /*}*/
    .right_col{
        max-width: 90%;
        /*overflow: auto;*/
        margin-left: 2.25rem;
    }
    .about_text {
        width: 159%;
        overflow: auto !important;
    }
</style>

<nav class="  navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">

        <!-- Form -->
        <form class="form-inline me-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>

                <!-- Input -->
                <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search" />

                <!-- Prepend -->
                <div class="input-group-text">
                    <i class="fe fe-search"></i>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush list-group-focus list my-n3">
                            <a class="list-group-item" href="">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('assets/admin/assets/img/logo.png')}}" alt="..." class="avatar-img rounded" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Airbnb
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 2hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="team-overview.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('assets/admin/assets/img/avatars/teams/team-logo-2.jpg')}}" alt="..." class="avatar-img rounded" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Medium Corporation
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 2hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="project-overview.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img src="{{asset('assets/admin/assets/img/avatars/projects/project-1.jpg')}}" alt="..." class="avatar-img rounded" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Homepage Redesign
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="project-overview.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img src="{{asset('assets/admin/assets/img/avatars/projects/project-2.jpg')}}" alt="..." class="avatar-img rounded" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Travels & Time
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="project-overview.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img src="{{asset('assets/admin/assets/img/avatars/projects/project-3.jpg')}}" alt="..." class="avatar-img rounded" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Safari Exploration
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="profile-posts.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Dianna Smiley
                                        </h4>

                                        <!-- Status -->
                                        <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item" href="profile-posts.html">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Title -->
                                        <h4 class="text-body text-focus mb-1 name">
                                            Ab Hadley
                                        </h4>

                                        <!-- Status -->
                                        <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                        </div>
                    </div>
                </div> <!-- / .dropdown-menu -->

            </div>
        </form>

        <!-- User -->
        <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown me-4 d-none d-md-flex">

                <!-- Toggle -->
                <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon active">
            <i class="fe fe-bell"></i>
          </span>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                    <div class="card-header">

                        <!-- Title -->
                        <h5 class="card-header-title">
                            Notifications
                        </h5>

                        <!-- Link -->
                        <a href="#!" class="small">
                            View all
                        </a>

                    </div> <!-- / .card-header -->
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                                            and 3 others.
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-3.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Adolfo Hess</strong> commented
                                            <blockquote class="mb-0">
                                                “I don’t think this really makes sense to do without approval from Johnathan
                                                since he’s the one...”
                                            </blockquote>
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/img/avatars/profiles/avatar-4.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-5.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-6.')}}'" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-7.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small">
                                            <strong>Glen Rouse</strong> commented
                                            <blockquote class="mb-0">
                                                “I don’t think this really makes sense to do without approval from Johnathan
                                                since he’s the one...”
                                            </blockquote>
                                        </div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-8.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                                        </div>

                                    </div>
                                    <div class="col ms-n2">

                                        <!-- Content -->
                                        <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                        </div>
                    </div>
                </div> <!-- / .dropdown-menu -->
            </div>

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider" />
                    <a href="" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

    </div>
</nav>



{{--<!-- BEGIN TOP NAVIGATION BAR -->--}}

{{--<div class="header-inner">--}}
{{--    <!-- BEGIN LOGO -->--}}
{{--    <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">--}}

{{--        @if (isset($siteSettings->logo) && adminHasAssets($siteSettings->logo))--}}
{{--            <img src="{!! asset(uploadsDir().$siteSettings->logo) !!}" alt="Web Builder" class="img-responsive" />--}}
{{--        @else--}}
{{--            <img src="{!! asset('logo.png') !!}" alt="Web Builder" class="img-responsive" style="height: 47px !important;--}}
{{--    margin-top: -11px;" />--}}
{{--        @endif--}}

{{--    </a>--}}
{{--    <!-- END LOGO -->--}}
{{--    <!-- BEGIN RESPONSIVE MENU TOGGLER -->--}}
{{--    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
{{--        <img src="{{ asset('assets/admin/img/menu-toggler.png') }}" alt=""/>--}}
{{--    </a>--}}
{{--    <!-- END RESPONSIVE MENU TOGGLER -->--}}
{{--    <!-- BEGIN TOP NAVIGATION MENU -->--}}
{{--    <ul class="nav navbar-nav pull-right">--}}
{{--        <li class="dropdown" id="header_inbox_bar">--}}
{{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
{{--                <i class="fa fa-envelope"></i>--}}
{{--                <span class="badge">--}}
{{--						 5--}}
{{--                </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!-- BEGIN NOTIFICATION DROPDOWN -->--}}
{{--        <!-- BEGIN USER LOGIN DROPDOWN -->--}}
{{--        <li class="dropdown user">--}}
{{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
{{--                <img alt="admin avatar" width="29px" height="29px" src="{{ asset('assets/admin/img/avatar.png') }}"/>--}}
{{--                <span class="username">--}}
{{--                        {{ Auth::user()->fullName() }}--}}
{{--                    </span>--}}
{{--                <i class="fa fa-angle-down"></i>--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu">--}}
{{--                <li>--}}
{{--                    --}}{{--<a href="{{ route('backend/users/'.Auth::user()->id.'/edit') }}">--}}
{{--                    <a href="{{ route('admin.administrators.show', [Auth::user()->id]) }}">--}}
{{--                        <i class="fa fa-user"></i> My Profile--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="divider"></li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.users.change-password') }}">--}}
{{--                        <i class="fa fa-lock"></i> Change Password--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" id="trigger_fullscreen">--}}
{{--                        <i class="fa fa-arrows"></i> Full Screen--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.auth.logout') }}" id="header-logout-link">--}}
{{--                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- END USER LOGIN DROPDOWN -->--}}
{{--    </ul>--}}
{{--    <!-- END TOP NAVIGATION MENU -->--}}
{{--</div>--}}
{{--<!-- END TOP NAVIGATION BAR -->--}}

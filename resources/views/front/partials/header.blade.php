@php use \App\Http\Controllers\Front\ProgramsController; @endphp
<!-- Header Start Here -->
<header id="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-4">
                <div class="logoDv">
                    <a href="{{ route('index') }}">
                        @if (isset($siteSettings['siteSettings']->logo) && $siteSettings['siteSettings']->logo != '')
                            <figure><img src="{!! asset(uploadsDir().$siteSettings['siteSettings']->logo) !!}" alt="Web Builder" class="img-fluid" /></figure>
                        @else
                            <figure><img src="{{ asset('front_assets/img/heedway-logo.png') }}" class="img-fluid"></figure>
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-1">
                <div class="navbar_menus">
                    <ul class="menus">
                        <li class="menu-items"><a href="{{ route('index') }}">Home</a></li>
                        <li class="menu-items"><a href="{{ route('about-us') }}">About Us</a></li>
                        <li class="menu-items">
                            <button class="megamenu">
                                Programs
                            </button>
                        </li>
                        <li class="menu-items"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        @auth<li class="menu-items"><a href="{{ route('account') }}">Account</a></li>@endauth
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-7">
                <div class="right_menus">
                    <ul class="action_links">
                        @auth
                            <li class="menu-items">
                                <a href="{{ route('logout') }}" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.163" height="22.987" viewBox="0 0 19.163 22.987">
                                            <g id="Group_9040" data-name="Group 9040" transform="translate(-789.395 -335.809)">
                                                <path id="Path_38103" data-name="Path 38103" d="M792.938,545.282c-.261-.054-.526-.094-.782-.166a3.6,3.6,0,0,1-2.746-3.444,12.27,12.27,0,0,1,.8-5.191,4.768,4.768,0,0,1,2.13-2.57,4.2,4.2,0,0,1,2.091-.5,1.611,1.611,0,0,1,.687.237c.341.185.656.415.987.62a5.109,5.109,0,0,0,5.767,0c.267-.165.539-.325.79-.513a1.912,1.912,0,0,1,1.512-.307,4.258,4.258,0,0,1,3.254,2.339,9.607,9.607,0,0,1,1.046,3.728,18.541,18.541,0,0,1,.088,2.015,3.676,3.676,0,0,1-3.4,3.718.884.884,0,0,0-.146.042Z"
                                                    transform="translate(0 -186.486)" fill="#fff" />
                                                <path id="Path_38104" data-name="Path 38104" d="M869.836,341.337a5.54,5.54,0,1,1-5.565-5.527A5.558,5.558,0,0,1,869.836,341.337Z"
                                                    transform="translate(-65.461)" fill="#fff" />
                                            </g>
                                    </svg>
                                    Logout
                                </a>
                            </li>
                            @else
                            <li class="menu-items">
                                <a href="{{ route('sign-in') }}" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.163" height="22.987" viewBox="0 0 19.163 22.987">
                                            <g id="Group_9040" data-name="Group 9040" transform="translate(-789.395 -335.809)">
                                                <path id="Path_38103" data-name="Path 38103" d="M792.938,545.282c-.261-.054-.526-.094-.782-.166a3.6,3.6,0,0,1-2.746-3.444,12.27,12.27,0,0,1,.8-5.191,4.768,4.768,0,0,1,2.13-2.57,4.2,4.2,0,0,1,2.091-.5,1.611,1.611,0,0,1,.687.237c.341.185.656.415.987.62a5.109,5.109,0,0,0,5.767,0c.267-.165.539-.325.79-.513a1.912,1.912,0,0,1,1.512-.307,4.258,4.258,0,0,1,3.254,2.339,9.607,9.607,0,0,1,1.046,3.728,18.541,18.541,0,0,1,.088,2.015,3.676,3.676,0,0,1-3.4,3.718.884.884,0,0,0-.146.042Z"
                                                    transform="translate(0 -186.486)" fill="#fff" />
                                                <path id="Path_38104" data-name="Path 38104" d="M869.836,341.337a5.54,5.54,0,1,1-5.565-5.527A5.558,5.558,0,0,1,869.836,341.337Z"
                                                    transform="translate(-65.461)" fill="#fff" />
                                            </g>
                                    </svg>
                                    Sign In
                                </a>
                            </li>
                        @endauth
                    </ul>
                    <div class="canvas_btn">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End Here -->

<!-- Go To Top Button -->
<!-- <div class="go_to_top">
    <a href="#header-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div> -->
<!-- Go To Top Button -->

<!-- Mobile Header Start Here -->
<div class="mobile_header">
    <div class="cancel">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000" class="bi bi-x" viewBox="0 0 16 16">
            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </div>
    <ul class="mobile_menus">
        <li class="menu_items"><a class="menu_links active_menu" href="{{ route('index') }}">Home</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ route('about-us') }}">About</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ route('contact-us') }}">Contact</a></li>
    </ul>
</div>
<!-- Mobile Header End Here -->

<!-- Mega Menu Start Here -->
<div class="mega-menu">
    <div class="container">
        <div class="row">

            @php
                $cats     = $siteSettings['categories'];
                $subCats  = $siteSettings['subCategories'];
                $programs = $siteSettings['programs'];
            @endphp

            @if(isset($cats) && $cats != '')
                @foreach($cats as $cat)
                 
                    <div class="col-lg-4">
                        <div class="menu-box">
                            
                            <div class="title">
                                <h5>{{$cat->title}}</h5>
                            </div>
                            
                            @if(isset($programs) && count($programs))
                                <ul class="menus">
                                    @foreach($programs as $program)
                                        @if($program->category_id == $cat->id)
                                            <li class="menu-items"><a href="{{ route('program-detail',['programId' => $program->id ]) }}">{{ $program->title }}</a></li>
                                        @endif
                                    @endforeach
                            @endif

                            @if(isset($subCats) && $subCats != '')
                                    @php $count = 0; @endphp
                                    @foreach($subCats as $subCat)
                                        @if($subCat->parent == $cat->id)
                                            <li class="menu-items inner-items">
                                                <button class="for-inner{{ ++$count }}">{{ $subCat->title }}</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4">
                    
                    @if(isset($subCats) && $subCats != '')
                        @php $countProgarm = 0; @endphp

                        @foreach($subCats as $subCat)
                            @php $countProgarm++ @endphp
                            @if(isset($programs) && count($programs))
                                @if($countProgarm > 1)
                                    <div class="menu-box inner-menus{{ $countProgarm }}">
                                    @else
                                        <div class="menu-box inner-menus">
                                @endif
                                    <ul class="menus">
                                        @foreach($programs as $program)
                                            @if($program->category_id == $subCat->id)
                                                <li class="menu-items"><a href="{{ route('program-detail',['programId' => $program->id ]) }}">{{ $program->title }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        @endforeach

                    @endif

                </div>

            @endif
        </div>
    </div>
</div>
<!-- Mega Menu End Here -->
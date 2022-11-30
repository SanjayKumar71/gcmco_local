<!-- Header Start Here -->
<header id="headerTop">

    <div class="top_header">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="tophead_left">
                        <div class="tophead_content">
                            <i class="fa fa-phone"></i>
                            <span>{{ $siteSettings['siteSettings']->contact_phone }}</span>
                        </div>
                        <div class="tophead_content">
                            <i class="fas fa-mail-bulk"></i>
                            <span>{{ $siteSettings['siteSettings']->contact_email }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-5"></div>

                <div class="col-md-3 text-right">
                    <div class="tophead_social">
                        <a href="{{ $siteSettings['siteSettings']->facebook }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="{{ $siteSettings['siteSettings']->twitter }}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{ $siteSettings['siteSettings']->instagram }}" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="main_header" id="mainsecondheader">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <div class="header_logo_dv">
                        <a href="{{ route('index') }}">
                            <figure>
                                @if( isset( $siteSettings['siteSettings']->logo ) && $siteSettings['siteSettings']->logo != '' )
                                    <img src="{!! asset(uploadsDir().$siteSettings['siteSettings']->logo) !!}" class="img-fluid" alt="">
                                    @else
                                        <img src="{{ asset('front_assets/img/home/gcmco_logo.png') }}" class="img-fluid" alt="">
                                @endif
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="navbar_menus">
                        <ul class="menus">
                            <li class="menu-items"><a class="menu_anc" href="{{ route('index') }}">Home</a></li>
                            <li class="menu-items">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1">
                                        About
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('history') }}">History</a></li>
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('gcm_team') }}">GCM TEAM</a></li>
                                        <li><a class="dropdown-item the_drop_menu"
                                                href="{{ route('statement_of_faith') }}">Statement Of
                                                Faith</a></li>
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('who_we_are') }}">Who We Are</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-items"><a class="menu_anc" href="{{ route('give') }}">Give</a></li>
                            <li class="menu-items"><a class="menu_anc" href="{{ route('sponsor') }}">Sponsor</a></li>
                            <li class="menu-items"><a class="" href="#"></a>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1">
                                        Media
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('news_article') }}">News &
                                                Articles</a></li>
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('gallery') }}">Photo Gallery</a>
                                        </li>
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('video') }}">Videos</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="menu-items"><a href="premium-product.php">Get Involved</a></li> -->
                            <li class="menu-items">
                                <div class="dropdown">
                                    <button onclick="window.location.href='get_involved.php'"
                                        class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1">
                                        Get Involved
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('where_most_needed') }}">Where
                                                Most Needed</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item the_drop_menu" href="{{ route('women_distress') }}">Women in
                                                Distress</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item the_drop_menu" href="{{ route('hungary_kid') }}">Hungry Kids
                                                program</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item the_drop_menu" href="{{ route('women_distress') }}">Drill A
                                                Well</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item the_drop_menu" href="{{ route('hungary_kid') }}">Hope Homes</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item the_drop_menu" href="{{ route('women_distress') }}">
                                                Sponsor a Missionary &raquo;
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item the_drop_menu"
                                                        href="{{ route('hungary_kid') }}">Lawrence Family</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu"
                                                        href="{{ route('women_distress') }}">Peter Odoyo</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu" href="{{ route('hungary_kid') }}">Joseph
                                                        Okoth</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu"
                                                        href="{{ route('women_distress') }}">Preston Jumba</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu"
                                                        href="{{ route('hungary_kid') }}">Lindenberg Family</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu"
                                                        href="{{ route('women_distress') }}">Daniel Balume</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item the_drop_menu" href="{{ route('hungary_kid') }}">Vivian
                                                        Mutai</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- <li class="menu-items"><a href="contact.php">Contact</a></li> -->
                            <li class="menu-items">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1">
                                        Contact
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item the_drop_menu"
                                                href="{{ route('contact_information') }}">Contact
                                                Information</a></li>
                                        <li><a class="dropdown-item the_drop_menu" href="{{ route('request_speaker') }}">Request a
                                                Speaker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li><button data-bs-toggle="modal" data-bs-target="#headermodal"><i
                                        class="fa fa-search"></i></button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 align-self-center">
                    <div class="header_right">
                        <a href="{{ route('where_most_needed') }}" class="btn gcmco-btn">Give</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
<div class="open-accessibility-text"></div>
<!-- Header End Here -->

<!-- Mobile Header Start Here -->
<!-- <div class="mobile_header">
    <div class="cancel">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </div>
    <ul class="mobile_menus">
        <li class="menu_items"><a class="menu_links active_menu" href="shop.php">All Plants</a></li>
        <li class="menu_items"><a class="menu_links" href="premium-product.php">Others plants</a></li>
        <li class="menu_items"><a class="menu_links" href="nutrients.php">Nutrients & Additives</a></li>
        <li class="menu_items"><a class="menu_links" href="kigi-birds.php">Kigi Birds</a></li>
        <li class="menu_items"><a class="menu_links" href="planting-mixes.php">Planting Mixes</a></li>
        <li class="menu_items"><a class="menu_links" href="shop.php">Products</a></li>
        <li class="menu_items"><a class="menu_links" href="campaign.php">Donate</a></li>
        <li class="menu_items"><a class="menu_links" href="contact.php">Contact Us</a></li>
    </ul>
</div> -->
<!-- Mobile Header End Here -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class=" search_ico_modal modal fade" id="headermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div> -->
            <div class="modal-body">
            <span class="btn_close icon_close" data-bs-dismiss="modal" aria-label="Close"></span>
                <div class="container">
                    <div class="form-group">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                        <button type="button" class="btn btn-outline-primary">search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
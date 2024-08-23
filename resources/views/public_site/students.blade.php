<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="" name="keywords"/>
    <meta content="" name="author"/>
    <meta content="" name="robots"/>

    <!-- DESCRIPTION -->
    <meta content="EduChamp : Education HTML Template" name="description"/>

    <meta content="" property="og:image"/>
    <meta content="telephone=no" name="format-detection">

    <!-- FAVICONS ICON ============================================= -->
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

    <!-- PAGE TITLE HERE ============================================= -->
    <title>VTA Official Website</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link href="assets/css/assets.css" rel="stylesheet" type="text/css">

    <!-- TYPOGRAPHY ============================================= -->
    <link href="assets/css/typography.css" rel="stylesheet" type="text/css">

    <!-- SHORTCODES ============================================= -->
    <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet" type="text/css">

    <!-- STYLESHEETS ============================================= -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link class="skin" href="assets/css/color/color-1.css" rel="stylesheet" type="text/css">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link href="assets/vendors/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SLIDER END -->
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                    </div>
                    <div class="topbar-right">
                        <ul>
                            <li>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <!-- Header Logo ==== -->
                    <div class="menu-logo">
                        <a href="{{ url('/') }}"><img alt="" src="assets/images/logo-white.png"></a>
                    </div>
                    <!-- Mobile Nav Button ==== -->
                    <button aria-controls="menuDropdown" aria-expanded="false"
                            aria-label="Toggle navigation" class="navbar-toggler collapsed menuicon justify-content-end"
                            data-target="#menuDropdown"
                            data-toggle="collapse" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
                                <li><a class="btn-link" href="javascript:"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="btn-link" href="javascript:"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="btn-link" href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                                <!-- Search Button ==== -->
                                <li class="search-btn">
                                </li>

                                <li><a class="btn-link mr-2" href="{{ url('/public_login') }}">Login</a></li>
                                <li><a class="btn-link" href="{{ url('/public_register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input class="form-control" name="search" placeholder="Type to search" type="text" value="">
                            <span><i class="ti-search"></i></span>
                        </form>
                        <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
                    <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                        <div class="menu-logo">
                            <a href="{{ url('/') }}"><img alt="" src="assets/images/logo.png"></a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>


                            <li><a href="javascript:">About Us <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about') }}">Overview</a></li>
                                    <!--                                    <li><a>FAQ's</a></li>-->


                                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                                    <!--                                    <li><a href="profile.html">Profile</a></li>-->
                                    <!--                                    <li><a href="membership.html">Membership</a></li>-->
                                    <!--                                    <li><a href="error-404.html">404 Page</a></li>-->
                                </ul>
                            </li>

                            <li><a href="{{ url('/student') }}">Events</a></li>
                            <li><a href="{{ url('/courses') }}">Our Courses</a></li>
                            <li><a href="{{ url('/contact-2') }}">Contact Us</a></li>
                        </ul>
                        <div class="nav-social-link">
                            <a href="javascript:"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark"
             style="background-image:url(assets/images/banner/banner1.jpg); padding-top: 165px;">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Events</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Portfolio  -->
            <div class="section-area section-sp1 gallery-bx">
                <div class="container">
                    <div class="feature-filters clearfix center m-b40">
                        <ul class="filters" data-toggle="buttons">
                            <li class="btn active" data-filter="">
                                <input type="radio">
                                <a href="#"><span>All</span></a>
                            </li>
                            <li class="btn" data-filter="happening">
                                <input type="radio">
                                <a href="#"><span>Happening</span></a>
                            </li>
                            <li class="btn" data-filter="upcoming">
                                <input type="radio">
                                <a href="#"><span>Upcoming</span></a>
                            </li>
                            <li class="btn" data-filter="expired">
                                <input type="radio">
                                <a href="#"><span>Expired</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul class="ttr-gallery-listing magnific-image row " id="masonry">



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
    <footer>
        <div class="footer-top">
            <div class="pt-exebar">
                <div class="container">
                    <div class="d-flex align-items-stretch">
                        <div class="pt-logo mr-auto" style="width: 50%;">
                            <a href="{{ url('/') }}"><img alt="" src="assets/images/logo-white.png" style="max-width: 30%"/></a>
                        </div>
                        <div class="pt-social-link">
                            <ul class="list-inline m-a0">
                                <li><a class="btn-link" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="btn-link" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="btn-link" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="btn-link" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="pt-btn-join">
                            <a class="btn " href="#">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
                            <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on
                                job searching.</p>
                            <div class="subscribe-form m-b20">
                                <form action="#"
                                      class="subscription-form"
                                      method="post">
                                    <div class="ajax-message"></div>
                                    <div class="input-group">
                                        <input class="form-control" name="email" placeholder="Your Email Address"
                                               required="required" type="email">
                                        <span class="input-group-btn">
											<button class="btn" name="submit" type="submit" value="Submit"><i
                                                    class="fa fa-arrow-right"></i></button>
										</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Company</h5>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/faq') }}">About</a></li>
                                        <li><a href="{{ url('/contact-2') }}">FAQs</a></li>
                                        <li><a href="{{ url('/contact-2') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Get In Touch</h5>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Dashboard</a>
                                        </li>
                                        {{--                                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>--}}
                                        <li><a href="{{ url('/student') }}">Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Courses</h5>
                                    <ul>
                                        <li><a href="{{ url('/student') }}">Courses</a></li>
                                        <!--                                        <li><a href="courses-details.html">Details</a></li>-->
                                        <!--                                        <li><a href="membership.html">Membership</a></li>-->
                                        <!--                                        <li><a href="profile.html">Profile</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic1.jpg"><img
                                            alt="" src="assets/images/gallery/pic1.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic2.jpg"><img
                                            alt="" src="assets/images/gallery/pic2.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic3.jpg"><img
                                            alt="" src="assets/images/gallery/pic3.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic4.jpg"><img
                                            alt="" src="assets/images/gallery/pic4.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic5.jpg"><img
                                            alt="" src="assets/images/gallery/pic5.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic6.jpg"><img
                                            alt="" src="assets/images/gallery/pic6.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic7.jpg"><img
                                            alt="" src="assets/images/gallery/pic7.jpg"></a></li>
                                <li><a class="magnific-anchor" href="assets/images/gallery/pic8.jpg"><img
                                            alt="" src="assets/images/gallery/pic8.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"><a href="#"
                                                                              target="_blank">Developed By
                            E.V.G.A.MADUSHANI </a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>

<script>
    function getAllEvents() {

        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:8000' + '/events/getAll',
            async: true,
            dataType: "json"
        }).done(function (responce) {

            console.log("responce", responce);
            if (responce['events'] !== []) {
                let events = responce['events'];

                console.log("events", events);
                for (let i in events) {

                    let event = events[i];

                    console.log("events", events);
                    let class_id = students['class_id'];

                    console.log("class_id", class_id);
                    let id = students['id'];
                    let title = students['title'];
                    let description = students['description'];
                    let session_id = students['session_id'];
                    let start = students['start'];
                    let end = students['end'];
                    let updated_at = students['updated_at'];
                    let created_at = students['created_at'];

                    let tableRow = `<li class="action-card col-lg-6 col-md-6 col-sm-12 upcoming">
<div class="event-bx m-b30">
<div class="action-box">
<img src="assets/images/event/pic${Math.floor(Math.random() * 3)}.jpg" alt="">
</div>
<div class="info-bx d-flex">
<div>
<div class="event-time">
<div class="event-date">${new Date(start).toISOString().split('T')[0]}</div>
<div class="event-month">${new Date(start).toLocaleString('en-US', {month: 'long'})}</div>
</div>
</div>
<div class="event-info">
<h4 class="event-title"><a href="#">${title}</a></h4>
<ul class="media-post">
<li><a href="#"><i class="fa fa-clock-o"></i> ${start.split(' ')[1]}</a></li>
<li><a href="#"><i class="fa fa-map-marker"></i> Galle Branch</a></li>
</ul>
 <p>${description}</p>
</div>
</div>
</div>
</li>`;

                    $('#masonry').append(tableRow);
                }
            }
        });
    }

    getAllEvents();
</script>
</body>

</html>

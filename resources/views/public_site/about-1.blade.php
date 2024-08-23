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
    <!-- Inner Content Box ==== -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark"
             style="background-image:url(assets/images/banner/banner2.jpg); padding-top: 165px;">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Overview of VTA</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Overview</li>
                </ul>
            </div>
        </div>
        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
        <div class="content-block">
            <!-- About Us ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a class="icon-cell" href="#"><img alt="" src="assets/images/icon/icon1.png"/></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Our Vision</h5>
                                    <p>To enrich lives through globally competent employments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a class="icon-cell" href="#"><img alt="" src="assets/images/icon/icon2.png"/></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Our Mission</h5>
                                    <p>To be the most dynamic and Innovative Vocational Education, training and service
                                        provider in Sri Lanka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a class="icon-cell" href="#"><img alt="" src="assets/images/icon/icon3.png"/></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Key Of Success</h5>
                                    <p>Prioritize the success and development of our students, ensuring they receive
                                        personalized support and guidance throughout their learning journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="feature-container">
                                <div class="feature-md text-white m-b20">
                                    <a class="icon-cell" href="#"><img alt="" src="assets/images/icon/icon4.png"/></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Our Philosophy</h5>
                                    <p>We believe in the transformative power of education to change lives and uplift
                                        communities. Our goal is to empower individuals with the skills and confidence
                                        needed to succeed in their chosen fields.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us END ==== -->
            <!-- Our Story ==== -->
            <div class="section-area bg-gray section-sp1 our-story">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-5 col-md-12 heading-bx">
                            <h2 class="m-b10">Our Objectives</h2>

                            <ol class="fw4" style="list-style: square; ">
                                <li style="margin-bottom: 7px">Formulation and providing vocational training programs to
                                    youth and make them
                                    competent with various trades.
                                </li>
                                <li style="margin-bottom: 7px">Provide accessibility to youth by establishing vocational
                                    training centers in rural
                                    areas.
                                </li>
                                <li style="margin-bottom: 7px">Conduct trainer training programs to deliver the
                                    vocational training effectively and
                                    efficiently.
                                </li>
                                <li style="margin-bottom: 7px">Conduct competency based assessments / final assessments,
                                    issue National Vocational
                                    Qualification (NVQ) certificates and other certificates.
                                </li>
                                <li style="margin-bottom: 7px">Provide career guidance and counselling to school leavers
                                    and other youth.
                                </li>
                            </ol>

                        </div>
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img alt="" src="assets/images/about/pic1.jpg"/>
                                <a class="popup-youtube video" href="https://www.youtube.com/watch?v=x_sJzVe9P_8"><i
                                    class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Story END ==== -->
            <!-- Our Status ==== -->
            <div class="section-area content-inner section-sp1">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-primary">
                                        <span class="counter">3000</span><span>+</span>
                                    </div>
                                    <span class="counter-text">Completed Projects</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-black">
                                        <span class="counter">2500</span><span>+</span>
                                    </div>
                                    <span class="counter-text">Happy Clients</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-primary">
                                        <span class="counter">1500</span><span>+</span>
                                    </div>
                                    <span class="counter-text">Questions Answered</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-black">
                                        <span class="counter">1000</span><span>+</span>
                                    </div>
                                    <span class="counter-text">Ordered Coffee's</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Status END ==== -->
            <!-- About Content ==== -->
            <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center"
                 style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="join-content-bx text-white">
                                <h2>Learn a new skill online on <br/> your time</h2>
                                <h4><span class="counter">57,000 </span> Online Courses</h4>
                                <p>The Vocational Training Authority of Sri Lanka(VTA) was established on 16th August
                                    1995 under the provisions of the Vocational Training Authority of Sri Lanka Act
                                    No.12 of 1995.It was a concept of His Excellency the former President Mahinda
                                    Rajapaksa when he was the Hon. Ministry of Labor and Vocational Training. VTA was
                                    established with the intent to provide skills for employment. The Manpower Division,
                                    the training arm of Labor Department which was running Technical and Vocational
                                    training programs in many parts of Sri Lanka, this was converted to the newly
                                    constitute Vocational Training Authority (VTA) making vocational training more
                                    accessible to rural youth and depressed segments in the country. <br><br>
                                    The key intention behind establishing the VTA was to reach the rural mass of the
                                    country which was 72% of the total population, and make them to be skillful to find
                                    employment opportunities both locally and internationally. The the Board of
                                    Directors representing various ministries assigned with specific subjects areas,
                                    i.e., youth affairs, education, industrial development, finance and labor including
                                    the corporate sector.
                                    This diversified representation at the board level leads to fruitful dialogue
                                    infusing wealth of knowledge and experience by them in their own fields. The
                                    chairman of the board is also the Chief Executive officer of VTA by virtue of the
                                    act while serving as the Commission member for Tertiary and Vocational and Education
                                    Commission (TVEC) and the University of Vocational
                                </p>

                                <p>
                                    Technology(UNIVOTEC), the most important entities established under the purview of
                                    the Ministery of Education as of today, the VTA is operating as the largest
                                    vocational training network with 174 Vocational Training Centres (VTC), 22 District
                                    Vocational Training Centers (DVTC) and 8 National Vocational Training Institutes
                                    (NVTI), which was previously had just 31 Vocational Training Centres in 1995.
                                    Approximately, 35,000 youth get trained annually in 95 different full-time courses
                                    in 19 various trade sectors. When completing the training, youth are directed for
                                    local and foreign employment opportunities. Further, students are also eligible to
                                    apply for financial assistance scheme called "SEPI" to provide loans for those who
                                    intend to start self employment.
                                </p>

                                <a class="btn button-md" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Content END ==== -->
            <!-- Testimonials ==== -->
<!--            <div class="section-area section-sp2">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12 heading-bx left">-->
<!--                            <h2 class="title-head text-uppercase">what people <span>say</span></h2>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable content of-->
<!--                                a page</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">-->
<!--                        <div class="item">-->
<!--                            <div class="testimonial-bx">-->
<!--                                <div class="testimonial-thumb">-->
<!--                                    <img alt="" src="assets/images/testimonials/pic1.jpg">-->
<!--                                </div>-->
<!--                                <div class="testimonial-info">-->
<!--                                    <h5 class="name">Peter Packer</h5>-->
<!--                                    <p>-Art Director</p>-->
<!--                                </div>-->
<!--                                <div class="testimonial-content">-->
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an-->
<!--                                        unknown printer took a galley of type...</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="testimonial-bx">-->
<!--                                <div class="testimonial-thumb">-->
<!--                                    <img alt="" src="assets/images/testimonials/pic2.jpg">-->
<!--                                </div>-->
<!--                                <div class="testimonial-info">-->
<!--                                    <h5 class="name">Peter Packer</h5>-->
<!--                                    <p>-Art Director</p>-->
<!--                                </div>-->
<!--                                <div class="testimonial-content">-->
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an-->
<!--                                        unknown printer took a galley of type...</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- Testimonials END ==== -->
        </div>
        <!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->
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
</body>


</html>

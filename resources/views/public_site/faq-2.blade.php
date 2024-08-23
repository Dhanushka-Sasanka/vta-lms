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
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Frequently Asked Questions</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Faqs 2</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
			<!-- About Us -->
			<div class="section-area section-sp1 bg-gray">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Our Philosophy</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Kingster's Principle</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""/></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Key Of Success</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""/></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Our Philosophy</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services -->
            <div class="section-area section-sp1">
                <div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="heading-bx left">
								<h2 class="m-b10 title-head">Asked <span> Questions</span></h2>
							</div>
							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<div class="ttr-accordion m-b30 faq-bx" id="accordion1">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1">
											Why won't my payment go through? </a> </h6>
									</div>
									<div id="faq1" class="acod-body collapse">
										<div class="acod-content">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2">
											How do I get a refund?</a> </h6>
									</div>
									<div id="faq2" class="acod-body collapse">
										<div class="acod-content">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq3" class="collapsed"  data-parent="#faq3">
											How do I redeem a coupon? </a> </h6>
									</div>
									<div id="faq3" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq4" class="collapsed"  data-parent="#faq4">
											Why aren't my courses showing in my account? </a> </h6>
									</div>
									<div id="faq4" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq5" class="collapsed"  data-parent="#faq5">
											Changing account name </a> </h6>
									</div>
									<div id="faq5" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
							</div>
							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="bg-primary text-white contact-info-bx">
								<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<div class="widget widget_getintuch">
									<ul>
										<li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New York New York</li>
										<li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>
										<li><i class="ti-email"></i>info@example.com</li>
									</ul>
								</div>
								<h5 class="m-t0 m-b20">Follow Us</h5>
								<ul class="list-inline contact-social-bx">
									<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

                </div>
            </div>
            <!-- Your Faq End -->
			<!-- Company Stats -->
			<div class="section-area content-inner section-sp1 bg-gray">
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
			<!-- Company Stats END -->
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
    <button class="back-to-top fa fa-chevron-up" ></button>
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
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>

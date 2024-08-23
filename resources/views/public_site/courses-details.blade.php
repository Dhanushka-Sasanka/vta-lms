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
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Courses Details</h1>
				 </div>
            </div>
        </div>

		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Courses Details</li>
				</ul>
			</div>
		</div>

		<div class="content-block">

			<div class="section-area section-sp1">
                <div class="container" id="course_detail_container">
					 <div class="row d-flex flex-row-reverse">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="course-detail-bx">
								<div class="course-price">
									<del>$190</del>
									<h4 class="price">$120</h4>
								</div>
								<div class="course-buy-now text-center">
									<a href="#" class="btn radius-xl text-uppercase">Buy Now This Courses</a>
								</div>
								<div class="teacher-bx">
									<div class="teacher-info">
										<div class="teacher-thumb">
											<img src="assets/images/testimonials/pic1.jpg" alt=""/>
										</div>
										<div class="teacher-name">
											<h5>Hinata Hyuga</h5>
											<span>Science Teacher</span>
										</div>
									</div>
								</div>
								<div class="cours-more-info">
									<div class="review">
										<span>3 Review</span>
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="price categories">
										<span>Categories</span>
										<h5 class="text-primary">Frontend</h5>
									</div>
								</div>
								<div class="course-info-list scroll-page">
									<ul class="navbar">
										<li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
										<li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a></li>
										<li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
										<li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="courses-post">
								<div class="ttr-post-media media-effect">
									<a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a>
								</div>
								<div class="ttr-post-info">
									<div class="ttr-post-title ">
										<h2 class="post-title">Nvidia and UE4 Technologies Practice</h2>
									</div>
									<div class="ttr-post-text">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="courese-overview" id="overview">
								<h4>Overview</h4>
								<div class="row">
									<div class="col-md-12 col-lg-4">
										<ul class="course-features">
											<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
											<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
											<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
											<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
											<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
											<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
											<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
										</ul>
									</div>
									<div class="col-md-12 col-lg-8">
										<h5 class="m-b5">Course Description</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										<h5 class="m-b5">Certification</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										<h5 class="m-b5">Learning Outcomes</h5>
										<ul class="list-checked primary">
											<li>Over 37 lectures and 55.5 hours of content!</li>
											<li>LIVE PROJECT End to End Software Testing Training Included.</li>
											<li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
											<li>Information packed practical training starting from basics to advanced testing techniques.</li>
											<li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
											<li>Course content designed by considering current software testing technology and the job market.</li>
											<li>Practical assignments at the end of every session.</li>
											<li>Practical learning experience with live project work and examples.cv</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="m-b30" id="curriculum">
								<h4>Curriculum</h4>
								<ul class="curriculum-list">
										<li>
											<h5>First Level</h5>
											<ul>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 1.</span> Introduction to UI Design
													</div>
													<span>120 minutes</span>
												</li>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 2.</span> User Research and Design
													</div>
													<span>60 minutes</span>
												</li>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 3.</span> Evaluating User Interfaces Part 1
													</div>
													<span>85 minutes</span>
												</li>
											</ul>
										</li>
										<li>
											<h5>Second Level</h5>
											<ul>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 1.</span> Prototyping and Design
													</div>
													<span>110 minutes</span>
												</li>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 2.</span> UI Design Capstone
													</div>
													<span>120 minutes</span>
												</li>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson 3.</span> Evaluating User Interfaces Part 2
													</div>
													<span>120 minutes</span>
												</li>
											</ul>
										</li>
										<li>
											<h5>Final</h5>
											<ul>
												<li>
													<div class="curriculum-list-box">
														<span>Part 1.</span> Final Test
													</div>
													<span>120 minutes</span>
												</li>
												<li>
													<div class="curriculum-list-box">
														<span>Part 2.</span> Online Test
													</div>
													<span>120 minutes</span>
												</li>
											</ul>
										</li>
									</ul>
							</div>
							<div class="" id="instructor">
								<h4>Instructor</h4>
								<div class="instructor-bx">
									<div class="instructor-author">
										<img src="assets/images/testimonials/pic1.jpg" alt="">
									</div>
									<div class="instructor-info">
										<h6>Keny White </h6>
										<span>Professor</span>
										<ul class="list-inline m-tb10">
											<li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
										</ul>
										<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
								<div class="instructor-bx">
									<div class="instructor-author">
										<img src="assets/images/testimonials/pic2.jpg" alt="">
									</div>
									<div class="instructor-info">
										<h6>Keny White </h6>
										<span>Professor</span>
										<ul class="list-inline m-tb10">
											<li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
										</ul>
										<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
							</div>
							<div class="" id="reviews">
								<h4>Reviews</h4>

								<div class="review-bx">
									<div class="all-review">
										<h2 class="rating-type">3</h2>
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>3 Rating</span>
									</div>
									<div class="review-bar">
										<div class="bar-bx">
											<div class="side">
												<div>5 star</div>
											</div>
											<div class="middle">
												<div class="bar-container">
													<div class="bar-5" style="width:90%;"></div>
												</div>
											</div>
											<div class="side right">
												<div>150</div>
											</div>
										</div>
										<div class="bar-bx">
											<div class="side">
												<div>4 star</div>
											</div>
											<div class="middle">
												<div class="bar-container">
													<div class="bar-5" style="width:70%;"></div>
												</div>
											</div>
											<div class="side right">
												<div>140</div>
											</div>
										</div>
										<div class="bar-bx">
											<div class="side">
												<div>3 star</div>
											</div>
											<div class="middle">
												<div class="bar-container">
													<div class="bar-5" style="width:50%;"></div>
												</div>
											</div>
											<div class="side right">
												<div>120</div>
											</div>
										</div>
										<div class="bar-bx">
											<div class="side">
												<div>2 star</div>
											</div>
											<div class="middle">
												<div class="bar-container">
													<div class="bar-5" style="width:40%;"></div>
												</div>
											</div>
											<div class="side right">
												<div>110</div>
											</div>
										</div>
										<div class="bar-bx">
											<div class="side">
												<div>1 star</div>
											</div>
											<div class="middle">
												<div class="bar-container">
													<div class="bar-5" style="width:20%;"></div>
												</div>
											</div>
											<div class="side right">
												<div>80</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
            </div>
        </div>


    </div>

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
<script src="assets/js/jquery.scroller.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>

</body>

</html>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Superior Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	{{-- <link rel="stylesheet" href="css/animate.css"> --}}
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
	{{-- <link rel="stylesheet" href="css/icomoon.css"> --}}
    <link href="{{ asset('/css/icomoon.css') }}" rel="stylesheet">

	<!-- Bootstrap  -->
	{{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">


	<!-- Magnific Popup -->
	{{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

	<!-- Owl Carousel  -->
	{{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">

	{{-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> --}}
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">


	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

   

    
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
	<body>

	<div class="fh5co-loader"></div>
  
	  </div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: 042-38103777</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.html">Library<span>.</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class="active"><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('books')}}">Courses</a></li>
							<li><a href="{{url('prices')}}">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="{{url('contact')}}">Contact</a></li>
							<li class="btn-cta"><a href="{{url('login')}}"><span>Logout</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/superior.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Welcome To Superior Library</h1>
							{{-- <h2>Free html5 templates Made by <a href="#" target="_blank">freehtml5.co</a></h2> --}}
							<p><a class="btn btn-primary btn-lg btn-learn" href="#">Take A Course</a> 
                                <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Students</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Courses</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Instructor</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="997585" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Earnings</span>
				</div>
			</div>
		</div>
	</div>

	{{-- <div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Take A Course</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="images/work_1.png" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>We Want You To Learn English</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>Far far away, behind the word</li>
								<li><i class="icon-check2"></i>There live the blind texts</li>
								<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="#"><i class="icon-play"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="images/work_1.png" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<div class="mt">
							<div>
								<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
							<div>
								<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<section class="main-course-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course-category-title">
                        <h2 class="h2-subtitle">Course Category</h2>
                        <h2 class="h2-title">Explore Popular Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-1.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-1-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Learn Data Science</h3></a>
                            <p>Data is Everything</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-2.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-2-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Business Strategy</h3></a>
                            <p>Improve your business</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-3.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-3-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Learn Art &amp; Design</h3></a>
                            <p>Fun &amp; Challenging</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-4.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-4-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Learn Lifestyle</h3></a>
                            <p>New Skills, New You</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-5.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-5-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Learn Marketing</h3></a>
                            <p>Improve your business</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="course-category-box">
                        <div class="course-category-icon">
                            <img class="dis-yes" src="images/course-category-icon-6.png" alt="icon">
                            <img class="dis-no" src="images/course-category-icon-6-w.png" alt="icon">
                        </div>
                        <div class="course-category-content">
                            <a href="courses.html"><h3 class="h3-title">Learn Finance</h3></a>
                            <p>Fun &amp; Challenging</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Department</h2>
					<p>Librarians have always been among the most thoughtful and helpful people. They are teachers without a classroom. No libraries, no progress.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid proj-bottom">
			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bsrai-image.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<!-- <h3>Web Master</h3> -->
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bsrai-image.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<!-- <h3>Virtual Assistant</h3> -->
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bsrai-image.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<!-- <h3>Read Books</h3> -->
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bscommerce-image.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<!-- <h3>Programming</h3> -->
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bsaf-image-3.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<!-- <h3>Technician</h3> -->
						<span>View Course</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/bsenglish-image.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<!-- <h3>Photography</h3> -->
						<span>View Course</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">
					 <h4>How would you describe a good online course?</h4>
					 <p>A good online course is engaging and challenging. It invites students to participate, motivates them to contribute and captures their interest and attention. It capitalizes on the joy of learning and challenges students to enhance their skills, abilities and knowledge.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>What is the content of a course?</h4>
						<p>Any informational material that is required for participation or understanding content such as assigned readings, video recordings, exams, and any other material needed for learning. </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>What is positive about distance learning?</h4>
						<p>The top benefit of distance education is its flexibility. Students can choose when, where, and how they learn by selecting the time, place, and medium for their education. For those who want direct, live access to teachers there are video conferencing options.  </p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">Create A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>What are the elements of a course?</h2>
					<p>Course elements are the building blocks that make up your course. We will use the RASE Pedagogical Model (Churchill et al., 2013) pedagogical model to frame the four main elements that make up any course: Resources, Activities, Supports, and Evaluations.</p>
				</div>
			</div>

			<div class="row bs-wizard animate-box" style="border-bottom:0;">
                
				<div class="col-xs-3 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum"><h4>Step 1</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Create A Free Course</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step active"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Step 2</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Upload Content</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Step 3</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Make Your Course Beautiful</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
					<div class="text-center bs-wizard-stepnum"><h4>Step 4</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Start Making Money</p></div>
				</div>
			</div>

		</div>
	</div>

	{{-- <div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Testimonials</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/img 11.jpeg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/img 12.jpeg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person_3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!--Instructor Start-->
<section class="main-instructor">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="instructor-title">
                    <h2 class="h2-subtitle">Best coach</h2>
                    <h2 class="h2-title">Our Expert Instructor</h2>
                </div>
            </div>
        </div>
        <div class="row instructor-slider">
            <div class="col-lg-3">
                <div class="instructor-box">
                    <div class="instructor-img">
                        <img src="images/saqib ali.png" alt="Instructor">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <a href="instructor-detail.html"><h3 class="h3-title">Saqib Ali</h3></a>
                    <p>Instructor</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="instructor-box">
                    <div class="instructor-img">
                        <img src="images/sir rauf.png" alt="Instructor">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <a href="instructor-detail.html"><h3 class="h3-title">Sir Rauf</h3></a>
                    <p>Instructor</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="instructor-box">
                    <div class="instructor-img">
                        <img src="images/sir english.png" alt="Instructor">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <a href="instructor-detail.html"><h3 class="h3-title">Sir</h3></a>
                    <p>Instructor</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="instructor-box">
                    <div class="instructor-img">
                        <img src="images/miss mehwish.png" alt="Instructor">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <a href="instructor-detail.html"><h3 class="h3-title">Miss Mehwish</h3></a>
                    <p>Instructor</p>
                </div>
            </div>
            {{-- <div class="col-lg-3">
                <div class="instructor-box">
                    <div class="instructor-img">
                        <img src="images/instructor-5.jpg" alt="Instructor">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <a href="instructor-detail.html"><h3 class="h3-title">Kelly Franklin</h3></a>
                    <p>Instructor</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Instructor End-->

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Recent Post</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/techician.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/programming.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/cam.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-started" style="background-image:url(images/static.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>The beginning of something great starts with a single step</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About University</h4>
					<p>Superior University has built a level of trust and confidence among its existing and aspiring students due to the launch of innovative but effective study and work plans.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">FreeHTML5.co</a> Demo Images: <a href="#" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	{{-- <script src="js/jquery.min.js"></script> --}}
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
	<!-- jQuery Easing -->
	{{-- <script src="js/jquery.easing.1.3.js"></script> --}}
    <script src="{{ asset('js/jquery.easing.1.3.js') }}" ></script>

	<!-- Bootstrap -->
	{{-- <script src="js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
	<!-- Waypoints -->
	{{-- <script src="js/jquery.waypoints.min.js"></script> --}}
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" ></script>
	<!-- Stellar Parallax -->
	{{-- <script src="js/jquery.stellar.min.js"></script> --}}
    <script src="{{ asset('js/jquery.stellar.min.js') }}" ></script>
	<!-- Carousel -->
	{{-- <script src="js/owl.carousel.min.js"></script> --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}" ></script>

	<!-- countTo -->
	{{-- <script src="js/jquery.countTo.js"></script> --}}
    <script src="{{ asset('js/jquery.countTo.js') }}" ></script>

	<!-- Magnific Popup -->
	{{-- <script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script> --}}
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" ></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}" ></script>
	<!-- Main -->
	{{-- <script src="js/main.js"></script> --}}
    <script src="{{ asset('js/main.js') }}" ></script>

	
	
	</body>
</html>


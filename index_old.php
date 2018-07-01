<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Astik - Web Developer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Astik, Web Design, Web Developer, Website, Api Integration, Mobile App, Web Services, Responsive Web Design, Blog, Web Technologies, Web Developers Of Mumbai, Mumbai, India, Goregaon(west), Goregaon West, Astik Unagar" />
<!-- Default-JavaScript-File -->

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

<!-- default-css-files -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<!-- default-css-files -->

<!-- style.css-file -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //style.css-file -->

	<link href="//fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>
<!-- Head -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- navigation -->
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">www.astik.tk</a>
        </div>
		<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right cl-effect-15">
				<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
                <li><a class="page-scroll scroll" href="#home">Home</a></li>
                <li><a class="page-scroll scroll" href="#about">About</a></li>
                <li><a class="page-scroll scroll" href="#services">Services</a></li>
                <li><a class="page-scroll scroll" href="#portfolio">Portfolio</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="page-scroll scroll" href="#education">Education</a></li>
						<li><a class="page-scroll scroll" href="#workexperience">WorkExperience</a></li>
					</ul>
				</li>
				<li><a class="page-scroll scroll" href="#skills">skills</a></li>
				<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
            </ul>
        </div>
	</div>
</nav>
<!-- //navigation -->
<!-- Experience Count -->
<?php
$year_now = date("Y");
$year_experience = (int)$year_now - 2014;
?>
<!-- banner -->
<section class="banner" id="home">
	<div class="container">
		<div class="col-md-5 banner-left">
			<img src="images/astik.png" alt="" /> 
		</div>
		<div class="col-md-7 banner-right">
			<h1>Welcome to my portfolio,my name is </h1>
			<span>astik unagar</span>
			<h2>having industry experience of <?php echo $year_experience;?> years.</h2>
			<p>Having focused completely on web technologies and their use to turn the ideas into business.</p>
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa  fa-chevron-down"></i>
			</a>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="about-head text-center ">
			<h3>About me</h3>
			<div class="about-grids-top">
				<div class="col-md-3 about-grid">
					<i class="fa fa-laptop" aria-hidden="true"></i>
					<h4>Web design</h4>
				</div>
				<div class="col-md-3 about-grid">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<h4>App development</h4>
				</div>
				<div class="col-md-3 about-grid">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h4>Team leader</h4>
				</div>
				<div class="col-md-3 about-grid">
					<i class="fa fa-th" aria-hidden="true"></i>
					<h4>Creative design</h4>
				</div>
				<div class="col-md-3 about-grid">
					<i class="fa fa-file-text" aria-hidden="true"></i>
					<h4>UI Projects</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="about-grids-bottom">
				<div class="col-md-4 about-bottom-grid">
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor,</h4>
				</div>
				<div class="col-md-4 about-bottom-grid">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
				<div class="col-md-4 about-bottom-grid">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
					<div class="clearfix"></div>
			</div>
				<a href="#" data-toggle="modal" data-target="#myModal"> More about me</a>	
		</div>
				
	</div>
</div>
<!-- //about -->

	<!-- modal -->	<!-- for about modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">About Me</h4>
				</div> 
				<div class="modal-body">
					<div class="about modalpad"> 
						<div class="col-md-4 col-sm-4  col-xs-4 about-left ">
							<img src="images/banner5.png" class="img-responsive" alt=""/><div class="social-icons">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 about-right wthree">
							<h3>Hi, i'm <span>Henry Rich </span></h3>
							<h4>Web Designer & Developer </h4>
							<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li><b>D.O.B</b></li>
										<li>21-08-1987</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>PHONE </b></li>
										<li>+00 234 111 6633</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>ADDRESS </b></li>
										<li>110 Atatürk Blvd, Kavaklıdere, 06100, Turkey.</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>E-MAIL </b></li>
										<li><a href="mailto:example@mail.com"> info@example.com</a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>WEBSITE </b></li>
										<li><a href="#">www.mydata.com</a></li>
									</ul>
								</li>
							</ul> 
						</div> 
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- //modal -->	<!-- for about modal -->

<!-- services -->
<div id="services" class="services">
	<div class="container">
		<div class="service-head one text-center ">
			<h3>My Services</h3>
		</div>
		<!-- services-grids -->
		<div class="wthree_about_right_grids w3l-agile">
			<div class="col-md-4 wthree_about_right_grid">
				<div class="wthree_about_right_grid_left">
					<div class="hvr-rectangle-in">
						<i class="glyphicon glyphicon-book"></i>
					</div>
				</div>
				<div class="wthree_about_right_grid_right">
					<h4>Web Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="col-md-4 wthree_about_right_grid">
					<div class="wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-pencil"></i>
						</div>
					</div>
					<div class="wthree_about_right_grid_right">
						<h4>Html Coding</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 wthree_about_right_grid">
					<div class="wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-thumbs-up"></i>
						</div>
					</div>
					<div class="wthree_about_right_grid_right">
						<h4>Web Development</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
					<div class="clearfix"> </div>
				<div class="col-md-4 wthree_about_right_grid">
					<div class="wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-paperclip"></i>
						</div>
					</div>
					<div class="wthree_about_right_grid_right">
						<h4>Mobile app Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 wthree_about_right_grid">
					<div class="wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-erase"></i>
						</div>
					</div>
					<div class="wthree_about_right_grid_right">
						<h4>Creative Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 wthree_about_right_grid">
					<div class="wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-picture"></i>
						</div>
					</div>
					<div class="wthree_about_right_grid_right">
						<h4>Php Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- services-grids -->
	</div>
</div>
<!-- services -->
			
<!-- portfolio -->
<div class="portfolio" id="portfolio">
	<div class="container">
		<div class="portfolio-head text-center ">
			<h3>Portfolio</h3>
		</div>
			<div class="portfolio-grids">
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
									
				</script>
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab">All</li> 
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Web Templates</li> 
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Web Elements</li> 
							<li class="resp-tab-item" aria-controls="tab_item-3" role="tab">App Design</li> 
							<li class="resp-tab-item" aria-controls="tab_item-4" role="tab">Creative</li> 
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g1.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g2.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g3.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g4.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g5.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g6.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									<div class="thumb">
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g7.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									<div class="thumb">
										<a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g8.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g9.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd  ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g10.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g11.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g12.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g1.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g3.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g4.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g9.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd  ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g1.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g12.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g6.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd  ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g4.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/g1.jpg" alt="">
										<div class="team_pos">
											<ul>
												<li>
													<div class="morph pic fb_icon1">
													</div>
												</li>
											</ul>
										</div>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- //portfolio -->

<!-- Stats --> 
<div class="col-md-8 stats news-w3layouts">  
	<div class="stats-info agileits-w3layouts">
		<div class="col-sm-4 col-xs-6 stats-grid">
			<div class="stats-img">
				<i class="fa fa-check-square-o" aria-hidden="true"></i>
			</div>
			<p>Projects</p>
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324' data-delay='.5' data-increment="1">324</div>
		</div>
		<div class="col-sm-4 col-xs-6 stats-grid">
			<div class="stats-img w3-agileits">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>	
			<p>Happy Clients</p> 
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='200' data-delay='.5' data-increment="1">200</div>
		</div>
		<div class="col-sm-4 col-xs-6 stats-grid">
			<div class="stats-img w3-agileits">
				<i class="fa fa-trophy" aria-hidden="true"></i>
			</div>
			<p>Awards</p>
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='156' data-delay='.5' data-increment="1">156</div>
		</div>
		<div class="clearfix"></div>
	</div> 
</div>  
<div class="col-md-4 projects-right1">
	<img src="images/stats.jpg" alt="" />
</div>
<div class="clearfix"></div>
<!-- //Stats -->  

<!-- Education and Work experience -->
		<!-- education -->
		<div class="experience" id="experience">
			<div class="container">
				<div class="experience-head text-center ">
					<h3>Education and work experience</h3>
				</div>
		<div class="col-md-12 abt-left" id="education">
				<h3>Education</h3>
				<div class="accordion">
							<div class="accordion-section">
								<h5><a class="accordion-section-title" href="#accordion-1">
									<span>2012 - 2016</span> Graduation in Professional National University
								<i class="glyphicon glyphicon-chevron-down"></i>
								</a></h5>
								<div id="accordion-1" class="accordion-section-content">
									<h6>Projects & Awards</h6>
									<ul>
										<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Awards become corroded, friends gather no dust.</a></li>
										<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Done a multi national project with clean & accesory design</a></li>
										<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">doloremque laudantium</a></li>
									</ul>
								</div>
							</div>

							<div class="accordion-section">
								<h5><a class="accordion-section-title" href="#accordion-2">
									<span>2009 - 2010</span> Diploma in Advertising & Graphic Design
								<i class="glyphicon glyphicon-chevron-down"></i>
								</a></h5>
								<div id="accordion-2" class="accordion-section-content">
									<h6>Seminars</h6>
									<ul>
										<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">voluptatem accusantium</a></li>
										<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">accusantium doloremque</a></li>
										<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">doloremque laudantium</a></li>
									</ul>
								</div>
							</div>

							<div class="accordion-section">
								<h5><a class="accordion-section-title" href="#accordion-3">
									<span>2007 - 2009</span> Accesory Designer in University of cambridge
								<i class="glyphicon glyphicon-chevron-down"></i>
								</a></h5>
								<div id="accordion-3" class="accordion-section-content">
									<h6>Competitions</h6>
									<ul>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">voluptatem accusantium</a></li>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">accusantium doloremque</a></li>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">doloremque laudantium</a></li>
									</ul>
								</div>
							</div>
							
							
				</div>
				<script>
							jQuery(document).ready(function() {
								function close_accordion_section() {
									jQuery('.accordion .accordion-section-title').removeClass('active');
									jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
								}

								jQuery('.accordion-section-title').click(function(e) {
									// Grab current anchor value
									var currentAttrValue = jQuery(this).attr('href');

									if(jQuery(e.target).is('.active')) {
										close_accordion_section();
									}else {
										close_accordion_section();

										// Add active class to section title
										jQuery(this).addClass('active');
										// Open up the hidden content panel
										jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
									}

									e.preventDefault();
								});
							});
								</script>
				<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		</div>
		<!-- //education -->

		<!-- experience -->
					<div class="col-md-12 w3-agileits-info" id="workexperience">  
						<h3 class="exp">work experience</h3>
						<div class="experience-grids">
							<div class="experience-left">
								<h3>2015 - Now </h3>
								<h5>Company Name </h5>
							</div>
							<div class="experience-right">
								<h4>Senior Web Designer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
							</div>
							<div class="clearfix"> </div>
						</div> 
						<div class="experience-grids experience-grids-btm">
							<div class="experience-left">
								<h3>2011 - 2015</h3>
								<h5>Company Name </h5>
							</div>
							<div class="experience-right">
								<h4>Web Designer & Developer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="experience-grids w3-agileits">
							<div class="experience-left">
								<h3>2009 - 2011</h3>
								<h5>Company Name </h5>
							</div>
							<div class="experience-right">
								<h4>Graphic Designer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!-- //experience -->
<!-- Education and Work experience -->

<!-- coding skills --
<div class="education" id="skills">
<div class="layer">
	<div class="container">
			<div class="education-grids">
			<div class="coding-head one text-center ">
				<h3>My Coding skills</h3>
			</div>
	<div class="col-md-12 abt-right ">
		<div class="col-sm-3 abt-gd-left text-center">
			<div id="demo-pie-1" class="pie-title-center" data-percent="55"> <span class="pie-value"></span> </div>
			<h4>UI/UX Designer</h4>
		</div>
		<div class="col-sm-3 abt-gd-left text-center">
			<div id="demo-pie-2" class="pie-title-center" data-percent="65"> <span class="pie-value"></span> </div>
			<h4>Html</h4>
		</div>
		
		<div class="col-sm-3 abt-gd-left text-center">		   
			<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
			<h4>Java Script</h4>
		</div>
		<div class="col-sm-3 abt-gd-left text-center">		   
			<div id="demo-pie-4" class="pie-title-center" data-percent="85"> <span class="pie-value"></span> </div>
			<h4>Web developer</h4>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="clearfix"></div>
	</div>

	</div>
</div>
</div>
<!-- //coding skills --> 
	
	
	
<!-- coding skills -->
							<div class="w3ls_agile_circle_progress agile_info_shadow" id="skills">
								<div class="cir_agile_info ">
								<h3 class="w3_inner_tittle text-center">My Coding skills</h3>
									  <div class="skill-grids">
											<div class="skills-grid text-center">
												<div class="circle" id="circles-1"></div>
												<p>UI/UX Designer</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-2"></div>
												<p>Html</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-3"></div>
												
												<p>Java Script</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-4"></div>
												<p>Web developer</p>
											</div>
												
								
				
										 <div class="clearfix"></div>
										
								</div>
							</div>
						</div>
<!-- //coding skills --> 
	
	
	
	
	
	
	
	
	
	
	
<!-- contact -->
<div class="agile_about contact" id="contact">
	<div class="container">
		<div class="agileits_agile_about">
			<div class="contact-head text-center ">
				<h3>contact me</h3>
			</div>
			<div class="agileits_agile_about_mail">
				<form action="#" method="post">
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone" placeholder="Phone" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<div class="submit">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
									<div class="w3agile_map">
										<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6361699.744011737!2d30.7513355529986!3d38.87140724832268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2sin!4v1490159234025"></iframe>	 -->	
								<div class="agileinfo_map_color">
											<div class="agileinfo_map_color_grid">
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Address</h4>
													<p>110 Atatürk Blvd, Kavaklıdere, 06100 Ankara - Turkey.</p>
												</div>
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Me</h4>
													<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
													<p><a href="mailto:example@mail.com"> mail@example1.com</a></p>
												</div>
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone</h4>
													<p>(0-312) 455 55 5555</p>
													<p>(0-312) 467 00 0019</p>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</div>
	</div>
</div>
<!-- //contact -->
			
<!-- copyright -->
<div class="copyright text-center">
	<h3>Thanks for visiting my site</h3>
					<div class="connect-social">  
					<ul>
						<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="social-button linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="social-button pinterest-p"><i class="fa fa-pinterest-p"></i></a></li>
					</ul>
					</div>

	<p class="copy-right">© <?php echo date("Y");?> www.astik.tk | All rights reserved</p>
</div>
<!-- copyright -->


<!-- stats numscroller-js-file -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats numscroller-js-file -->

	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script> 
	<!--//scrolling js-->
	
	


<!-- portfolio modal -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g1.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g3.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g2.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g4.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g5.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g6.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g7.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/g8.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <img src="images/g9.jpg" class="img-responsive img-centered" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- portfolio modal -->



<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	
								
<!-- js for smooth scrollings -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- js for smooth scrollings -->

	
<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
<!-- //fixed-scroll-nav-js --> 
	
	
	

</body>
</html>
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
	<!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
	<link href="css/new_stylr_astik.css" rel='stylesheet' type='text/css' />
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
$display_msg="";

if(isset($_REQUEST['sender']) && isset($_REQUEST['email_status']))
{
	$sender = $_REQUEST['sender'];
	$email_status = $_REQUEST['email_status'];
	if($sender=="" || $email_status=="")
	{
		$open_dialog = false;
	}
	elseif($email_status=="1")
	{
		$open_dialog = true;
		$display_msg = "Hey ".$sender.",<br>Your email has been sent successfully. <br> Thank you for contacting me, I'll get back to you at the earliest.";
	}
	elseif($email_status=="0")
	{
		$open_dialog = true;
		$display_msg = "Hey ".$sender.",<br>Your email has not been sent. <br> Please try again.";
	}
}
?>
<!-- banner -->


<div class="col-md-6 col-sm-12 col-xs-12 email-modal text-center " id="emailModal">
<?php echo $display_msg;?>
</div>	
					
<section class="banner" id="home">
	<div class="container" style="margin-top: 5px;">
		<div class="col-lg-5 col-md-5 col-xs-4 banner-left">
			<div class="col-md-5 col-xs-4 displaypicture" style="background-image:url('images/astik.png')"></div>
		</div>
		<div class="col-lg-7 col-md-7 col-xs-8 banner-right">
			<h2>Hey there, good to see you land here
				<i class="fa fa-smile-o"></i>
			</h2>
			<label class="white-text">I'm </label><span>astik unagar</span> <label class="white-text">a Web Developer</label>
			<h2>I have gained an industry experience of <label class="years"><?php echo $year_experience;?></label> years, where in my focus is completely on to the web technologies and their use to alter the thoughts into process.
			</h2>
			<h2>Here for helping you with dynamic websites, web portals, e-commerce webstore and much more!</h2>			
			<h2></h2>			
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
			<h3>I WORK FOR</h3>
			<div class="about-grids-top">
				<a href="#" data-toggle="#ws-div1">
					<div class="col-md-6 about-grid">
					<div class="col-md-12 about-grid-icons" style="background: url('images/web_service.png')"></div>
					<div class="col-md-12 services-title"> Web </div>
					<div class="col-md-12 services-title"> Services </div>
					<!-- <i class="fa fa-laptop" aria-hidden="true"></i> -->
					</div>
				</a>
				<a href="#" data-toggle="#ws-div2">
					<div class="col-md-6 about-grid">
					<div class="col-md-12 about-grid-icons" style="background: url('images/web-development.png')"></div>
					<div class="col-md-12 services-title"> Web </div>
					<div class="col-md-12 services-title"> Development </div>
					<!-- <i class="fa fa-mobile" aria-hidden="true"></i> -->
					</div>
				</a>
				<a href="#" data-toggle="#ws-div3">
					<div class="col-md-6 about-grid">
					<div class="col-md-12 about-grid-icons" style="background: url('images/responsive-web-design.png')"></div>
					<div class="col-md-12 services-title"> Responsive </div>
					<div class="col-md-12 services-title"> Design </div>
					<!-- <i class="fa fa-mobile" aria-hidden="true"></i> -->
					</div>
				</a>
				<a href="#" data-toggle="#ws-div4">
					<div class="col-md-6 about-grid">
					<div class="col-md-12 about-grid-icons" style="background: url('images/api-integration.png')"></div>
					<div class="col-md-12 services-title"> API </div>
					<div class="col-md-12 services-title"> Integration </div>
					<!-- <i class="fa fa-mobile" aria-hidden="true"></i> -->
					</div>					
				</a>
				
				<div class="clearfix"></div>
			</div>
			<div class="about-grids-bottom">
				<div class="col-md-12 about-bottom-grid web-services-div" id="ws-div1">
					<h4>WEB SERVICES</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
				<div class="col-md-12 about-bottom-grid web-services-div" id="ws-div2">
					<h4>WEB SITE DEVELOPMENT</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
				<div class="col-md-12 about-bottom-grid web-services-div" id="ws-div3">
					<h4>RESPONSIVE DESIN</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
				<div class="col-md-12 about-bottom-grid web-services-div" id="ws-div4">
					<h4>API INTEGRATION</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo urna dolor, eget lacinia est aliquam id. Proin velit libero, vestibulum ac orci eu, faucibus consectetur dolor. Cras ullamcorper elit eros, nec bibendum lacus accumsan eu. Donec non </p>
				</div>
					<div class="clearfix"></div>
			</div>
					
		</div>
	</div>
</div>
<!-- //about -->

	<!-- modal -->	<!-- for about modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">About Me</h4>
						</div>
						<div class="modal-body">
							<div class="about modalpad">
								<div class="col-md-12 col-sm-12  col-xs-12 text-center">
									<h3>Hi, i'm 
										<span>Astik Unagar</span>
									</h3>
									<h4>A Web Developer </h4>
								</div>	
								<div class="col-md-6 col-sm-6  col-xs-6 about-left ">
									<!-- <img src="images/banner5.png" class="img-responsive" alt=""/> -->
									<ul class="address">
										<li>
											<ul class="agileits-address-text ">
												<li>
													<b>D.O.B</b>
												</li>
												<li>15-09-1992</li>
											</ul>
										</li>
										<li>
											<ul class="agileits-address-text">
												<li>
													<b>PHONE </b>
												</li>
												<li>+91 750 660 4940</li>
											</ul>
										</li>
										<li>
											<ul class="agileits-address-text">
												<li>
													<b>ADDRESS </b>
												</li>
												<li>Mumbai, Maharashtra, IN</li>
											</ul>
										</li>
									</ul>	
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 about-left wthree">
									
									<ul class="address">
										<li>
											<ul class="agileits-address-text">
												<li>
													<b>E-MAIL </b>
												</li>
												<li>
													<a href="mailto:reachme@astik.tk">reachme@astik.tk</a>
												</li>
											</ul>
										</li>
										<li>
											<ul class="agileits-address-text">
												<li>
													<b>WEBSITE </b>
												</li>
												<li>
													<a href="http://www.astik.tk/">www.astik.tk</a>
												</li>
											</ul>
										</li>
										<li>
											<ul class="agileits-address-text">
												<li>
													<b>SOCIAL</b>
												</li>
												<li>
													<a href="#">[L<img src="images/facebook.png" width="20px" height="20px">]</a>
													<a href="#">[S<img src="images/facebook.png" width="20px" height="20px">]</a>
													<a href="#">[F<img src="images/facebook.png" width="20px" height="20px">]</a>
													<a href="#">[I<img src="images/facebook.png" width="20px" height="20px">]</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="clearfix"></div>
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
			<a title="click to find" href="#" data-toggle="modal" data-target="#myModal"><h3>KNOW ME A BIT BETTER </h3></a>
		</div>
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
		<div class="col-sm-6 col-xs-12 stats-grid">
			<div class="stats-img">
				<i class="fa fa-check-square-o" aria-hidden="true"></i>
			</div>
			<p>Projects</p>
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='6' data-delay='.5' data-increment="1">6</div>
		</div>
		<div class="col-sm-6 col-xs-12 stats-grid">
			<div class="stats-img w3-agileits">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>	
			<p>Happy Clients</p> 
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3' data-delay='.5' data-increment="1">3</div>
		</div>
		<!-- <div class="col-sm-4 col-xs-6 stats-grid">
			<div class="stats-img w3-agileits">
				<i class="fa fa-trophy" aria-hidden="true"></i>
			</div>
			<p>Awards</p>
			<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='156' data-delay='.5' data-increment="1">156</div>
		</div> -->
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
					<h3>Education</h3>
				</div>
				<div class="col-md-12 abt-left" id="education">
						<div class="accordion">
									<div class="accordion-section">
										<h5><a class="accordion-section-title" href="#accordion-1">
											<span>2011 - 2014</span> Bachelor Of Engineering in Information Technology - B.E.I.T. [University Of Mumbai]
										<i class="glyphicon glyphicon-chevron-down"></i>
										</a></h5>
										<div id="accordion-1" class="accordion-section-content">
											<h6>College</h6>
											<ul>
												<li>
													<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
													<a href="#">Pursued BE at Rajiv Gandhi Institute Of Technology : Located at Andheri(W), Mumbai</a></li>
												<li>
													<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
													<a href="#">Academic BE project : Virtual Learning Environment</a></li>
											</ul>
										</div>
									</div>

									<div class="accordion-section">
										<h5><a class="accordion-section-title" href="#accordion-2">
											<span>2008 - 2011</span> Diploma in Computer Engineering.
										<i class="glyphicon glyphicon-chevron-down"></i>
										</a></h5>
										<div id="accordion-2" class="accordion-section-content">
											<h6>College</h6>
											<ul>
												<li>
													<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
													<a href="#">Pursued Diploma at Babasaheb Gawde Institute of Technology : Located at Mumbai Central(E), Mumbai</a>
												</li>
												<li>
													<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
													<a href="#">Academic Diploma project : Realtime Time System For Monitoring Driver(s) Vigilance</a></li>
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
			</div>
		</div>
<!-- Education and Work experience -->
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
				<form action="/mail" method="post">
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
	<script type="text/javascript">
		$(document).ready(function() {
			var show_modal = "<?php echo $open_dialog; ?>";
			if(show_modal==1)
			{
				$("#emailModal").show("slide","",500);
				setTimeout(function() {
			        $("#emailModal").hide("slide","",500);
			    }, 5000);
			}
			
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
		for (var i = 1; i <= 7; i++) 
		{
			child_id = 'circles-'+i;
			var child = document.getElementById('circles-' + i),
				percentage = 30 + (i * 10);
				
			Circles.create({
				id:         child_id,
				percentage: percentage,
				radius:     80,
				width:      10,
				number:   	percentage / 1,
				text:       '%',
				colors:     colors[i - 1]
			});
		}

		$("a[data-toggle]").on("click", function(e) {
		e.preventDefault();  // prevent navigating
		var selector = $(this).data("toggle");  // get corresponding element
		$(".web-services-div").hide("slide","",500);
		$(selector).show("slide","",500);
		$(selector).focus();
		});
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
<?php
// Free Bootstrap Themes : https://www.Zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="www.Zerotheme.com">

    <title>Design Studio</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/css/animated-logo.min.css"><!-- Logo -->
	<link rel="stylesheet" href="/css/our-team.css"> <!-- Resource style -->
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/style.css">
	
	
	<!-- Custom Fonts -->
    <link href="/fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Js -->
	<script src="/js/modernizr.js"></script> <!-- Modernizr -->
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">JNL Painting</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                    <a class="page-scroll">Call us TODAY! 704-576-9807</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#new">New</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
	<header id="page-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="o-container">
						<div class="c-slack">
						  <span class="c-slack__dot c-slack__dot--a"></span>
						  <span class="c-slack__dot c-slack__dot--b"></span>
						  <span class="c-slack__dot c-slack__dot--c"></span>
						  <span class="c-slack__dot c-slack__dot--d"></span>
						</div>
					</div>
					<div class="intro-text">
						<div class="animated rotateInUpLeft delay-1s intro-lead-in">Welcome to JNL Painting!</div>
						<div class="intro-heading animated rotateInDownRight delay-2s">A Fresh Coat For a Fresh Start</div>
					</div>
					<a class="btn btn-1 btn-sm" href="#about">About Us</a>
					<a class="btn btn-1 btn-sm" href="#team">Our Team</a>
				</div>
			</div>
		</div>
    </header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
		
		<!-- ////////////Content Box 01 -->
		<section id="services" class="box-content box-1">
			<div data-aos="zoom-out-down" data-aos-duration="3000" class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>Services</h2>
						<hr>
						<div class="intro">Our painting services include the following:</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 box-item box-size">
						<div class="wrap-img">
							<img src="https://img.icons8.com/ios/64/000000/paint-brush-filled.png">
						</div>
						<h3 class="blue">Interior House Painting</h3>
						<p>Bathrooms, kitchens, cabinets, dining rooms, living rooms, 
						shelving, ceilings, game rooms, pantries, hallways, bedrooms, garages and more</p>
					</div>					
					<div class="col-sm-3 box-item box-size">
						<div class="wrap-img">
							<img src="https://img.icons8.com/color/64/000000/cottage.png">
						</div>
						<h3 class="yellow">Exterior House Painting</h3>
						<p>Homes, garages, outbuildings and sheds, barns, 
						playhouses, doors, shutters, trim and more</p>
					
					</div>
					<div class="col-sm-3 box-item box-size">
						<div class="wrap-img">
							<img src="https://img.icons8.com/color/64/000000/paint-bucket.png">
						</div>
						<h3 class="red">Staining</h3>
						<p>Decks, furniture, anything!</p>
					</div>
					<div class="col-sm-3 box-item box-size">
						<div class="wrap-img">
							<img src="https://img.icons8.com/ios/64/000000/roller-brush-filled.png">
						</div>
						<h3 class="green">Pressure Washing</h3>
						<p>High quality pressure washer to get rid of your dirt problems!</p>					</div>
				</div>		
			</div>
		</section>
		
		<!-- ////////////Content Box 02 -->
		<section id="new" data-aos="zoom-in-up" data-aos-duration="2000" class="box-content box-2 box-style">
			<div class="container">
				<div class="row">
					<blockquote>A world of new color that will transform yours.</blockquote>
				</div>		
			</div>
		</section>
		
	<!--  ////////////Content Box 03 -->
		<section id="about" class="box-content box-3">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2 data-aos="flip-left" data-aos-duration="2000">About Us</h2>
						<hr>
						<img data-aos="flip-left" data-aos-duration="2000" class="img-circle img-center" src="images/4.jpg" alt="">
						<div data-aos="flip-left" data-aos-duration="2000"  class="intro intro-top">Started in 2013, Lorem ipsum dolor, sit amet consectetur 
							adipisicing elit. Sint saepe pariatur molestias nemo, obcaecati sequi quaerat? 
							Ducimus ab repudiandae, cumque distinctio soluta velit corporis quas libero, eius 
							eaque impedit fuga. ipsum dolor, sit amet consectetur adipisicing elit. Pariatur in 
							dit rerum laudantium voluptas, libero laboriosam ipsum, aliquam ipsa dolor aperiam 
							explicabo exercitationem, nihil possimus quaerat optio unde. Omnis, delectus!</div>
					</div>
				</div>
				</div>
				</section>
	
		<!-- 			<div class="row">
					<div class="col-lg-12">
						<ul class="timeline">
							<li class="blue">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/4.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>2009-2011</h4>
										<h4 class="subheading">Our Humble Beginnings</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted red">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/5.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>March 2011</h4>
										<h4 class="subheading">An Agency is Born</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="green">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/6.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>December 2012</h4>
										<h4 class="subheading">Transition to Full Service</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted yellow">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/7.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>July 2014</h4>
										<h4 class="subheading">Phase Two Expansion</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted ">
								<div class="timeline-image">
									<h4>Be Part
									<br>Of Our
									<br>Story!</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>		
			</div>
		</section> -->
		
		<!-- ////////////Content Box 04 -->
		<section id="team" class="box-content box-4 box-style">
			<div class="clearfix">
				<div class="cd-testimonials-wrapper cd-container">
					<ul class="cd-testimonials">
						<li>
							<p>JNL Painting painted my whole house in 3 days, I have a 4BR house 
								and when I say that they did an AMAZING job, I am telling you the truth! 
								Highly recommended!</p>
							<div class="cd-author">
								<img src="images/avatar-1.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Michael Scott</li>
									<li>Branch Manager, Dunder Mifflin</li>
								</ul>
							</div>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
							<div class="cd-author">
								<img src="images/avatar-2.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>Designer, CodyHouse</li>
								</ul>
							</div>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
							<div class="cd-author">
								<img src="images/avatar-3.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div>
						</li>
					</ul> <!-- cd-testimonials -->	
				</div> <!-- cd-testimonials-wrapper -->
				
				<div class="cd-see-all"><a href="#0" class="btn btn-1">See all</a></div>
				
				<div class="cd-testimonials-all">
					<div class="cd-testimonials-all-wrapper">
						<ul>
							<li class="cd-testimonials-item">
								<p>Lorem</p>
								
								<div class="cd-author">
									<img src="images/avatar-1.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>Michael Scott</li>
										<li>Branch Manager, Dunder Mifflin</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
								
								<div class="cd-author">
									<img src="images/avatar-2.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
								
								<div class="cd-author">
									<img src="images/avatar-3.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
								
								<div class="cd-author">
									<img src="images/avatar-4.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
								
								<div class="cd-author">
									<img src="images/avatar-5.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
								
								<div class="cd-author">
									<img src="images/avatar-6.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
								
								<div class="cd-author">
									<img src="images/avatar-1.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
								
								<div class="cd-author">
									<img src="images/avatar-2.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
								
								<div class="cd-author">
									<img src="images/avatar-3.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
								
								<div class="cd-author">
									<img src="images/avatar-4.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
								
								<div class="cd-author">
									<img src="images/avatar-5.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
							<li class="cd-testimonials-item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
								
								<div class="cd-author">
									<img src="images/avatar-6.jpg" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
						</ul>
					</div>	<!-- cd-testimonials-all-wrapper -->
					<a href="#0" class="close-btn">Close</a>
				</div> <!-- cd-testimonials-all -->
			</div>
		</section>
		
		<!-- ////////////Content Box 05 -->
		<section class="box-content box-5" id="contact">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
	                    <h2>Contact</h2>
						<hr>
	                    <div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row">
					<div class="col-md-4 ">
						<div class="row box-item">
							<h3>Complete the Submission Form</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
							<h3>Or Just Make a Call</h3>
							<p>+6221 888 888 90 <br>
								+6221 888 88891</p>
							<p>info@yourdomain.com</p>
						</div>
					</div>
					<div class="col-md-8">
						<div id="contact-form">
							<form name="form1" method="post" action="contact.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>						
										<button type="submit" class="btn btn-3 btn-block" name="btnContactUs" id="btnContactUs">
									Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
</div>
	
<!-- 			<!-- Calendly inline widget begin
<div class="calendly-inline-widget" data-url="https://calendly.com/jnlpaint/freeestimate" style="min-width:320px;height:580px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
Calendly inline widget end -->

<!-- Calendly badge widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/jnlpaint/freeestimate', text: 'Book Free Estimate Now!', color: '#00a2ff', textColor: '#ffffff', branding: true });</script>
<!-- Calendly badge widget end -->
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="heading"><h4>About Us</h4></div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, dolore magna aliquam erat volutpat. </p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-2">
						<div class="heading"><h4>Your Email</h4></div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Consectetuer adipiscing elit, dolore magna aliquam erat volutpat. </p>
							<div class="subcribe-form" >
								<form method="get" action="/search" id="subcribe">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subcribe" placeholder="Enter your email address...  " required="required" />
									</div>
									<button type="submit" name="Submit" class="btn btn-4 f-left">Subcribe</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="row">
							<div class="col-md-6">
								<a href="#"><img src="images/15.jpg" /></a>
							</div>
							<div class="col-md-6">
								<a href="#"><img src="images/16.jpg" /></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<a href="#"><img src="images/17.jpg" /></a>
							</div>
							<div class="col-md-6">
								<a href="#"><img src="images/18.jpg" /></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<a href="#"><img src="images/19.jpg" /></a>
							</div>
							<div class="col-md-6">
								<a href="#"><img src="images/20.jpg" /></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<a href="#"><img src="images/21.jpg" /></a>
							</div>
							<div class="col-md-6">
								<a href="#"><img src="images/18.jpg" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		


		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright &copy; Your Website - Designed by <a href="https://www.Zerotheme.com">Zerotheme</a></p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-google"></i></a>
                            </li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->

	
	<!-- jQuery -->
	<script src="/js/jquery-2.1.1.js"></script>
	<script src="/js/masonry.pkgd.min.js"></script>
	<script src="/js/jquery.flexslider-min.js"></script>
	<script src="/js/main.js"></script> <!-- Resource jQuery -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	

	<!-- Bootstrap Core JavaScript -->
	<script src="/js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="/js/agency.js"></script>

	<!-- Animated Top -->
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/classie.js"></script>
	<script src="/js/cbpAnimatedHeader.js"></script>
	<script>
  		AOS.init();
	</script>

</body>
</html>
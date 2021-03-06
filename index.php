<!DOCTYPE html>
<?php include ('head.php');
?>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
        <div class="span5 offset1">
            <!-- Start Accordion -->
            <div class="accordion" id="accordionArea">
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
                            Login
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="oneArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <form id="login-form" class="login-form" action="#">
                                <p class="login-name">
                                    <input id="login_name" type="text" placeholder="ex. John101" value="" name="name" />
                                </p>
                                <p class="login-password">
                                    <input id="login_password" type="password" placeholder="Password" value="" name="password" />
                                </p>
                                <p class="login-submit" align="center">
                                    <a id="login-submit" class="submit" href="#"><i class="fa fa-refresh fa-spin spin-log" style="display:none;"></i>&nbsp; Login </a>
                                    <a id="forgot-password" class="forgot" href="#">Forgot Password?</a>
                                </p>
                                <div class="login-error alert alert-error fade in" style="margin-top:10px;display:none;">
                                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                                    <strong>Wrong username or password!</strong>
                                </div>
                                <div class="login-ok alert alert-success fade in" style="margin-top:10px;display:none;">
                                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                                    <strong>Login Success!</strong>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion -->
        </div>

        <div class="span5">

            <!-- Start Toggle -->
            <div class="accordion" id="toggleArea">

                <div class="accordion-group">
                    <div class="accordion-heading togglize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">
                            Sign Up
                            <span class="font-icon-plus"></span>
                            <span class="font-icon-minus"></span>
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <form id="signup-form" class="signup-form" action="#">
                                <p class="signup-name">
                                    <input id="signup_name" type="text" placeholder="ex. John101" value="" name="name" />
                                </p>
                                <p class="signip-password">
                                    <input id="signup-password" type="password" placeholder="Password" value="" name="password" />
                                </p>
                                <p class="signup-submit">
                                    <a id="signup-submit" class="submit" href="#"><i class="fa fa-refresh fa-spin spin-reg" style="display:none;"></i>&nbsp;Sign Up!</a>
                                </p>

                                <div class="signup-error alert alert-error fade in" style="margin-top:10px;display:none;">
                                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                                    <strong>Username already exists</strong>
                                </div>
                                <div class="signup-ok alert alert-success fade in" style="margin-top:10px;display:none;">
                                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                                    <strong>Sign Up Success!</strong>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Toggle -->
        </div>
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="">
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">About Game</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">About Game</h2>
                    <h3 class="title-description">Check Out Our Projects on <a href="https://github.com/GaurabAryal/Fungeons">GitHub</a>.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Type of Work</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Android Front End</a></li>
                        <li><a href="#filter" data-option-value=".design">Android Back End</a></li>
                        <li><a href="#filter" data-option-value=".photography">WebSite Front End</a></li>
                        <li><a href="#filter" data-option-value=".video">WebSite Back End</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="_include/img/work/full/image-01-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="_include/img/work/full/image-02-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="_include/img/work/full/image-03-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-08.jpg" alt="Video">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="_include/img/work/full/image-04-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="_include/img/work/full/image-05-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/50834315">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-09.jpg" alt="Video">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="_include/img/work/full/image-06-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Beach" href="_include/img/work/full/image-07-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">About Us</h2>
                <h3 class="title-description">Meet the Team</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Game Front End Lead and Designer</span>
                </div>
                <img src="_include/img/profile/profile-01.jpg" alt="John Doe">
            </div>
            <h3 class="profile-name">Ben Southern</h3>
            <p class="profile-description">Hello, I am Ben Southern, a student at the University of Waterloo studying Mathematics.
                I am the lead front end developer and designer for, “Fungeons”.  I created almost all of the game's graphics.
                I designed and created most of the “in game” aspects.  The running, jumping, dying, etc... I did that.</p>
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="https://github.com/bensouthern"><i class="font-icon-social-github"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Project Lead</span>
                </div>
                <img src="_include/img/profile/profile-02.jpg" alt="Jane Helf">
            </div>
            <h3 class="profile-name">Gaurab Aryal</h3>
            <p class="profile-description">Hi I am Gaurab Aryal, currently studying Systems Design Engineering at the University of Waterloo. I do back end development for the game, meaning I am the guy
                working on things that happen behind the scenes! I also do full stack development for this website and create the project roadmap and deadlines.</p>
            	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="https://github.com/GaurabAryal"><i class="font-icon-social-github"></i></a></li>
                    <li><a href="https://ca.linkedin.com/pub/gaurab-aryal/b0/42a/902"><i class="font-icon-social-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Software Engineer</span>
                </div>
                <img src="_include/img/profile/profile-03.jpg" alt="Rares Radut">
            </div>
            <h3 class="profile-name">Rares Radut</h3>
            <p class="profile-description">Hello, I am Rares Radut, enrolled in Computer Science at the University of Waterloo. I worked on the front end design of the game and look forward to working on the website
            design as well. I have experience with Java, Python, and web design. Previously, I have done programming contests and website development.</p>
            	
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="https://github.com/RadutRares"><i class="font-icon-social-github"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Get in Touch</h2>
                <h3 class="title-description">We are always open to ways we can improve and implement new ideas!</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">

        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
                <ul>
                    <li><a href="#">Email Coming Soon</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->


<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>

                        <li><a href="" title="Fungeons Web" target="_blank"><span class="font-icon-social-github"></span></a></li>
                        <li><a href="https://github.com/GaurabAryal/Fungeons" title="Fungeons Android" target="_blank"><span class="font-icon-social-github"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
	<p class="credits">&copy; Fungeons 2015. <a href="http://themes.alessioatzeni.com/html/brushed/">Page Designed</a> by Alessio Atzeni. Developed by <a href="http://localhost:800/fungeons/index.html#about">Team Fungeons</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>
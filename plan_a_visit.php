<?php $form_path='forms/selectaservice_files/formoid1/form.php'; require_once $form_path; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Praise Church</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Highly unique creative theme built with Bootstrap">
<meta name="author" content="Designova">

<link href="assets/css/bootstrap-workaround.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/extension.css" rel="stylesheet">
<link href="assets/css/typography.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="stylesheets/portfolio.css" rel="stylesheet"/>
<link href="stylesheets/isotope.css" rel="stylesheet">
<link href="stylesheets/colorbox.css" rel="stylesheet"/>
<link href="stylesheets/flexslider.css" rel="stylesheet"/>  
<link href="stylesheets/hoverdir.css" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet"/>
<link href="stylesheets/price-table.css" rel="stylesheet" />
<link href="stylesheets/intro.css" rel="stylesheet" />
<link href="stylesheets/timeline.css" rel="stylesheet" />
<link href="stylesheets/jquery.tweet.css" rel="stylesheet"/>
<link href="stylesheets/responsive-nav.css" rel="stylesheet">
<link href="stylesheets/style.css" rel="stylesheet">
<link href="forms/selectaservice_files/formoid1/formoid-metro-orange.css" rel="stylesheet"/>
 
<script src="javascripts/modernizr.custom.js"></script>

<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link href="stylesheets/ie8.css" rel="stylesheet">
    <![endif]-->

<link rel="shortcut icon" href="assets/ico/favicon.png">


</head>

<body id="body">


<!--MAIN WRAPPER--> 
<div class="main-wrapper">

<!-- Mobile Only Navigation - 2 types each for (480px to 640px) and (640px to 960px) wide device screens -->
<header id="mobile-header" class="clearfix hidden-desktop">
    <div id="m-header-logo" class="ir">
    <a class="ir-link" href="home.html"></a>
    </div>
    <div id="nav">
      <ul>
        <li><a href="learn_more.html"  data-soffset="0">Learn More</a></li>
        <li><a href="get_involved.html" data-soffset="0">Get Involved</a></li>
        <li><a href="watch_a_service.html" data-soffset="0">Watch A Service</a></li>
        <li><a href="give_online.html" data-soffset="0">Give Online</a></li>
        <li><a href="plan_a_visit.php" data-soffset="0">Plan A Visit</a></li>
        <li><a href="get_in_touch.php" data-soffset="0">Get In Touch</a></li>
      </ul>
    </div>
</header>


<!-- INTRO SPLASH -->
        <nav id="intro-nav"></nav>

  
<!-- Desktop Only NAVIGATION -->
<div class="navigation hidden-phone hidden-tablet">
	<ul id="main-nav">
		<li>
            <a href="learn_more.html">learn<br>more<br/></a>
        </li>
		<li>
            <a href="watch_a_service.html">watch a<br>service<br/></a>
        </li>
		<li>
            <a href="plan_a_visit.php">plan<br>a visit<br/></a>
        </li>
		<li class="logo-wrap">
            <a href="home.html"><img alt="Praise Church" title="Praise Church" src="images/logo.png"/></a>
        </li>
		<li>
            <a href="get_involved.html">get<br>involved<br/></a>
        </li>
		<li>
            <a href="give_online.html">give<br>online<br/></a>
        </li>
		<li>
            <a href="get_in_touch.php">get in<br>touch<br/></a>
        </li>
	</ul>
</div>
	


<!-- SHOWCASE BLOCK -->
<section id="plan-a-visit" class="clearfix bg-dark master-section">
<div class="wrapper-transparent">
	<div class="scroll-content beneath-intro">	

	<section class="container-fluid mob-bg-remove">
    <div class="row-fluid">
        <section class="image-container">
            <div class="row">
            
  <div class="image-wrap-noshadow" id="wrapper">

          
              <div class="top-element text-bg-1 narrowside floatcenter">
                
                        <div class="shoutout-no-border">
                        <h4>Plan A Visit</h4>
                        <p>Pastor Steven Furtick is the founder and lead pastor of Elevation Church based in Charlotte, NC. He is also the New York Times® Best Selling author of "Greater" and the national bestseller "Sun Stand Still". Pastor Steven holds the Master of Divinity degree from The Southern Baptist Theological Seminary. He and his wife Holly live in the Charlotte area with their two sons, Elijah and Graham, and daughter, Abbey.</p>
                        <h2>Worship Services</h2>
                        <p>Sunday 10:00AM, 11:30AM</p>
                        <h2>Address</h2>
                        <p>8150 N Major Dr<br>Beaumont, TX 77713</br></p>

                        </div>
                        
            <div class="row">
                <article class="floatleft-pad">
                	<a href="https://maps.google.com/maps?daddr=8325+Walker+Rd,+Beaumont,+TX&hl=en&sll=30.080978,-94.128113&sspn=0.423046,0.688019&mra=ls&t=m&z=11" target="_iframe" class="btn btn-praisechurch">GET DIRECTIONS</a>
                </article>
            </div>  
                  
            <div class="add-bottom"></div>
                          
              </div>
              
       
              <div class="top-element text-bg-1 narrowside floatcenter">
                
                <div class="shoutout-no-border">
                    <h4>Select A Service</h4>
                    
{{SelectAService}}

                </div>
              </div>
            </div>               
            </div><!--/ row-fluid-->   
        </section><!--/ container-->       
	</div>
	</section><!--/ page-->




<section id="plan-map">
<iframe id="map-canvas" src="/map.html" width="100%" height="100%"></iframe>  
  </section><!--/ page-->



    


    <!-- page:starts-->
    <section class="footer container-fluid section">
        <div class="row-fluid">
            <section class="container">
                <div class="row">
                    <article class="contactus span12 text-center">
                        <a href="#" class="logo"><img alt="praise church" title="praise church" src="images/foot-badge.png"></a>
                        <h1>Praise Church <span>|</span> 8150 N Major Dr<br/>Beaumont <span>|</span> Texas</h1>
                        <p>Service Times <span>|</span> 10AM &amp; 11:30AM</p>
                    </article>
                 </div>



                 <div class="row foot-soc">
                    <article class="span12 text-center">
                        <nav class="social-links">
                            <a class="facebook" href="https://www.facebook.com/praisebeaumont" target="_blank">
                                <img alt="Praise Church" title="Praise Church" src="images/footer_facebook.png" >
                            </a>
                            <a class="twitter" href="https://twitter.com/PraiseChurchTv" target="_blank">
                                <img alt="Praise Church" title="Praise Church" src="images/footer_twitter.png" >
                            </a>
                            <a class="instagram" href="http://instagram.com/praisechurchtv" target="_blank">
                                <img alt="Praise Church" title="Praise Church" src="images/footer_instagram.png" >
                            </a>
                            <a class="rss" href="https://itunes.apple.com/us/podcast/praise-church/id378331161" target="_blank">
                                <img alt="Praise Church" title="Praise Church" src="images/footer_rss.png" >
                            </a>
                        </nav>
                    </article>
                 </div>

            </section>
        </div>
    </section>



    <section class="footer-down container-fluid section">
        <div class="row-fluid">

            <section class="container">
                 <div class="row">
                    <article class="span12">
                        <div class="copyright text-center">        
                            <p>Copyright &copy; 2013 Praise Church.</p>        
                        </div>
                    </article>
                 </div>

            </section>
        </div>
    </section>
    <!--page:ends-->


	</div>
</div>
</section>


</div>
<!--main-wrapper:ends-->


<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="javascripts/jquery.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="javascripts/jquery.waitforimages.js"></script> 
<script src="javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="javascripts/waypoints.min.js" type="text/javascript"></script>
<script src="javascripts/jquery.hoverdir.js" type="text/javascript"></script>
<script src="javascripts/jquery.backstretch.min.js" type="text/javascript"></script>	 
<script src="javascripts/jquery.colorbox.js" type="text/javascript"></script>  
<script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="javascripts/jquery.fancybox-1.3.4.js" type="text/javascript" ></script>
<script type="text/javascript" src="javascripts/jquery.tweet.js"></script>
<script defer src="javascripts/jquery.flexslider.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
<script src="javascripts/responsive-nav.js" type="text/javascript" ></script>
<script src="javascripts/scroll.js" type="text/javascript"></script> 
<script src="forms/selectaservice_files/formoid1/formoid-metro-orange.js" type="text/javascript"></script> 

<script src="javascripts/script_inside.js" type="text/javascript"></script> 

    <script>
        var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
          animate: true, // Boolean: Use CSS3 transitions, true or false
          transition: 400, // Integer: Speed of the transition, in milliseconds
          label: "Menu", // String: Label for the navigation toggle
          insert: "after", // String: Insert the toggle before or after the navigation
          customToggle: "", // Selector: Specify the ID of a custom toggle
          openPos: "relative", // String: Position of the opened nav, relative or static
          jsClass: "js", // String: 'JS enabled' class which is added to <html> el
          init: function(){}, // Function: Init callback
          open: function(){}, // Function: Open callback
          close: function(){} // Function: Close callback
        });
    </script>
    
		<!-- Full Screen Background Images are defined via JS here: -->
    <script>
        $.backstretch([
          "images/worship blurred.jpg"
        ], {
            fade: 3000,
            duration: 4000
        });
    </script>   



</body>
</html>

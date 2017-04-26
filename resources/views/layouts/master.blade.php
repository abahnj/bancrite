<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Bancrite</title>
	<meta name="description" content="">
	<meta name="author" content="">
   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">    
   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
</head>
<body>
	<div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>
  

@yield('content')

   <!-- About Section
   ================================================== -->
   <section id="about">
      <div class="row section-header">
      	<div class="twelve columns">	
      		<div class="icon-wrap">
            	<i class="fa fa-group"></i>
         	</div>
	         <h1>About Us.</h1>
	         <p class="lead">Helping Forex traders improve their trading skills through impacting more knowledge about the industry. We
show you how to trade the market by yourself using your own Funds.</p>
         </div>
      </div> <!-- end section-header -->             	
      <div class="row section-content">
			<div class="six columns">
		      <h3>Our Process.</h3>
		      <p>Our status as an accredited academy means that we can offer you a unique accredited qualification in financial trading, helping
you on your path to success.</p>
	      </div>
	      <div class="six columns">
		      <h3>Our Approach.</h3>
		      <p>Bancrite has been designed to prepare a complete beginner for the challenges of trading on the world’s currency
markets. </p>
	      </div>            
      </div> <!-- end section-content -->  
      <div class="row section-content">
			<div class="six columns">
		      <h3>Industry Focused</h3>
		      <p>Our programmes focus specifically on trading with a practical teaching approach that will make you into
a desk-ready recruit able to progress seamlessly into a job with any bank, broker or fund manager.</p>
	      </div>
	      <div class="six columns">
		      <h3>Career Development</h3>
		      <p>We provide tailored advice and networking opportunities to develop your financial career. We also offer
interview coaching and CV workshops, giving you the best chance of success.</p>
	      </div>            
      </div> <!-- end section-content -->       
      <div id="call-to-action">	       
		   <div class="row">
		      <div class="twelve columns">		         		
			      <h2><a href="#">Want to learn More.</a></h2>
			      <p class="lead">
			     Subscribe and a customer service representative will be with you shortly to match you to a trainer	
					</p>
			   </div>
		   </div> <!-- end section-ads -->		         	         
	   </div> <!-- end call-to-action -->		   	
   </section> <!-- About Section End-->    
   <!-- Location Section
   ================================================== -->
	<section id="location">
		<div class="contacts">		
			<div class="row contact-details">		           		         
			   <div class="columns">
				   <h3><i class="fa fa-phone"></i>Phone Numbers.</h3>
				   <p>Phone: +44 (20) 3151 5550
				   </p>
			   </div>	 
			   <div class="columns end">
				   <h3><i class="fa fa-envelope"></i>Emails.</h3>
				   <p>admin@bancrite.com<br>
				   	info@bancrite.com <br>
				   </p>
			   </div>          	
		 	</div> <!-- end contact-details -->		  
		</div> <!-- end contacts -->
	</section> <!-- end location section -->
   <!-- footer
   ================================================== -->
  @include('layouts.footer')
</body>
</html>
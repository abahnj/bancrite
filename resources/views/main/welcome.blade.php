@extends('layouts.master')

@section('content')
 <!-- Intro Section
   ================================================== -->
   <section id="intro">
   	
       @include('layouts.nav')  	
   	
       <div  id="main" class="row">
	   	<div class="twelve columns" >
	   		<h1>FX-E Training</h1>
	   		<p>Learn how to be a profitable and consistent trader. Start your journey today by choosing the option thats right for you.</p>
	   		<h5 style="margin-bottom:20px"></h5>
   			<!-- Begin MailChimp Signup Form -->
	        <div id="mc_embed_signup">
	            <form action="/" method="POST">
	                           {{csrf_field()}}

                   <input type="name" id="name" name="name" class="form-control required email"
 placeholder="Enter your Name" aria-required="true">

 <input type="email" id="email" name="email" class="form-control required name"
 placeholder="Enter your Email" aria-required="true">

 <input type="name" id="skype" name="skype" class="form-control required"
 placeholder="Optional: Skype" aria-required="true" >
	               <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	               <!-- <div class="clear"> --><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"><!-- </div> -->
	          	</form>
	         </div>
	         <ul class="social">
	            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div> 
      </div> <!-- main end -->    	
   </section> <!-- end intro section -->  
@endsection('content')
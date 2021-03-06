<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" id="sheldonfarmbaskets-com">

<head>
  <meta http-equiv="Content-Type" content="Sheldon Farm Baskets, Hand Crafted and Painted Baskets by Susan Morello" text/html; charset=iso-8859-1" />
  <meta name="keywords" content="Sheldon Farm, Sheldon Farm Baskets, Hand Crafted Baskets, Hand Painted Baskets, Basket Gifts, Basket Crafts, basket shop, Susan Morello, Mikal Morello, micagrafica, sheldonfarmbaskets, painted baskets, micagrafica.com, homemade baskets, new england baskets, barre ma crafts" />
  <meta name="description" content="Sheldon Farm Hand Crafted Baskets of New England.  Hand Crafted Baskets by Susan Morello out of Barre Massachusetts." />
  <meta name="verify-v1" content="97lgsFBmZvHqQzlp7cGPNQ1dPZ4NPYAg2gcAvGEm5X0=" />
  <title>Sheldon Farm Baskets : Contact Us</title>

  <link rel="stylesheet" type="text/css" href="css/base.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

  <style type="text/css">
  </style>

</head>

<body>
<div class="bg">
    <div id="wrapper2">
     <div class="tag"></div>
  </div>
  
  <div id="wrapper"></div>

  <div id="masthead"><a href="index.html"><span>SheldonFarmBaskets.com</span></a></div>
  
  <ol id="toc">
    <li><a href="index.html">Homepage</a></li>
    <li><a href="aboutus.html">About Us</a></li>
	<li><a href="baskets.html">Baskets</a></li>
	<li><a href="shoponline.html">Shop Online</a></li>
    <li class="current"><a href="contactus.html">Contact Us</a></li>
	<li class="tab"><a class="tab" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=M5P3H33296WNA&display=1&ccp_header_image=http://www.sheldonfarmbaskets.com/images/paypal_header.jpg">My Cart</a></li>
  </ol>

  
  <div id="containertop">
  </div>
  
  <div id="container">
    <div id="page-wrap">
		    <img src="images/contact_content_title.jpg" alt="Contact Image Title" />
	  <p>
       <br />
	    <b>Questions, Concerns, Comments?</b>  Fill out the email form below and we will respond promptly.<br />
      </p>	<br /><br />			
	  <div id="contact-area">
        <form method="post" action="contactengine.php">
		  <table>
		    <tr>
			  <td class="left"><label for="Name">Name:</label></td>
			  <td><input type="text" name="Name" /></td>
			</tr>
			<tr>
			  <td class="left"><label for="Tel">Phone:</label></td>
			  <td><input type="text" name="Tel" /></td>
			</tr>
			<tr>
			  <td class="left"><label for="Email">Email:</label></td>
			  <td><input type="text" name="Email" /></td>
			</tr>
			<tr>
			  <td class="left"><label for="Message">Message:</label></td>
			  <td><textarea name="Message" rows="20" cols="20"></textarea></td>
			</tr>
	      </table>
		 <center><div id="captcha-area">
				
				<?php
				require_once('recaptchalib.php');
				$publickey = "6Ld3wAgAAAAAAMJ1iynXvyQj8Xzch9rtiCnDaIHO";
				$privatekey = "6Ld3wAgAAAAAAAOuMfSLE-1WlNHZ8apWNgc0YQ3P";
				
				# the response from reCAPTCHA
				$resp = null;
				# the error code from reCAPTCHA, if any
				$error = null;
				
				# are we submitting the page?
				if ($_POST["submit"]) {
				  $resp = recaptcha_check_answer ($privatekey,
												  $_SERVER["REMOTE_ADDR"],
												  $_POST["recaptcha_challenge_field"],
												  $_POST["recaptcha_response_field"]);
				
				  if ($resp->is_valid) {
					echo "You got it!";
					# in a real application, you should send an email, create an account, etc
				  } else {
					# set the error code so that we can display it. You could also use
					# die ("reCAPTCHA failed"), but using the error message is
					# more user friendly
					$error = $resp->error;
				  }
				}
				echo recaptcha_get_html($publickey, $error);
				?>
				
        </div></center>
		 <br /> <input type="submit" name="submit" value="Submit" class="submit-button" />
		</form>
	  </div>
	</div>
	<div id="rightwrapper">
      <div class="rightnavtop2"></div>
      <div class="rightnav">
	  <br />
	  <br />
	        
			<h2>Company Address</h2>
			<p>
			Susan Morello <br />
            Sheldon Farm Baskets<br />
			Barre, MA 01005<br />
			</p>
			<h2>Email Address</h2>
			<p>
			<script type="text/javascript" language="javascript">
			
<!--
ML="dfkbr=/@<cm:\" .sltoe>ainh";
MI="8E=H4C15<:EF@AB;FG1B7?HC@0BG1E4:3E?2CA?>9B:<DFG1B7?HC@0BG1E4:3E?2CA?>9B:86ED";
OT="";
for(j=0;j<MI.length;j++){
OT+=ML.charAt(MI.charCodeAt(j)-48);
}document.write(OT);
// --></script>

             <noscript>You need JavaScript to see my email address</noscript>
			</p>
			<p>
			<a href="comments.html"> <img src="images/comments_link.jpg" alt="Comments Link"/></a><br />
			<a href="comments.html">Leave a Comment</a>
			</p>
			<br />
	  </div>
	  <div class="rightnavbottom"></div>
	</div>
		<div style="clear:both"> </div>
	<br />

  </div>
  
  <div id="containerbottom">
  </div>
  
  <div id="footer">
    <p>&copy; Copyright Sheldon Farm Baskets.  All Rights Reserved.  <a href="sitepolicy.html">Site Policy & Terms of Use Agreement</a>&nbsp;&nbsp;|  <a href="links.html">Basket links</a>&nbsp;&nbsp;| <a href="sitemaplist.html">Sitemap</a>&nbsp;&nbsp;| <a href="http://hireme.micagrafica.com">Web Design</a> by <a href="http://hireme.micagrafica.com">MicaGrafica</a> </p>

	<p><a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
       </a>
	</p>
  </div>
  </div>



<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7580853-5");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

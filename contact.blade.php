<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Jyothirgamaya Peace Building Symposium</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!----drop down----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>
</head>
<body>
<div class="header">
	  <header class="row">
        @include('mainheader')
    </header>
</div>
<div class="about_banner">
	<div class="container">
		<h2>Contact</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-1 column-13">
	   <i class="fa fa-envelope-o envelop"></i>
	      <address class="address">
           <!--   <p>ahghc <br>Glasgow, DC 45 Fr 45.</p>-->
              <dl>
                 <dt></dt>
                 <dd>Freephone :&nbsp;<span> +91 9746281996</span></dd>
                 <dd>Telephone :&nbsp;<span> +91 8848238032</span></dd>
                 <dd>FAX :&nbsp;<span>+91 9995125042</span></dd>
                 <dd>E-mail :&nbsp;<a href="mailto:@example.com">info@jpbs.com</a></dd>
                 
              </dl>
           </address>
		
	</div>
	<div class="col-md-9 column-9">
	  <h3>Feedback</h3>
	   <p class="m_4">"SEND YOUR FEEDBACK HERE!!!!."</p>
		   <form class="contact" action="/create" method="post">
			  <input type="text" class="text" name="c_name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			  <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			  <input type="text" class="text" value="location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			   <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
			  <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
	          <div class="submit-wrap">
	          	<input type="submit" value="Send">
	          	<input type="reset" value="Clear">
	          </div>
		   </form>
      </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<div class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>


 @include('footer')
<!----language selector----->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
	$( document ).ready( function() {
		$( '.uls-trigger' ).uls( {
			onSelect : function( language ) {
				var languageName = $.uls.data.getAutonym( language );
				$( '.uls-trigger' ).text( languageName );
			},
			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
		} );
	} );
</script>
</body>
</html>
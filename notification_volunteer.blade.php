
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>yothirgamaya Peace Building Symposium</title>
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
<!-- Owl Stylesheets -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
        <div class="container">

            <div class="col-sm-3 logo">
              <h1><a href="{{url('volunteer_home')}}"><span class="highlight">JOTHIR<br>GAMAYA</span><sub>PBS</sub></a></h1>
            </div>
            <div class="col-sm-9 logo_right">
               <div class="social">
                <!--  <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
                  <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                  <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
                  <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
                  <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
               </div>-->
            <!-- script for menu -->
            <span class="menu"><div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-2548713984</p>



      @foreach($uname as $datas)
{{ $datas->name }} @endforeach

            </div></div></span>
            <div class="top-menu">
                
            </div>
           
                          
                    </div>
                  </div>
                </div>
              <div class="clearfix"></div>
         </div>
       </div>
</div>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">

            <!---------------------space adjustment----------------->
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>

           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
           <li><a href=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </a></li>
<!----space adjustment ends----------------->
           

            
            <li class="current_page"><a href="{{url('volunteer_home')}}">Home</a></li>
            <li><a href="{{url('personal_volunteer')}}">
      @foreach($uname as $datas)
{{ $datas->name }} @endforeach
'S HOME</a></li>
            <li><a href="{{url('notification_volunteer')}}">NOTIFICATION</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">MESSAGES<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="{{url('inbox_volunteer')}}">INBOX</a></li>
                <li><a href="{{url('outbox_member')}}">OUTBOX</a></li>
              <!--  <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="career.html">Career</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="grids.html">Grids</a></li>-->
              </ul>
            </li>
            
            <li><a href="{{url('contact')}}">Logout</a></li>
        </ul>
        
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<script type="text/javascript">
        $(function() {
        blinkeffect('#txtblnk');
        })
        function blinkeffect(selector) {
        $(selector).fadeOut('slow', function() {
        $(this).fadeIn('slow', function() {
        blinkeffect(this);
        });
        });
        }
</script>
<!--<div class="demo">
  <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">                
    Its easier to lead men to combat, stirring up their passion, than to restrain them and direct them toward the patient labors of peace."

- Andre Gide 
  </marquee>     
</div>-->

<!--<div class="about_banner">
	<!--<div class="container">
		<h2>Forum</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Forum</span></span>
	</div>
</div>-->
<div class="about_top">
 <div class="container">
	<div class="col-md-3 forum">

		    <!--------------------------- viewving members-------------------->
	        <div class="fb-like-button social-item">
	  			<a href="{{url('volunteer_view_members')}}"> <div class="social-item-inner"> 
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
	  				<span class="like-count">View</span> 
	  				<span class="like-text"> Members </span> 
	  			</div></a> 
	  		</div>

	  		<!--<div class="fb-like-button social-item">
	  			<a href="#" title="" target="_blank"> <div class="social-item-inner"> 
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
	  				<span class="like-count">Upgrade to </span> 
	  				<span class="like-text"> Members </span> 
	  			</div></a> 
	  		</div>-->

	  	<!--------------------------- MEMBERS viewing LINK/upgrading link-------------------->
	  	<!-------------------------------Volunteers approval and viewving--->

	  		<div class="twitter-like-button  social-item ">
	  			 <a href="volunteer_view_volunteer" > <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">View</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>

	  	  <!--  <div class="twitter-like-button  social-item ">
	  			 <a href="admin_approve_volunteer"> <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">Approve</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>-->
	  	    <!---------------- volunteers approving and viewwing--------------------------->


	  	    <!-------- section of work----------------->
	  	    <div class="youtube-subscribers-button  social-item ">
				 <a href="volunteer_view_work" ><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">View</span> 
					 <span class="like-text"> Work </span>
			   </div> </a> 
	  		</div>

	  		<!--<div class="youtube-subscribers-button  social-item ">
				 <a href="admin_add_work"><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">Add New</span> 
					 <span class="like-text"> Work</span>
			   </div> </a> 
	  		</div>-->

	  		<!---------------------------- section works ends-------------------------------->

	  <!-------- create group------------------->
	  		<div class="linkedin-button social-item ">
			 	 <a href="volunteer_view_group"> <div class="social-item-inner">
			 		<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
			 		<span class="like-count">View Groups</span> <span class="like-text"> Follower </span>
			 	</div> </a> 
	  		</div>

	  <!------------------ create group section ends--------------------->
	  <!------------------EMERGENCY MESSAGE------------------------------->
	  		<div class="dribble-button social-item ">
	 			 <a href="volunteer_emergency_message" title="" target="_blank"> <div class="social-item-inner">
	 				<span class=""></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="like-count"></span> 
	 				<span class="like-text">EMERGENCY MESSAGE </span>
	 			</div> </a> 
	  		</div>
	  	<!------------------------- EMERGENCY MESSAGE---------------------->
	  		<!-------<div class="gplus-like-button  social-item">
	 			 <a href="#" title="" target="_blank"> <div class="social-item-inner">
	 				<span class="fa fa-google-plus sc-icon"></span> <span class="like-count">120</span> 
	 				<span class="like-text"> Followers </span> 
	 			</div> </a>
	  	    </div>-------------->
	</div>
	<div class="col-md-9 column-15">


		
<br>

<div class="table-users">
   
   
   <table cellspacing="0" border="2">
   	<tr><td colspan="4" height="50" width="1000" bgcolor="#20B2AA"><center><b>NOTIFICATIONS</b></center></td></tr>
      <tr bgcolor="cyan">
         <th width="20">ID</th>
         <th width="230">TITLE</th>
         <th>DESCRIPTION</th>
         <th>DATE</th>
        
      </tr>

      <tr>
         <td>1</td>
         <td><b>notification</b></td>
         <td>“You've gotta dance like there's nobody watching,
Love like you'll never be hurt,
Sing like there's nobody listening,
And live like it's heaven on earth.” </td>
         <td>05/04/2019</td>
         
      </tr>

     
   </table>
</div>
</div>
	   
	   	 <div class="clearfix"> </div>
	   </div>
	  
	   	 <div class="clearfix"> </div>
	   </div>
	</div>		
    <div class="clearfix"> </div>
 </div>
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
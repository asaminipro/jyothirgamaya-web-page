<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<body>
<!-- header-section-starts -->
<div class="header">
	  <header class="row">
        @include('member_header')
    </header>
</div>
<!--<div class="about_banner">
	<!--<div class="container">
		<h2>Forum</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Forum</span></span>
	</div>
</div>-->
<div class="about_top">
 <div class="container">
	<div class="col-md-3 forum">

		<!--------------------------- MEMBERS ADDING LINK/upgrading link-------------------->
	        <div class="fb-like-button social-item">
	  			<a href="{{url('admin_view_members')}}"> <div class="social-item-inner"> 
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

	  	<!--------------------------- MEMBERS ADDING LINK/upgrading link-------------------->
	  	<!-------------------------------Volunteers approval and viewving--->

	  		<div class="twitter-like-button  social-item ">
	  			 <a href="admin_view_volunteer" > <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">View</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>

	  	    <div class="twitter-like-button  social-item ">
	  			 <a href="admin_approve_volunteer"> <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">Approve</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>
	  	    <!---------------- volunteers approving and viewwing--------------------------->


	  	    <!-------- section of work----------------->
	  	    <div class="youtube-subscribers-button  social-item ">
				 <a href="admin_view_work" ><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">View</span> 
					 <span class="like-text"> Work </span>
			   </div> </a> 
	  		</div>

	  		<div class="youtube-subscribers-button  social-item ">
				 <a href="admin_add_work"><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">Add New</span> 
					 <span class="like-text"> Work</span>
			   </div> </a> 
	  		</div>

	  		<!---------------------------- section works ends-------------------------------->

	  <!-------- create group------------------->
	  		<div class="linkedin-button social-item ">
			 	 <a href="admin_create_group"> <div class="social-item-inner">
			 		<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
			 		<span class="like-count">Create Groups</span> <span class="like-text"> Follower </span>
			 	</div> </a> 
	  		</div>

	  <!------------------ create group section ends--------------------->
	  <!------------------EMERGENCY MESSAGE------------------------------->
	  		<div class="dribble-button social-item ">
	 			 <a href="admin_emergency_message" title="" target="_blank"> <div class="social-item-inner">
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
			<a href="">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="">FRIENDS</a>

		<!--------------news feed FORUM---------------------------------->
		<form class="contact" action="/create" method="post">
			<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Write somthing here....</textarea>
	          <div class="submit-wrap">
	          	<input type="submit" value="Send">
	          	<input type="reset" value="Clear">
	          </div>
		   </form>
<!----------------------------------news feed forum ends------------------------->

	   
<!--------------------------CONTENT DISPLAYING AREA---------------------------------------------->
<br><br><br>

	   <h4>View your Posts here..</h4>
	   <div class="forum_box1">
	   	 <span class="head_2">
            <a href="">heading</a>
         </span>
	   	 <h3>Mon, 15/11/2015-12:24</h3>
	   	 <div class="col-sm-3 forum_box1-left">
	   	 	<h4><a href="classified_detail.html">name of user</a></h4>
	   	 	<a href="classified_detail.html"><img src="images/c9.jpg" class="img-responsive" alt=""/></a>
	   	 	<h5>80 Topics</h5>
	   	 	<p>0 replies</p>
	   	 </div>
	   	 <div class="col-sm-9 forum_box1-right">
	   	 	<p>"contents of the hghgd hgdfjh fjhfzf fdhghfkj ghfzjhfl vfjdvkhvl vdfvj hjjhfajv vfgvjvjfvv hvfvjv."</p>
            <div class="post-element clearfix">                         
 	  	        <div class="post__1">
    	          <span class="post__1-item post__1-date"><a href="#">Add new Comment</a></span>
    	          <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
    		          <i class="fa fa-heart-o"></i></a></span><span>1</span>
    		      </span>
    		       <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
    		          <i class="fa fa-comment-o"></i></a></span><span>12</span>
    		      </span>
    		       <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
    		          <i class="fa fa-eye"></i></a></span><span>10</span>
    		      </span>
    		    </div>                     
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